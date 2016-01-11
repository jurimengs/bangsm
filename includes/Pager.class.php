<?php
class Pager{
	private $page_size;//每页显示的条目数  
    private $nums;//总条目数  
    private $current_page;//当前被选中的页  
    private $sub_pages;//每次显示的页数  
    private $page_count;//总页数  
    private $page_array = array();//用来构造分页的数组  
    private $page_link;//每个分页的链接  
    private $page_type;//显示分页的类型  
    private $baseQueryString;
    /**
    __construct是Pager的构造函数，用来在创建类的时候自动运行.
    @$page_size   每页显示的条目数
    @$nums     总条目数
    @$current_page     当前被选中的页
    @$sub_pages       每次显示的页数
    @$autoaddparams   true 当页面上有其他请求，并且带参数时，将会默认添加到后面。
	 *                false 不自动添加
	 * 
    @page_link    每个分页的链接
    @subPage_type    显示分页的类型
    
          当@subPage_type=1的时候为普通分页模式
    example：   共4523条记录,每页显示10条,当前第1/453页 首页 上页 下页 尾页
          当@subPage_type=2的时候为经典分页样式
    example：   当前第1/453页 首页 上页 1 2 3 4 5 6 7 8 9 10 下页 尾页
    */
    function __construct($page_size , $nums , $current_page , $sub_pages, $autoaddparams){  
        $this->page_size = intval($page_size);  
        $this->nums         = intval($nums);  
        if(!$current_page){  
            $this->current_page = 1;  
        }else{
            $this->current_page = intval($current_page);  
        }  
        $this->sub_pages = intval($sub_pages);  
        $this->page_count  = ceil($nums/$page_size);  
        $this->page_link = empty($page_link) ? $_SERVER['PHP_SELF'] : $page_link;
       	$this->baseQueryString = '';
       	
		if($autoaddparams) {
	   		foreach($_GET as $key => $value) {
	    	 	if(strtolower($key)!="p"){
	    	 		$this->baseQueryString = $this->baseQueryString . $key . "=" . $_GET[$key] . "&";
	    	 	}
			}
		}
       	
       	
       	
    }  
    /**
     *__destruct析构函数，当类不在使用的时候调用，该函数用来释放资源。
     */
    function __destruct(){  
        unset($this->page_size);  
        unset($this->nums);  
        unset($this->current_page);  
        unset($this->sub_pages);  
        unset($this->page_count);  
        unset($this->page_array);  
        unset($this->page_link);  
        unset($this->subPage_type);  
    }  
         
    /**
     *show_Pager函数用在构造函数里面。而且用来判断显示什么样子的分页   
     */
    function show_Pager(){  
        if($this->subPage_type == 1){
           $this->mod1();  
        }elseif ($this->subPage_type == 2){
           $this->mod2();  
        }
        echo($this->subPage_type);
    }  
     
    /**
     *用来给建立分页的数组初始化的函数。
     */
    function initArray(){  
        for($i = 0;$i < $this->sub_pages; $i++){  
        $this->page_array[$i] = $i;  
        }  
        return $this->page_array;  
    }  
     
    /**
     *construct_num_Page该函数使用来构造显示的条目
     *即使：12345678910
     */
    function construct_num_Page(){  
        if($this->page_count < $this->sub_pages){  
            $current_array = array();  
            for($i = 0;$i < $this->page_count; $i++){   
             $current_array[$i] = $i+1;  
            }  
        }else{  
            $current_array = $this->initArray();  
             if($this->current_page <= 3){  
                for($i = 0;$i < count($current_array); $i++){  
                    $current_array[$i] = $i+1;  
                }  
             }elseif ($this->current_page <= $this->page_count && $this->current_page > $this->page_count - $this->sub_pages + 1 ){  
                for($i = 0;$i < count($current_array);$i++){  
                    $current_array[$i] = ($this->page_count)-($this->sub_pages)+1+$i;  
                }  
             }else{  
                for($i = 0;$i < count($current_array); $i++){  
                    $current_array[$i] = $this->current_page-2+$i;  
                }  
             }  
        } 
        return $current_array;  
    }

