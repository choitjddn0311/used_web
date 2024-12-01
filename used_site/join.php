<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>내안에 중고 회원가입</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost' , 'root' , '' , 'used_platform');
    ?>
<main class="join_container">
        <p>내 손안에 중고</p>
        <div class="join_box">
            <form action="insert.php" method="POST">
                 <div class="join_info">
                    <input type="text" name="name" placeholder="이름을 입력해주세요.">
                    <input type="text" name="id" placeholder="아이디를 입력해주세요.">
                    <input type="password" name="password" placeholder="비밀번호를 입력해주세요.">
                    <input type="password" name="repassword" placeholder="비밀번호를 다시 입력해주세요.">
                    
                 </div>
                 <input type="submit" value="회원가입" class="join_btn" >
            </form>
        </div>
    </main>
</body>
</html>