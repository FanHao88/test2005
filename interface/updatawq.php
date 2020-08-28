<?php
require('./model/_connect.php');

// 因为前端Html页面传递过来的就是id，所以不需要跟数据库同名
// 这些是前端需要传递过来的数据
$id = $_REQUEST['id'];
// type是传递过来看你按的是➕还是➖
$type = $_REQUEST['type'];

$sql = "SELECT * FROM `cart` WHERE `product_id`='$id'";

$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);

// 通过上面的操作，解析到了对应id的数据，然后取出该数据的num值
$num = $row['product_num'];

if($type == 'add'){
    $num = $num+1;
    $sql = "UPDATE `cart` SET `product_num` = '$num' WHERE `product_id` = '$id'";
}else{
    $num = $num-1;
    // 此处要加一个判断条件，就是最小为0，不能为负数
    if($num>0){
        $sql = "UPDATE `cart` SET `product_num` = '$num' WHERE `product_id` = '$id'";
    };
}

$result = mysqli_query($conn,$sql);
// 如果执行成功就返回code1，失败就返回code0
if($result){
    echo json_encode(array("code"=>1));
}else{
    echo json_encode(array("code"=>0));
};

?>
