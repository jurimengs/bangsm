<?php 
class DB{
	private $db_type; //数据库类型
	private $db_host; //数据库主机
	private $db_user; //数据库用户名
	private $db_pwd;  //数据库用户名密码
	private $db_name; //数据库名
	private $conn;     //数据库连接标识;
	private $db_charset;  //数据库编码
	private $bulletin = true; //是否开启错误记录
	private $show_error = true;//测试阶段，显示所有错误,具有安全隐患,默认关闭
	private $is_error = false; //发现错误是否立即终止,默认true,建议不启用，因为当有问题时用户什么也看不到是很苦恼的
	
	/**
	* 构造函数
	*/
	public function __construct($db_type,$db_host,$db_user,$db_pwd,$db_name,$db_charset,$show_error){
		$this->db_type = $db_type;
  		$this->db_host = $db_host;
  		$this->db_user = $db_user;
  		$this->db_pwd = $db_pwd;
  		$this->db_name = $db_name;
  		$this->db_charset = $db_charset;
		$this->show_error = $show_error;
  		$this->connect();
	}
	
	/**
	 * 数据库连接
	 */
	public function connect() {
		try{
			if ($this->conn == "pconn") {
				//永久链接
				$this->conn = new PDO("$this->db_type:host=$this->db_host;dbname=$this->db_name", "$this->db_user", "$this->db_pwd",array(PDO::ATTR_PERSISTENT => true));
			} else {
				//即使链接
				$this->conn = new PDO("$this->db_type:host=$this->db_host;dbname=$this->db_name", "$this->db_user", "$this->db_pwd",array(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true));
			}
		}catch (PDOException $e){
			die('数据库连接出错：'.$e->getMessage());
		}
		$this->conn->query('SET NAMES '.$this->db_charset); 
		
	}
		
	/**
	 * exec 一般执行增、删、改
	 */
	public function exec($sql){
		$result = $this->conn->exec($sql);
		if($result===false){
			if ($this->show_error) {
				$this->show_error("错误SQL语句：", $sql);
			}
		}
		return $result;
	}
	
	/**
	 * 一般执行查
	 * Enter description here ...
	 * @param $sql
	 */
	public function query($sql){
		$result = $this->conn->query($sql);
		if($result===false){
			if ($this->show_error) {
				$this->show_error("错误SQL语句：", $sql);
			}
		}
		return $result;
	}
	
	/**
	 * 取得记录集,获取数组-索引和关联,使用$row['字段名'],不可以使用下标 
	 */
	public function fetch_all($result){
		$result -> setFetchMode(PDO::FETCH_ASSOC);
		return $result->fetchAll();
	}
	
	/**
	 * 获取一条关联数组,使用$row['字段名']
	 */
	public function fetch($result){
		$result -> setFetchMode(PDO::FETCH_ASSOC);
		return $result->fetch();
	}
	
	/**
	 * 简化删除
	 */
	public function delete($table,$where){
		return $this->exec("DELETE FROM $table WHERE $where");
	}
	
	/**
	 * 简化插入insert
	 */
	public function insert($table, $columnName, $value) {
		return $this->exec("INSERT INTO $table ($columnName) VALUES ($value)");
	}
	
	/**
	 * 简化修改update
	 */
	public function update($table, $mod_content, $where) {
		return $this->exec("UPDATE $table SET $mod_content WHERE $where");
	}
	
	/**
	 * 根据ID查询
	 */
	public function query_by_id($table,$id) {
		return $this->query("SELECT * FROM $table WHERE id=$id");
	}
	
	/**
	 * 获取总记录数
	 */
	public function query_count($table,$where){
		$result = $this->query("SELECT COUNT(*) FROM $table WHERE 1=1 $where");
		return $result->fetchColumn();
	}
	
	/**
	 * 分页查询
	 */
	public function query_page_list($table,$page_size,$current_page,$order,$where){		
		$sql = "SELECT * FROM `$table` WHERE 1=1 $where $order LIMIT ".($page_size * ($current_page-1)).", ".$page_size;
		return $this->query($sql);
		
	}
    /**
     * 手工sql分页
     */
    public function query_page_list2($sql2,$page_size,$current_page){
        $sql = "$sql2 LIMIT ".($page_size * ($current_page-1)).", ".$page_size;
        return $this->query($sql);

    }
	/**
	 * 取得上一步 INSERT 操作产生的 ID
	 * */
	public function lastInsertId() {
		return $this->conn->lastInsertId();
	}
	
