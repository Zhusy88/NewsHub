<?php 
// 连接到mongodb
include"connectToDB.php";


// $user = array ('username'=>"admin",'passwd'=>"Admin",'email'=>'admin@example.com');
// $user_json = json_encode($user);

$username = $_POST['username'] ?? "";
$passwd = $_POST['passwd'] ?? "";
$email = $_POST['email'] ?? "";

$insRec = new MongoDB\Driver\BulkWrite;
$insRec->insert(['username' =>$username, 'passwd'=>$passwd, 'email'=>$email]);
$writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);
         
try {
	$result = $con->executeBulkWrite('NewsDB.user', $insRec, $writeConcern);

} catch(MongoDB\Driver\Exception\BulkWriteException $e) 
{
	$result = $e->getWriteResult();
}

echo json_encode($result);

// $insertOneResult = $collection->insertOne([
//     'username' => 'admin',
//     'email' => 'admin@example.com',
//     'passwd' => 'Admin',
// ]);

?>