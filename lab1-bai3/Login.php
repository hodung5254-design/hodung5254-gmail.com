<?php
Session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'admin' && $password === '123456') {
    $_SESSION['is_logged_in'] = true;
    header("Location: home.php");
} else {
    echo "Đăng nhập thất bại!";
}
?>