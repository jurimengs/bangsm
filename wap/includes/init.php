<?php

/*
 * 获取递归分类信息 如：分类一 > 分类二 > 分类三...
 */
function get_producttype_fullname($id,$fullname){
	$result=$GLOBALS['db']->query("SELECT id,name,parent_id FROM sx1_product_type WHERE id=$id");
	$type = $GLOBALS['db']->fetch_assoc($result);
	if(!empty($fullname)){
		$fullname = "<a href=\"category.php?id=".$type['id']."\">".$type['name']."</a> &gt; ".$fullname;
	}else{
		$fullname = $type['name'];
	}
	
	if($type['parent_id']<>"0"){
		$fullname = get_producttype_fullname($type['parent_id'],$fullname);
	}
	
	return $fullname;
}

/**
 * 递归所有分类
 * Enter description here ...
 * @param unknown_type $db
 * @param unknown_type $typeList
 * @param unknown_type $parent_id
 * @param unknown_type $level
 */
function get_product_type(&$typeList,$parent_id,$level){
	$result=$GLOBALS['db']->query("SELECT id,name FROM sx1_product_type WHERE parent_id=".$parent_id." ORDER BY sort,id ASC");	
	while($row=$GLOBALS['db']->fetch($result)){
		$typeList[] = array('id'=>$row['id'],'name'=>$row['name'],'level'=>str_repeat('&nbsp;&nbsp;&nbsp;',$level));
		get_product_type($typeList,$row['id'], $level+1);
	}
}
/*
 * 根据分类ID查询所属所有产品，递归
 */
function get_product_type_id($typeid){
	$list=array();
	$typeid_str = $typeid;
	getall_producttype_parent_id($typeid_str,$typeid);
	if(!empty($typeid_str)){
		$result=$GLOBALS['db']->query("SELECT * FROM sx1_product WHERE type_id in (".$typeid_str.")");
		while($row=$GLOBALS['db']->fetch_array($result)){
			$list[] = $row;
		}
	}
	return $list;
}
/*
 * 根据ID查询产品详细
 */
function get_product_id($id){
	$result = $GLOBALS['db']->query("SELECT * FROM sx1_product WHERE id=$id");
	$product = $GLOBALS['db']->fetch_assoc($result);
	if($product){
		return $product;
	}else{
		info_notice('没有找到相应的信息');
	}
}
/*
 * 根据ID查询下级分类 (递归)
 */
function getall_producttype_parent_id($table,&$typeid_str,$parentid){
	//$typeList = array();
	$result = $GLOBALS['db']->query("SELECT * FROM $table WHERE parent_id=$parentid");
	while ($row=$GLOBALS['db']->fetch($result)) {
		$typeid_str .= ','.$row['id'];
		getall_producttype_parent_id($table,$typeid_str,$row['id']);
	}
}

/*
 * 根据ID查询下级分类 (无递归)
 */
function get_producttype_parent_id($parentid){
	$typeList = array();
	$result = $GLOBALS['db']->query("SELECT * FROM sx1_product_type WHERE parent_id=$parentid");
	while ($row=$GLOBALS['db']->fetch_array($result)) {
		$typeList[]=$row;
	}
	return $typeList;
}
/*
 * 产品分类详细
 */
function get_producttype_id($id){
	$result = $GLOBALS['db']->query("SELECT * FROM sx1_product_type WHERE id=$id");
	$producttype = $GLOBALS['db']->fetch_assoc($result);
	if($producttype){
		return $producttype;
	}else{
		info_notice('没有找到相应的信息');
	}
}

/**
 * 案例 -- 递归所有分类
 * Enter description here ...
 * @param unknown_type $db
 * @param unknown_type $typeList
 * @param unknown_type $parent_id
 * @param unknown_type $level
 */
function get_case_type(&$typeList,$parent_id,$level){
	$result=$GLOBALS['db']->query("SELECT id,name FROM sx1_case_type WHERE parent_id=".$parent_id." ORDER BY sort,id ASC");	
	while($row=$GLOBALS['db']->fetch($result)){		
		$typeList[] = array('id'=>$row['id'],'name'=>$row['name'],'level'=>str_repeat('&nbsp;&nbsp;&nbsp;',$level));
		get_case_type($typeList,$row['id'], $level+1);
	}
}
/*
 * 案例 -- 根据ID查询下级分类 (递归)
 */
function getall_casetype_parent_id(&$typeid_str,$parentid){
	//$typeList = array();
	$result = $GLOBALS['db']->query("SELECT * FROM sx1_case_type WHERE parent_id=$parentid");
	while ($row=$GLOBALS['db']->fetch($result)) {
		$typeid_str .= ','.$row['id'];
		getall_casetype_parent_id($typeid_str,$row['id']);
	}
}



