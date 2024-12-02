<?php
        $conn = mysqli_connect('localhost' , 'root' , '' , 'used_platform');
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $pw = mysqli_real_escape_string($conn, $_POST['password']);
        $rpw = mysqli_real_escape_string($conn , $_POST['repassword']);
        $sql = "INSERT INTO user_info(name,id,pw) VALUES ('$name' , '$id' , '$pw')";

    if($pw !== $rpw) {
        echo "<script>
                alert('비밀번호가 일정하지 않습니다.');
                location.href='join.php';
            </script>";
        exit;
    };

    $sql = "INSERT INTO user_info(name, id, pw) VALUES ('$name' , '$id' , '$pw')";

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
