<?php

/* 
1.与数据库建立连接 			   connect.php
2.新建一个数据库 			   create_database.php
3.与新建的数据库建立连接 		_connect.php
4.在新数据库里面新建一张数据表 	 create_table.php
*/

// 引入connect.php文件，并执行里面的代码
require('./connect.php');

// 创建数据库
$sql = "CREATE DATABASE shop";
$res = mysqli_query($conn,$sql);
if($res){
	echo "数据库创建成功";
}else{
	echo "数据库创建失败";
}

?>