/*案例 -- 上一篇*/
function case_prev($type_id,$sort){
	$result = $GLOBALS['db']->query("SELECT * FROM sx1_growup WHERE type_id=$type_id ORDER BY sort DESC,id DESC LIMIT ".(1 * ($sort)).", 1");
	$case = $GLOBALS['db']->fetch($result);
	if($case){
		return "<a href=\"?para=".$type_id.",".$case['id'].",".($sort+1)."\">".$case['title']."</a>";
	}else{
		return "没有了";
	}
}

/*案例 -- 下一篇*/
function case_next($type_id,$sort){
	if($sort<=1){
		return "没有了";
	}
	$result = $GLOBALS['db']->query("SELECT * FROM sx1_growup WHERE type_id=$type_id ORDER BY sort DESC,id DESC LIMIT ".(1 * ($sort-2)).", 1");
	$case = $GLOBALS['db']->fetch($result);
	if($case){
		return "<a href=\"?para=".$type_id.",".$case['id'].",".($sort-1)."\">".$case['title']."</a>";
	}else{
		return "没有了";
	}
}
/*文章上一篇*/
function other_prev($table,$type_id,$time){
	$result = $GLOBALS['db']->query("SELECT id,title,type_id FROM $table WHERE time>$time AND type_id=$type_id ORDER BY time ASC LIMIT 1");
	$other = $GLOBALS['db']->fetch($result);
	if($other){
		return "<a href=\"?id=".$type_id."&nid=".$other['id']."&jid=22\">".$other['title']."</a>";
	}else{
		return "没有了";
	}
}

/*文章下一篇*/
function other_next($table,$type_id,$time){
	$result = $GLOBALS['db']->query("SELECT id,title,type_id FROM $table WHERE time<$time AND type_id=$type_id ORDER BY time DESC LIMIT 1");
	$other = $GLOBALS['db']->fetch($result);
	if($other){
		return "<a href=\"?id=".$type_id."&nid=".$other['id']."&jid=22\">".$other['title']."</a>";
	}else{
		return "没有了";
	}
}
/*文章上一篇*/
function other_prev1($table,$type_id,$time){
	$result = $GLOBALS['db']->query("SELECT id,title,type_id FROM $table WHERE time>$time AND type_id=$type_id ORDER BY time ASC LIMIT 1");
	$other = $GLOBALS['db']->fetch($result);
	if($other){
		return "<a href=\"?id=".$type_id."&nid=".$other['id']."&jid=5\">".$other['title']."</a>";
	}else{
		return "没有了";
	}
}

/*文章下一篇*/
function other_next1($table,$type_id,$time){
	$result = $GLOBALS['db']->query("SELECT id,title,type_id FROM $table WHERE time<$time AND type_id=$type_id ORDER BY time DESC LIMIT 1");
	$other = $GLOBALS['db']->fetch($result);
	if($other){
		return "<a href=\"?id=".$type_id."&nid=".$other['id']."&jid=5\">".$other['title']."</a>";
	}else{
		return "没有了";
	}
}
/*文章上一篇*/
function pro_prev($table,$type_id,$time){
	$result = $GLOBALS['db']->query("SELECT id,title,type_id FROM $table WHERE time>$time AND type_id=$type_id ORDER BY time ASC LIMIT 1");
	$other = $GLOBALS['db']->fetch($result);
	if($other){
		return "<a href=\"?id=".$type_id."&nid=".$other['id']."\">".$other['title']."</a>";
	}else{
		return "没有了";
	}
}

/*文章下一篇*/
function pro_next($table,$type_id,$time){
	$result = $GLOBALS['db']->query("SELECT id,title,type_id FROM $table WHERE time<$time AND type_id=$type_id ORDER BY time DESC LIMIT 1");
	$other = $GLOBALS['db']->fetch($result);
	if($other){
		return "<a href=\"?id=".$type_id."&nid=".$other['id']."\">".$other['title']."</a>";
	}else{
		return "没有了";
	}
}
/*from成果*/
function alla($table,$where,$order){
    $result = $GLOBALS['db']->query("select * from $table where 1=1 $where $order");
    $guodu=array();
    while($row20=$GLOBALS['db']->fetch($result)){
        $guodu[]=$row20;
    }
    //$other = $GLOBALS['db']->fetch($result);
        return $guodu;
}

function alla2($table,$where,$order,$lie){
    $result = $GLOBALS['db']->query("select $lie from $table where 1=1 $where $order");
    $guodu=array();
    while($row20=$GLOBALS['db']->fetch($result)){
        $guodu[]=$row20;
    }
    //$other = $GLOBALS['db']->fetch($result);
    return $guodu;
}


?>