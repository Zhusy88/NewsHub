<?php
// 连接到mongodb
include"connectToDB.php";



$last = $_POST['last'] ?? "";
$amount = $_POST['amount'] ?? '';
var_dump($_POST);


$filter = [];
$options = [
	'projection' => ['_id' => 0],
	'sort' => array("date" => -1),
	'skip' => $last,
	'limit' => $amount
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
//header('Content-type:text/json');
echo json_encode($sayList, JSON_UNESCAPED_UNICODE);
//echo json_encode($sayList);
?>