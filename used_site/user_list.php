<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>내안에 중고 | 내 손 안에서 모든것을</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php
        session_start();
        $conn = mysqli_connect('localhost' , 'root' , '' , 'used_platform');

        $basic_user = isset($_SESSION['user_name']);
        $sql_products = "SELECT * FROM products";
        $result_products = mysqli_query($conn , $sql_products); 
    ?>
    <header>
        <div class="header_inner">
            <nav class="gnb">
                <?php if($basic_user == 'admin'): ?>
                    <ul>
                        <li><a href="index.php">홈으로</a></li>
                        <li><a href="user_list.php" class="inPage">사용자 리스트</a></li>
                        <li><a href="product_list.php">매물 리스트</a></li>
                    </ul>
                <?php else: ?>
                    <ul>
                        <li><a href="index.php">홈으로</a></li>
                        <li><a href="upload.php">매물 등록</a></li>
                        <li><a href="#">시세 조회</a></li>
                        <li><a href="wishlist.php">찜한 매물</a></li>
                    </ul>
                <?php endif; ?>
            </nav>
            <div class="account">
                <?php if ($basic_user): ?>
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
    <main class="user_list_main">
        <table class="user_container">

        </table>
    </main>