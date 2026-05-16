<?php
session_start();
if (!isset($_SESSION['is_logged_in']) || !$_SESSION['is_logged_in']) {
header('location:login.php');
}else{
   echo'chao mung'. $_SESSION['username'] . '!';
}