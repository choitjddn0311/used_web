<?php
    $conn = mysqli_connect('localhost' , 'root' , '' , 'used_platform');

    $name = $_POST['name'];
    $id = $_POST['id'];
    $pw = $_POST['password'];
    $rpw = $_POST['repassword'];

    if($pw !== $rpw) {
        echo "<script>
                alert('비밀번호가 일정하지 않습니다.');
                location.href='join.php';
            </script>";
        exit;
    };

    $hash_pw = password_hash($pw, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user_info(name, id, pw) VALUES ('$name' , '$id' , '$hash_pw')";

    if(mysqli_query($conn , $sql)) {
        echo "<script>
                alert('회원가입이 완료되었습니다.');
                location.href='index.php';
            </script>";
    } else {
        echo "<script>
                alert('회원가입을 실패하셨습니다.');
                location.href='join.php';
            </script>";
    }
    mysqli_close($conn);
?>
