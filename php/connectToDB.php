<?php
// 连接到mongodb
   	$con  = new MongoDB\Driver\Manager('mongodb://127.0.0.1:27017');
     if(!$con){
         die("can't connect to MongoDB");//如果链接失败输出错误
     }
     // else{
     // 	var_dump($con);
     // }
?>