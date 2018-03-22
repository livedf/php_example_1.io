<?php
include $_SERVER['DOCUMENT_ROOT'].'/header.php';
?>
로그인 페이지<br>
<hr>
<form name="login_form" method="post" action="login_check.php">
    <input type="text" name="user_id" placeholder="ID">
    <br>
    <input type="password" name="user_pass">
    <input type="submit" value="로그인">
</form>   

<?php
include $_SERVER['DOCUMENT_ROOT'].'/footer.php';
?>