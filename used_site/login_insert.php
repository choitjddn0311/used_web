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

    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        echo "
        <script>
            alert('로그인 성공!');
            location.href = 'index.php';
        </script>";
    } else {
        "<script>
            alert('아이디 또는 비밀번호가 일치하지 않습니다');
            location.href = 'login.php';
        </script>";
    }
?>