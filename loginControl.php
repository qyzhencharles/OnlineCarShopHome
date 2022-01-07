<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    header('Content-Type:application/json');
    $user1 = Array('username'=>'Admin0001','password'=>'A123456!');
    $user2 = Array('username'=>'Admin0002','password'=>'B123456!');
    $user3 = Array('username'=>'Admin0003','password'=>'C123456!');
    $arr = Array($user1, $user2, $user3);
    echo json_encode(array('code' => 200, 'data'=>$arr ,'msg' => 'success'));
?>