	/**
	 * 
	 */
	public function beginTransaction(){
		$this->conn->beginTransaction();
	}
	
	public function commit(){
		$this->conn->commit();
	}
	
	public function rollBack(){
		$this->conn->rollBack();
	}
	
	/**
	 * 输出错误及SQL语句
	 */
	public function show_error($message = "", $sql = "") {
		if (!$sql) {
			echo "<font color='red'>" . $message . "</font>";
			echo "<br />";
		} else {
			echo "<fieldset style=' width:100%'>";
			echo "<legend>错误信息提示</legend><br />";
			echo "<div>";
			echo "<div style='height:20px; background:#000;'>";
			$errorAll = $this->conn->errorInfo();
			echo "<font color='white'>错误号：" . $errorAll[1]. "</font>";
			echo "</div><br />";
			echo "错误原因：" . $errorAll[2]. "<br /><br />";
			echo "<div style='height:20px; background:#FF0000;'>";
			echo "<font color='white'>" . $message . "</font>";
			echo "</div>";
			echo "<font color='red'><pre>" . $sql . "</pre></font>";
			$ip = $this->get_ip();
			if ($this->bulletin) {
				$time = date("Y-m-d H:i:s");
				$message = $message . "\r\n$sql" . "\r\n客户IP:$ip" . "\r\n时间 :$time" . "\r\n\r\n";

				$server_date = date("Y-m-d");
				$filename = $server_date . ".txt";
				$file_path = "logs/" . $filename;
				$error_content = $message;
				//$error_content="错误的数据库，不可以链接";
				$file = "logs"; //设置文件保存目录

				//建立文件夹
				if (!file_exists($file)) {
					if (!mkdir($file, 0777)) {
						//默认的 mode 是 0777，意味着最大可能的访问权
						die("upload files directory does not exist and creation failed");
					}
				}

				//建立txt日期文件
				if (!file_exists($file_path)) {

					//echo "建立日期文件";
					fopen($file_path, "w+");

					//首先要确定文件存在并且可写
					if (is_writable($file_path)) {
						//使用添加模式打开$filename，文件指针将会在文件的开头
						if (!$handle = fopen($file_path, 'a')) {
							echo "不能打开文件 $filename";
							exit;
						}

						//将$somecontent写入到我们打开的文件中。
						if (!fwrite($handle, $error_content)) {
							echo "不能写入到文件 $filename";
							exit;
						}

						//echo "文件 $filename 写入成功";

						echo "——错误记录被保存!";

						//关闭文件
						fclose($handle);
					} else {
						echo "文件 $filename 不可写";
					}

				} else {
					//首先要确定文件存在并且可写
					if (is_writable($file_path)) {
						//使用添加模式打开$filename，文件指针将会在文件的开头
						if (!$handle = fopen($file_path, 'a')) {
							echo "不能打开文件 $filename";
							exit;
						}

						//将$somecontent写入到我们打开的文件中。
						if (!fwrite($handle, $error_content)) {
							echo "不能写入到文件 $filename";
							exit;
						}

						//echo "文件 $filename 写入成功";
						echo "——错误记录被保存!";

						//关闭文件
						fclose($handle);
					} else {
						echo "文件 $filename 不可写";
					}
				}

			}
			echo "<br /><br /><div><a href='javascript:;' onclick='history.back()' style='color:red;'><< 点击返回</a></div>";
			if ($this->is_error) {
				exit;
			}
		}
		echo "</div>";
		echo "</fieldset>";
	}
	
	/**
	 * 获得客户端真实的IP地址
	 */
	function get_ip() {
		if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) {
			$ip = getenv("HTTP_CLIENT_IP");
		} else
			if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) {
				$ip = getenv("HTTP_X_FORWARDED_FOR");
			} else
				if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) {
					$ip = getenv("REMOTE_ADDR");
				} else
					if (isset ($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) {
						$ip = $_SERVER['REMOTE_ADDR'];
					} else {
						$ip = "unknown";
					}
		return ($ip);
	}
	
	/**
	 * 析构函数，自动关闭数据库,垃圾回收机制
	 */
	public function __destruct() {
		$this->conn = null;
	}
}


?>