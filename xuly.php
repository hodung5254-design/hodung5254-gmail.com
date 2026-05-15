<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $_SESSION['products'][] = [
        "id" => count($_SESSION['products']) + 1,
        "name" => $name,
        "price" => $price,
        "image" => $image
    ];
}
header("Location: lab-bai2.php");
exit();
?>