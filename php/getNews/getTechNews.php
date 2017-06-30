<?php
// 连接到mongodb
include"../connectToDB.php";

$filter = ['category' => 'tech'];
$options = [
	'projection' => ['_id' => 0],
	'sort' => array("date" => -1)
];
$query = new MongoDB\Driver\Query($filter,$options);
$rows = $con->executeQuery('NewsDB.NewsAPI', $query);
foreach($rows as $r){

   	$sayList[] = array(
		'title'=>$r->title,
		'src'=>$r->src,
		'date'=>$r->time,
		'cate'=>$r->category,
		'link'=>$r->weburl,
		'pic'=>$r->pic,
		'news_thread'=>(string)new MongoDB\BSON\ObjectId(),
      );
   	//var_dump($r);
}

echo json_encode($sayList, JSON_UNESCAPED_UNICODE);
?>