<?php
require('./model/_connect.php');

// 因为前端Html页面传递过来的就是id，所以不需要跟数据库同名
// 这些是前端需要传递过来的数据
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$img = $_REQUEST['img'];
$price = $_REQUEST['price'];
$num = $_REQUEST['num'];

$sql = "SELECT * FROM `cart` WHERE `product_id` = '$id'";
$res = mysqli_query($conn,$sql);

//mysqli_num_rows方法是统计查询结果有几行
$rows = mysqli_num_rows($res);

/* 
如果行数小与0就表示数据库里没有这个数据，那么我们就用INSERT INTO插入一条新数据;
如果行数大于0就表示数据库里有这个数据，那么我们需要更新一下此数据的数量，也就是UPDATE 它的num;
*/

if($rows>0){
    // 将通过id查询到的结果，转成php数组
    $row = mysqli_fetch_assoc($res);
    
    // 获取此条数据里面，对应的num的值
    $num = $row['product_num']+$num;
    $sql = "UPDATE `cart` SET `product_num` = '$num' WHERE `product_id` = '$id'"; 
}else{
    $sql = "INSERT INTO `cart` (`product_id`,`product_img`,`product_name`,`product_num`,`product_price`) VALUES ('$id','$img','$name','$num','$price')";  
}

// 将得到的sql语句执行一次
$result = mysqli_query($conn,$sql);

// 如果执行成功就返回code1，失败就返回code0
if($result){
    echo json_encode(array("code"=>1));
}else{
    echo json_encode(array("code"=>0));
};
?>