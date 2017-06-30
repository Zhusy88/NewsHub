<?php
// 连接到mongodb
include"connectToDB.php";



$news_thread = $_POST['news_thread'] ?? "";



$filter = ['title' => $news_thread];
$options = [
	'projection' => ['_id' => 0]
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
		//'news_thread'=>$r->news_thread,
		'content'=>$r->content
      );
}
//header('Content-type:text/json');
echo json_encode($sayList, JSON_UNESCAPED_UNICODE);
//echo json_encode($sayList);
?>