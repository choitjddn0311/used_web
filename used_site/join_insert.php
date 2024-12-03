<?php

// sql db연동
        $conn = mysqli_connect('localhost' , 'root' , '' , 'used_platform');
        // table에 잇는 모든 값 불러오기
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $pw = mysqli_real_escape_string($conn, $_POST['password']);
        $rpw = mysqli_real_escape_string($conn , $_POST['repassword']);
        
        // 회원가입시 비번일치 확인하기
        if($pw !== $rpw) {
            echo "<script>
            alert('비밀번호가 일정하지 않습니다.');
            location.href='join.php';
            </script>";
            exit;
        };
        
        // insert문으로 table에 정보넣기
    $sql = "INSERT INTO user_info(name, id, pw) VALUES ('$name' , '$id' , '$pw')";

    // mysql query문 집어넣고 if문으로 확인하기
    // 회원가입 성공시 
    if(mysqli_query($conn , $sql)) {
        echo "<script>
                alert('회원가입이 완료되었습니다.');
                location.href='index.php';
            </script>";
    //회원가입 실패시
    } else {
        echo "<script>
                alert('회원가입을 실패하셨습니다.');
                location.href='join.php';
            </script>";
    }
    mysqli_close($conn);
?>
