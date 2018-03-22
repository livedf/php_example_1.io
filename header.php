<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';
$m_path = "/member/";
$c_path = "/bbs/";
@session_start();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>사이트</title>
</head>
<body>
    <header class="header">
        <nav id="tnb">
            <ul class="menu">
                <?php
                    if(!isset($_SESSION['user_id']) || !isset($_SESSION['member_idx'])) {
                        echo 
                            "<li><a href=".$m_path.'login.php'.">로그인</a></li>";
                        echo
                            "<li><a href=".$m_path.'signup.php'.">회원가입</a></li>";
                    } else {
                        $user_id = $_SESSION['user_id'];
                        $member_idx = $SESSION['member_idx'];
                        echo 
                            "<li><strong>".$user_id."</strong>님이 로그인 하셨습니다.</li>";
                        echo
                            "<li><a href=".$m_path.'logout.php'.">로그아웃</a></li>";
                        echo
                            "<li><a href=".$c_path.'contact.php'.">글싸기</a></li>";
                    }
                ?>
            </ul>
        </nav>
    </header>
    <div class="content">