	/**
	 * add by zhouman 2015-12-31
	 */
    function commonPager(){

        $mod2Str  = "<div class=\"pagination\">";
        if($this->current_page > 1){  
            $firstPageUrl = $this->page_link."?p=1&".$this->baseQueryString;
            $prewPageUrl  = $this->page_link."?p=".($this->current_page-1).'&'.$this->baseQueryString;  
            $mod2Str .= "<a href='$firstPageUrl'>首页</a>";
            $mod2Str .= "<a href='$prewPageUrl'>上页</a>";
        }else {  
        	$mod2Str .= "<a class=\"disabled\">首页</a>";
            $mod2Str .= "<a class=\"disabled\">上页</a>";
        }  
		
		// 中间的数字部分
		$pageStr = "";
        $a = $this->construct_num_Page();
		
        for($i = 0;$i < count($a);$i++){
            $s = $a[$i];
			
            if($s == $this->current_page ){
            	$url = "javascript:void(0);";
				$style = "background-color: #ccc; display:inline-block; text-align: center; width: 15px; margin: 3px;";
            }else{
            	$url = $this->page_link."?p=".$s.'&'.$this->baseQueryString;
				$style = "background-color: #eee; display:inline-block; text-align: center; width: 15px; margin: 3px;";
            }
			$pageStr .= "<a href='$url' style='$style'>".$s."</a>";
        }
		
		if($this->page_count > $this->sub_pages) {
    		if($a[0] > 1) {
    			$pageStr = "...".$pageStr;
    		}
		}
		
		if($this->page_count > $this->sub_pages) {
    		if($a[$this->sub_pages -1] < $this->page_count) {
    			$pageStr = $pageStr."...";
    		}
		}
		
		/*if($this->page_count > $this->sub_pages) {
			// 如果总页数大于当前显示页数，则显示...
			if($this -> current_page >= $this->sub_pages) {
				// 如果当前大于显示页码数
				if($this -> current_page <= ($this->page_count - $this->sub_pages + 1)) {
					// 在中间的位置
					$pageStr = "...".$pageStr."...";
				} else {
					$pageStr = "...".$pageStr;
				}
			} else {
				$pageStr = $pageStr."...";
			}
		}*/
		
		$mod2Str .= $pageStr;
		
        if($this->current_page < $this->page_count){  
            $lastPageUrl = $this->page_link."?p=".$this->page_count.'&'.$this->baseQueryString;
            $nextPageUrl = $this->page_link."?p=".($this->current_page+1).'&'.$this->baseQueryString; 
           $mod2Str .= "<a href='$nextPageUrl'>下页</a>";
            $mod2Str .= "<a href='$lastPageUrl'>尾页</a>";
        }else {  
          $mod2Str .= "<a class=\"disabled\">下页</a>";
           $mod2Str .= "<a class=\"disabled\">尾页</a>";
        }
		

        $mod2Str.="</div>";
        return $mod2Str;  
    }
    /**
     *构造普通模式的分页
     *共4523条记录,每页显示10条,当前第1/453页 首页 上页 下页 尾页
     */
    function mod1(){  
        $mod1Str  = "<div class=\"page\">";
        //$mod1Str .= "共". $this->nums."条记录，";  
        //$mod1Str .= "每页显示" . $this->page_size . "条，";  
        //$mod1Str .= "当前第" . $this->current_page."/" . $this->page_count."页 ";  

        if($this->current_page < $this->page_count){
            $lastPageUrl = $this->page_link."?p=".$this->page_count.'&'.$this->baseQueryString;
            $nextPageUrl = $this->page_link."?p=".($this->current_page+1).'&'.$this->baseQueryString;
            $mod1Str .= "<a href='$lastPageUrl'   class=\"first\">End</a>";
            $mod1Str .= "<a href='$nextPageUrl'>Next</a>";
        }else {

            $mod1Str .= "<a class=\"disabled\"  class=\"first\">End</a>";
            $mod1Str .= "<a class=\"disabled\">Next</a>";
        }
        if($this->current_page > 1){
            $firstPageUrl = $this->page_link."?p=1&".$this->baseQueryString;
            $prewPageUrl  = $this->page_link."?p=".($this->current_page-1).'&'.$this->baseQueryString;
            $mod1Str .= "<a href='$prewPageUrl'>Prev</a>";
            $mod1Str .= "<a href='$firstPageUrl'>Home</a>";

        }else {
            $mod1Str .= "<a class=\"disabled\">Prev</a>";
            $mod1Str .= "<a class=\"disabled\">Home</a>";

        }

        $mod1Str.=" <div class=\"clear\"></div></div>";
        return $mod1Str;  
    }  
     
