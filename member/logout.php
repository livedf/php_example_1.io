<?php
require_once '../preset.php';
?>
<?php
$_SESSION['is_logged'] = 'NO';
$_SESSION['user_id'] = '';
$_SESSION['member_idx'] = '';
//로그아웃 1안


unset($_SESSION['user_id']);
unset($_SESSION['member_idx']);
//로그아웃 2안


@session_destroy();

header('location: logout_ok.php');
exti();

?>