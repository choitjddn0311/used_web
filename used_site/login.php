<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>내안에 중고 로그인</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <main class="login_container">
        <p>내 손안에 중고</p>
        <div class="login_box">
            <form action="login_insert.php" method="POST">
                <div class="info_inputBox">
                    <input type="text" name="id" placeholder="아이디를 입력해주세요.">
                    <input type="password" name="password" placeholder="비밀번호를 입력해주세요.">
                    <p>아이디가 없으신가요? <span><a href="join.php">회원가입하기</a></span></p>
                </div>
                <input type="submit" value="로그인" class="login_btn" >
            </form>
        </div>
    </main>
</body>
</html>