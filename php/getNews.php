<?php
// 连接到mongodb
include"connectToDB.php";

$filter = [];
$options = [
	'projection' => ['_id' => 0],
	'sort' => array("date" => -1)
];
$query = new MongoDB\Driver\Query($filter,$options);
$rows = $con->executeQuery('NewsDB.thepaper', $query);
foreach($rows as $r){
   	$sayList[] = array(
		'title'=>$r->title,
		'src'=>$r->src,
		'date'=>$r->date,
		'cate'=>$r->cate,
		'link'=>$r->link,
		'news_thread'=>$r->news_thread,
      );
}

echo json_encode($sayList, JSON_UNESCAPED_UNICODE);
?>