<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password']; 

if($username == "admin" && $password == '123456'){
    $_SESSION['is_logged_in'] = true;
    $_SESSION['username'] = $username;
    header("Location: lab1.bai2.php");
}else{
        echo'Đăng nhập thất bại';
}    