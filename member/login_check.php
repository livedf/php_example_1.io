<?php
include_once ('../config.php');
$mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);
if (mysqli_connect_error()) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '.
    mysqli_connect_error());
}

extract($_POST);

$q = "SELECT * FROM member WHERE id='$user_id'";  // $q = "SELECT * FROM member WHERE id="$user_id;
$result = $musqli->query( $q);

if($result->num_rows==1) {
    //해당 ID의 회원이 존재할 경우
    //암호가 맞는지를 확인
    //$encryped_pass = sha1($user_pass);  암호화
    $encryped_pass = $user_pass;
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if( $row['pw'] == $encryped_pass ) {
        @session_start();
        $_SESSION['is_logged'] = 'YES';
        $_SESSION['user_id'] = $user_id;  // 입력한 내용 저장
        $_SESSION['member_idx'] = $row['member_idx'];
        header("Location: login_pass.php");
        exit();
    } else {
        @session_start();
        $_SESSION['is_logged'] = 'NO';
        $_SESSION['user_id'] = '';  // 입력한 내용 지움 (빈칸이므로)
        $_SESSION['member_idx'] = '';
        header("Location: login_pass.php");
        exit();
    }
} else {
    //없거나, 비정상
    @session_start();
        $_SESSION['is_logged'] = 'NO';
        $_SESSION['user_id'] = '';
        $_SESSION['member_idx'] = '';
        header("Location: ../index.php");  // 처음으로 돌아감
        exit();
}

?>