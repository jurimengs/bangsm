<?php
require_once 'inc.php';
$time=time()-(60*60*24)*30*3;
$tid=$_POST['tid'];                 //当前分类
$pagesize=$_POST['pagesize'];       //要显示的纪录数
$page=$_POST['page'];               //当前页数
$table=$_POST['table'];             //当前表
$search=$_POST['search'];
//$page_total = ceil($query_count / $pagesize);                 //总页数
$page_start = $page * $pagesize;                              //从第几个数据开始

  if(empty($search)) {

      $count = $db->fetch($db->query("select * from cn_$table where type_id=$tid and time>$time order by sort asc limit $page_start,$pagesize"));
      if ($count != null) {

          $sql = $db->query("select * from cn_$table where type_id=$tid and time>$time order by sort asc limit $page_start,$pagesize");
          while ($row = $db->fetch($sql)) {
              $sayList['list'][] = array(
                  "id" => $row['id'],
                  "title" => $row['title'],
                  "date" => date('Y/m/d', $row['time'])
              );
          }
          echo json_encode($sayList);
      } else {

          echo json_encode(1);
      }
  }else{
      $count = $db->fetch($db->query("select * from cn_$table where (title like '%$search%' or description like '%$search%' or keywords like '%$search%' or contents like '%$search%') and time>$time order by sort asc limit $page_start,$pagesize"));
      if ($count != null) {

          $sql = $db->query("select * from cn_$table where (title like '%$search%' or description like '%$search%' or keywords like '%$search%' or contents like '%$search%') and time>$time order by sort asc limit $page_start,$pagesize");
          while ($row = $db->fetch($sql)) {
              $sayList['list'][] = array(
                  "id" => $row['id'],
                  "title" => $row['title'],
                  "date" => date('Y/m/d', $row['time'])
              );
          }
          echo json_encode($sayList);
      } else {

          echo json_encode(1);
      }
  }

    //$array=array("aa"=>"我是A","bb"=>"我是B");




?>