<?php
require_once 'inc.php';
$table=$_POST['table'];
$xuhao=$_POST['xuhao'];
$weizhi=$_POST['weizhi'];
$pageno=$_POST['pageno'];
$tid=$_POST['tid'];
$productList=array();
if($xuhao!='' && $weizhi!='' && $table!=''){
	//需要传送来是1：否进行过分类 2：还有具体怎么提前 （只操作sort）3后台还需不需要默认order排序，4
	//$order="order by time desc,sort asc";
	$where='';
	$where3='';
	if($tid==''){
		$where='';
		$where3='';
	}
	else{
		$where=" and type_id=$tid";
		$where3=" and type_id=$tid";
	}
	if($weizhi=='up'){
		//and time>(select time from $table where id=$xuhao)
	$where.="  and sort<=(select sort from $table where id=$xuhao) order by sort desc,time asc limit 0,1";
	//上一条 (时间倒叙，sort正序情况下的上一条)
	}
	else{
		//and time<(select time from $table where id=$xuhao)
	$where.="  and sort>=(select sort from $table where id=$xuhao) order by sort asc,time desc limit 0,1";
	//下一条 (时间倒叙，sort正序情况下的下一条)
	}
	$sql="select * from $table where id!=$xuhao".$where;//这句sql是用来查询上或下一条
	
	$xiangqing=$db->fetch($db->query($sql));
	if(empty($xiangqing)){
		echo '3';//没有上或下一条的情况
	}
	else{
			$mod_content='';
			if($weizhi=='up'){
				$mod_content = "sort=".($xiangqing['sort']-1);
			}
			else{
				$mod_content = "sort=".($xiangqing['sort']+1);
			}
			$where2='id='.$xuhao;
			$isbool= $db->update($table, $mod_content, $where2);
			if($isbool!==false){
				//更换排序成功的情况
				$page_size = 20;
				$current_page=$pageno;
				$nums = $db->query_count($table,$where3);
				$order3=' ORDER BY sort ASC,time DESC';
				$result = $db->query_page_list($table,$page_size,$current_page,$order3,$where3);
				while ($row = $db->fetch($result)){
					$result2=$db->query("SELECT name FROM $table"."_type WHERE id=".$row['type_id']);
					$type=$db->fetch($result2);
					if($tid!=''){
                        $productList[] = array(
                            'id'=>$row['id'],
                            'title'=>$row['title'],
                            'type_name'=>$type['name'],
                            'time'=>date('Y-m-d',$row['time']),
                            'simage'=>$row['image'],
                            'sort'=>$row['sort'],
                            'type_id'=>$row['type_id']
                        );
                    }
                    else{
                        $productList[] = array(
                            'id'=>$row['id'],
                            'title'=>$row['title'],
                            'type_name'=>$type['name'],
                            'time'=>date('Y-m-d',$row['time']),
                            'simage'=>$row['image'],
                            'sort'=>$row['sort'],
                            'type_id'=>''
                        );
                    }
				}
				$ch=array();
				for($i=0;$i<count($productList);$i++){
					$ch[]=implode('|', $productList[$i]);
				}
				$ch2=implode("*", $ch);
				echo $ch2;
			}
			else{
				//更换排序失败的情况
				echo '2';
			}
	}
	
	
}
else{
	echo '1';//这是不正常的情况
}






?>