<?php
include_once ('../config.php');
$mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);
if (mysqli_connect_error()) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '.
    mysqli_connect_error());
}

extract($_POST);


$q = "INSERT INTO member (id, pw, email) values ( '$user_id','$user_pass','$user_email')";

$mysqli->query($q);

$mysqli->close();

header("location: signup_pss.php");
exit();

?>
