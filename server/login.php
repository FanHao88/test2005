<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = mysqli_connect('localhost','root','root','music');

    $res = mysqli_query($conn,"SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password'");
    
    $data = mysqli_fetch_all($res,MYSQLI_ASSOC);
    
    if($data){
        $arr = array('code'=>1,'data'=>array('username'=>$username));
    }else{
        $arr = array('code'=>0,'msg'=>'用户名或密码错误');
    }
    
    echo json_encode($arr);
    
?>