    /**
     *构造经典模式的分页
     *当前第1/453页 首页 上页 1 2 3 4 5 6 7 8 9 10 下页 尾页
     */
    function mod4(){

        $mod2Str  = "<div class=\"pagination\">";
        //$mod2Str .= "<span>共". $this->nums."条记录,";
        //$mod2Str .= "当前第".$this->current_page."/".$this->page_count."页</span>";
        if($this->current_page > 1){  
            $firstPageUrl = $this->page_link."?p=1&".$this->baseQueryString;
            $prewPageUrl  = $this->page_link."?p=".($this->current_page-1).'&'.$this->baseQueryString;  
           // $mod2Str .= "<a href='$firstPageUrl'>首页</a>";
          $mod2Str .= "<a href='$prewPageUrl'>上页</a>";
        }else {  
         //  $mod2Str .= "<a class=\"disabled\">首页</a>";
          $mod2Str .= "<a class=\"disabled\">上页</a>";
        }  
        $a = $this->construct_num_Page();  
        for($i = 0;$i < count($a);$i++){  
            $s = $a[$i];  
            if($s == $this->current_page ){  
              //$mod2Str .= "<a class=\"current\" class=\"num\">".$s."</a>";
                $mod2Str .= "<a class='on a_active'>".$s."</a>";
            }else{  
              $url = $this->page_link."?p=".$s.'&'.$this->baseQueryString;  
              $mod2Str .= "<a href='$url' class=\"num\">".$s."</a>";
            }  
        }  
        if($this->current_page < $this->page_count){  
            $lastPageUrl = $this->page_link."?p=".$this->page_count.'&'.$this->baseQueryString;
            $nextPageUrl = $this->page_link."?p=".($this->current_page+1).'&'.$this->baseQueryString; 
           $mod2Str .= "<a href='$nextPageUrl'>下页</a>";
            $mod2Str .= "<a href='$lastPageUrl'>尾页</a>";
        }else {  
          $mod2Str .= "<a class=\"disabled\">下页</a>";
           $mod2Str .= "<a class=\"disabled\">尾页</a>";
        }

        $mod2Str.="</div>";
        return $mod2Str;  
    }
//////////
    function mod5(){
    
        $mod2Str  = "<div class=\"scott\">";
        $mod2Str .= "共". $this->nums."条记录,";
        $mod2Str .= "当前第".$this->current_page."/".$this->page_count."页";
        if($this->current_page > 1){
            $firstPageUrl = $this->page_link."?p=1&".$this->baseQueryString;
            $prewPageUrl  = $this->page_link."?p=".($this->current_page-1).'&'.$this->baseQueryString;
            $mod2Str .= "&nbsp;&nbsp;<a href='$firstPageUrl'>首页</a>";
            $mod2Str .= "&nbsp;&nbsp;<a href='$prewPageUrl'>上一页</a>";
        }else {
            $mod2Str .= "&nbsp;&nbsp;<span class=\"disabled\">首页</span>";
            $mod2Str .= "&nbsp;&nbsp;<span class=\"disabled\">上一页</span>";
        }
        $a = $this->construct_num_Page();
        for($i = 0;$i < count($a);$i++){
            $s = $a[$i];
            if($s == $this->current_page ){
                $mod2Str .= "&nbsp;&nbsp;<span class=\"current\">".$s."</span>";
            }else{
                $url = $this->page_link."?p=".$s.'&'.$this->baseQueryString;
                $mod2Str .= "&nbsp;&nbsp;<a href=\"$url\">".$s."</a>";
            }
        }
        if($this->current_page < $this->page_count){
            $lastPageUrl = $this->page_link."?p=".$this->page_count.'&'.$this->baseQueryString;
            $nextPageUrl = $this->page_link."?p=".($this->current_page+1).'&'.$this->baseQueryString;
            $mod2Str .= "&nbsp;&nbsp;<a href='$nextPageUrl'>下一页</a>";
            $mod2Str .= "&nbsp;&nbsp;<a href='$lastPageUrl'>尾页</a>";
        }else {
            $mod2Str .= "&nbsp;&nbsp;<span class=\"disabled\">下一页</span>";
            $mod2Str .= "&nbsp;&nbsp;<span class=\"disabled\">尾页</span>";
        }
    
        $mod2Str.="</div>";
        return $mod2Str;
    }
    /////


