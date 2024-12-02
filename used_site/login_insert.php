<?php
    session_start();
    $conn =  mysqli_connect('localhost' , 'root' , '' , 'used_platform');

    $name = mysqli_real_escape_string($conn , $_POST['name']);
    $id = mysqli_real_escape_string($conn , $_POST['id']);
    $pw = mysqli_real_escape_string($conn , $_POST['password']);
    $sql = "SELECT * FROM user_info WHERE id = '$id'";

    if(empty($id) || empty($pw)){
        echo "<script>
                alert('아이디 또는 비밀번호를 입력해주세요.');
                location.href = 'login.php';
            </script>";
        exit;
    }
?>