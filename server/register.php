<?php
    /* $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    
    $conn = mysqli_connect('localhost','root','root','music');
    $res = mysqli_query($conn,"SELECT * FROM `user` WHERE `username`='$username'");
    echo json_encode($res); 
    $data = mysqli_fetch_all($res,MYSQLI_ASSOC);
    
   
    
    if($data){
        $arr = array('code'=>0,'msg'=>'用户名已被注册');
    }else{
        $res=mysqli_quert($conn,"INSERT INTO `user` (`id`,`username`,`password`) VALUES ('$id','$username','$password')");
        
        if($res){
            $arr = array('code'=>1,'data'=>array('username'=>$username));
        }else{
            $arr = array('code'=>0,'msg'=>'后端出错了');
        }
    }
    // echo json_encode($arr);  */


$username = $_POST['username'];
$password = $_POST['password'];

$conn = mysqli_connect('localhost','root','root','music');

$sql = "SELECT * FROM `user` WHERE `username`='$username'";

$result = mysqli_query($conn,$sql);

$data = mysqli_fetch_assoc($result);

$id = "SELECT * FROM music.user ORDER BY id DESC LIMIT 0 , 1";
$resId = mysqli_query($conn,$id);
$dataId = mysqli_fetch_assoc($resId);
$dataId = json_encode($dataId);
$dataId = json_decode($dataId,1);
$dataId = number_format($dataId['id']);
$dataId = $dataId + 1;

if($data){
    $arr = array('code'=>0,'msg'=>'用户名已被注册');
}else{
    $sql = "INSERT INTO `user` (`id`,`username`,`password`) VALUES ($dataId,'$username','$password')";
    // echo json_encode($sql);
    $result = mysqli_query($conn,$sql);
    
    if($result){
        $arr = array('code'=>1,'data'=>array('username'=>$username));
    }else{
        $arr = array('code'=>0,'msg'=>'后端出错了');
    }

}

echo json_encode($arr);

// mysql_close($conn);
?>