<?php
    //세션시작
    session_start();
    //db연결
    $conn =  mysqli_connect('localhost' , 'root' , '' , 'used_platform');
    //값 가져오기
    $name = mysqli_real_escape_string($conn , $_POST['name']);
    $id = mysqli_real_escape_string($conn , $_POST['id']);
    $pw = mysqli_real_escape_string($conn , $_POST['password']);
    $sql = "SELECT * FROM user_info WHERE id = '$id'";

    //input창 비어있는지 확인하기
    if(empty($id) || empty($pw)){
        echo "<script>
                alert('아이디 또는 비밀번호를 입력해주세요.');
                location.href = 'login.php';
            </script>";
        exit;
    }
    // mysql 쿼리실행
    $result = mysqli_query($conn, $sql);
    // query를 통해 얻은 값을 1개씩 리턴
    $user = mysqli_fetch_assoc($result);

    // $session 으로 저장
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