    function mod2(){

        $mod2Str  = "<div class=\"scott\" style=' font-size:15px; padding: 15px 20px'>";
       // $mod2Str .= "共". $this->nums."条记录,";
        //$mod2Str .= "当前第".$this->current_page."/".$this->page_count."页";
        if($this->current_page > 1){
            $firstPageUrl = $this->page_link."?p=1&".$this->baseQueryString;
            $prewPageUrl  = $this->page_link."?p=".($this->current_page-1).'&'.$this->baseQueryString;
           // $mod2Str .= "&nbsp;&nbsp;<a href='$firstPageUrl' class='sz'><li class='sz'>首页</li></a>";
            
            $mod2Str .= "&nbsp;&nbsp;<a href='$prewPageUrl'><li class='sz'>上页</li></a>";
        }else {
            //$mod2Str .= "&nbsp;&nbsp;<span class=\"disabled\" ><li class='sz'>首页</li></span>";
            $mod2Str .= "&nbsp;&nbsp;<span class=\"disabled\" ><li class='sz'>上页</li></span>";
        }
        $a = $this->construct_num_Page();
        for($i = 0;$i < count($a);$i++){
            $s = $a[$i];
            if($s == $this->current_page ){
                $mod2Str .= "&nbsp;&nbsp;<span class=\"current\"><li class='sz'>".$s."</li></span>";
            }else{
                $url = $this->page_link."?p=".$s.'&'.$this->baseQueryString;
                $mod2Str .= "&nbsp;&nbsp;<a href=\"$url\"><li class='sz'>".$s."</li></a>";
            }
        }
        if($this->current_page < $this->page_count){
            $lastPageUrl = $this->page_link."?p=".$this->page_count.'&'.$this->baseQueryString;
            $nextPageUrl = $this->page_link."?p=".($this->current_page+1).'&'.$this->baseQueryString;
            $mod2Str .= "&nbsp;&nbsp;<a href='$nextPageUrl' ><li class='sz'>下页</li></a>";
            //$mod2Str .= "&nbsp;&nbsp;<a href='$lastPageUrl' ><li class='sz'>尾页</li></a>";
        }else {
            $mod2Str .= "&nbsp;&nbsp;<span class=\"disabled\" ><li class='sz'>下页</li></span>";
         //   $mod2Str .= "&nbsp;&nbsp;<span class=\"disabled\" ><li class='sz'>尾页</li></span>";
        }

        $mod2Str.="</div>";
        return $mod2Str;
    }
    
