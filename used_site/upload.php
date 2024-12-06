<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>내안에 중고 | 매물 올리기</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php
        session_start();
        $conn = mysqli_connect('localhost' , 'root' , '' , 'used_platform');

        $is_logged_in = isset($_SESSION['user_name']);
    ?>
    <header>
        <div class="header_inner">
            <nav class="gnb">
                <ul>
                    <li><a href="index.php">홈으로</a></li>
                    <li><a href="upload.php" class="inPage">매물 등록</a></li>
                    <li><a href="#">시세 조회</a></li>
                    <li><a href="wishlist.php">찜한 매물</a></li>
                </ul>
            </nav>
            <div class="account">
                <?php if ($is_logged_in): ?>
                    <ul>
                        <li class="user_id"><span><?=htmlspecialchars($_SESSION['user_name'])?></span> 님</li>
                    </ul>
                    <a href="logout.php">
                        <button>로그아웃</button>
                    </a>
                <?php else: ?>
                    <a href="login.php">
                    <button>로그인</button>
                </a>
                <a href="join.php">
                    <button>회원가입</button>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </header>
    <main>
        <form action="upload_insert.php" class="upload_form" method="post">
            <div class="upload_container">
                <input type="text" placeholder="상품명을 입력해주세요." name="title">
                <textarea name="content" placeholder="상품의 내용을 입력해주세요"></textarea>
                <div class="price_container">
                    <p>*숫자로만 입력해주세요*</p>
                    <input type="number" name="price" placeholder="가격을 입력해주세요">
                </div>
                <input type="submit" value="매물 올리기">
            </div>
        </form>
    </main>
</body>
</html>