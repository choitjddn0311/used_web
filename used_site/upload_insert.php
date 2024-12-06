<?php
    session_start();
    $conn = mysqli_connect('localhost' , 'root' , '' , 'used_platform');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $price = $_POST['price'];
    }
    if(empty($title) || empty($content) || empty($price)){
        echo "
        <script>
            alert('비어있는 내용을 입력해주세요.');
            location.href = 'upload.php';
        </script>";
        exit;
    }

    $_SESSION['title'] = $title;
    $_SESSION['content'] = $content;
    $_SESSION['price'] = $price;

    $sql = "INSERT INTO products(title,content,price) VALUE ('$title' , '$content' , '$price')";
    $result = mysqli_query($conn , $sql);

    if($result) {
        echo "
        <script>
            alert('업로드를 마쳤습니다');
            location.href = 'index.php';
        </script>";
    } else {
        echo "
        <script>
            alert('업로드 중 오류가 발생했습니다.');
            location.href = 'upload.php';
        </script>";
    }
?>