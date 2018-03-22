<?php
@session_start();

//$p = array();
//홈 디렉토리 값을 특정 변수에 저장

$path['root'] = $_SERVER['DOCUMENT_ROOT'].'/';

//config.php 파일 내용 불러옴
require_once ($path['root'].'config.php');

//mysqli 객체를 생성하여 mysql에 접속한다

$mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);

//접속 에러 발생시

if (mysqli_connect_error()) {
    exit('connet Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
}

//아규먼트(argument) 변수를 분할해준다.
extract($_POST);
extract($_GET);
?>