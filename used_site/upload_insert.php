<?php
    session_start();
    $conn = mysqli_connect('localhost' , 'root' , '' , 'used_platform');
    if($_SERVER['REQUEST_METHOD'] == 'post'){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $price = $_POST['price'];
    }

    $sql = "INSERT INTO title,content,price VALUE ('$title' , '$content' , '$price')";

    $result = mysqli_query($conn , $sql);
?>