 function mod6(){

        $mod2Str  = "";
        //$mod2Str .= "共". $this->nums."条记录,";
        //$mod2Str .= "当前第".$this->current_page."/".$this->page_count."页";
        if($this->current_page > 1){
            $firstPageUrl = $this->page_link."?p=1&".$this->baseQueryString;
            $prewPageUrl  = $this->page_link."?p=".($this->current_page-1).'&'.$this->baseQueryString;
            //$mod2Str .= "&nbsp;&nbsp;<a href='$firstPageUrl'>首页</a>";
            $mod2Str .= "<a href='$prewPageUrl' class='rowup rowdown_color'><span></span></a>";
        }else {
            //$mod2Str .= "&nbsp;&nbsp;<span class=\"disabled\">首页</span>";
            $mod2Str .= "<a href='javascript:void(0)' class='rowup rowdown_color'><span></span></a>";
        }
        $a = $this->construct_num_Page();
        for($i = 0;$i < count($a);$i++){
            $s = $a[$i];
            if($s == $this->current_page ){
                //$mod2Str .= "&nbsp;&nbsp;<span class=\"current\">".$s."</span>";
            }else{
                $url = $this->page_link."?p=".$s.'&'.$this->baseQueryString;
               // $mod2Str .= "&nbsp;&nbsp;<a href=\"$url\">".$s."</a>";
            }
        }
        if($this->current_page < $this->page_count){
            $lastPageUrl = $this->page_link."?p=".$this->page_count.'&'.$this->baseQueryString;
            $nextPageUrl = $this->page_link."?p=".($this->current_page+1).'&'.$this->baseQueryString;
            $mod2Str .= "<a href='$nextPageUrl' class='rowdown rowdown_color'><span></span></a>";
            //$mod2Str .= "&nbsp;&nbsp;<a href='$lastPageUrl'>尾页</a>";
        }else {
            $mod2Str .= "<a href='javascript:void(0)' class='rowdown rowdown_color'><span></span></a>";
           // $mod2Str .= "&nbsp;&nbsp;<span class=\"disabled\">尾页</span>";
        }

        $mod2Str.="";
        return $mod2Str;
    }
    
    
    ///
    
    function mod3(){
    	 
    	$mod2Str  = "";
    	//$mod2Str .= "共". $this->nums."条记录 , ";
    	//$mod2Str .= "当前第".$this->current_page."/".$this->page_count."页 ";
    	if($this->current_page > 1){
    		$firstPageUrl = $this->page_link."?p=1&".$this->baseQueryString;
    		$prewPageUrl  = $this->page_link."?p=".($this->current_page-1).'&'.$this->baseQueryString;
    		$mod2Str .= "<a href='$firstPageUrl'><li class='sz'>首页</a>";
    		$mod2Str .= "<a href='$prewPageUrl'><li class='sz'>上一页</li></a>&nbsp;&nbsp;</a>";
    	}else {
    		$mod2Str .= "<span class=\"disabled\"><li class='sz'>首页</li></span>";
    		$mod2Str .= "<span class=\"disabled\"><li class='sz'>上一页</li></a>&nbsp;&nbsp;</span>";
    		}
    		$a = $this->construct_num_Page();
    		for($i = 0;$i < count($a);$i++){
    		$s = $a[$i];
    		if($s == $this->current_page ){
    	$mod2Str .= "<span class=\"current\"><li class='sz'>".$s."</li></span>";
    		}else{
    		$url = $this->page_link."?p=".$s.'&'.$this->baseQueryString;
    		$mod2Str .= "<a href=\"$url\"><li class='sz'>".$s."</li></a>";
    		}
    		}
    			if($this->current_page < $this->page_count){
    			$lastPageUrl = $this->page_link."?p=".$this->page_count.'&'.$this->baseQueryString;
    			$nextPageUrl = $this->page_link."?p=".($this->current_page+1).'&'.$this->baseQueryString;
    				$mod2Str .= "<a href='$nextPageUrl'><li class='sz'>下一页</li></a>";
    		        $mod2Str .= "<a href='$lastPageUrl'><li class='sz'>尾页</li></a>";
    			}else {
    			$mod2Str .= "<span class=\"disabled\"><li class='sz'>下一页</li></span>";
    			$mod2Str .= "<span class=\"disabled\"><li class='sz'>尾页</li></span>";
    			}
    			 
    			$mod2Str.="";
    			return $mod2Str;
    			}
    
    
    
}
?>