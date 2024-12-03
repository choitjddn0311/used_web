<?php
    //세션시작
    session_start();
    //세션에 등록되어있는 모든 변수값 삭제
    session_unset();
    //현재세션종료
    session_destroy();
    //후 index.php로 location이동
    header("Location: index.php");
    exit;
?>