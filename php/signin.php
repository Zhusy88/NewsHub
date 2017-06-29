<?php 
session_start();

include"connectToDB.php"; // 连接到mongodb
$username = $_POST['username'] ?? "";
$passwd = $_POST['passwd'] ?? "";

if($username && $passwd){ //用户名和密码都不为空
	$filter = ['username' => $username, 'passwd' => $passwd];
	$options = [];
	$query = new MongoDB\Driver\Query($filter,$options);
	$row = $con->executeQuery('NewsDB.user',$query);
	$rows = $row->toArray();
	if(@$rows[0]){
		$_SESSION['username'] = $rows[0]->username;
		$result = array(
		'state'=>"1", //1-登陆成功
		'username'=>$rows[0]->username,
		'email'=>$rows[0]->email,
		'session_username'=>$_SESSION['username']
			);
		   
	}
	else {
		$result = array('state'=>"0"); //0-登陆失败

	}

}
else{ //表单不完整
	$result = array('state'=>"2"); //2-表单不完整
}

echo json_encode($result);


?>