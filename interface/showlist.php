<?php
require('./model/_connect.php');


$sql = "SELECT * FROM shop.cart";

$result = mysqli_query($conn,$sql);

/* 
1、先判定有没有数据，如果没有数据就返回code=0
2、如果有数据的话，解析数据，返回成一个json数组形式的格式，并让code变成1
*/

if(mysqli_num_rows($result)>0){	
	$arr = mysqli_fetch_all($result,MYSQLI_ASSOC);
	echo json_encode(array("code"=>1,"data"=>$arr));
}else{	
	echo json_encode(array("code"=>0));
}

?>