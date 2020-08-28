<?php
// 解析中文
header('content-type:text/html;charset=utf8');

// 定义数据库的IP地址，数据库用户名跟密码,表名
$servername = 'localhost:3306';
$username = 'root';
$password = 'root';
$dbname = 'shop';

// 连接数据库
$conn = mysqli_connect($servername,$username,$password,$dbname);

// 连接失败返回信息
if(mysqli_connect_error()){
    die('连接失败');
}

?>