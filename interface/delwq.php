<?php
require('./model/_connect.php');

// 因为前端Html页面传递过来的就是id，所以不需要跟数据库同名
// 这些是前端需要传递过来的数据
$id = $_REQUEST['id'];

$sql = "DELETE FROM `cart` WHERE `product_id` = '$id'";
$res = mysqli_query($conn,$sql);

// 如果执行成功就返回code1，失败就返回code0
if($res){
    echo json_encode(array("code"=>1));
}else{
    echo json_encode(array("code"=>0));
};

?>