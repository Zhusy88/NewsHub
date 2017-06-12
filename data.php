<?php
// 连接到mongodb
   $con  = new MongoDB\Driver\Manager('mongodb://127.0.0.1:27017');



$last = $_POST['last'] ?? "";
$amount = $_POST['amount'] ?? '';


$user = array('demo1','demo2','demo3','demo3','demo4');
// $query=mysql_query("select * from say order by id desc limit $last,$amount");
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
		'link'=>$r->link
      );
}
//header('Content-type:text/json');
echo json_encode($sayList, JSON_UNESCAPED_UNICODE);
//echo json_encode($sayList);
?>