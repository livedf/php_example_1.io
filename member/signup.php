<?php
require_once '../preset.php';
include '../header.php';
?>
회원가입 페이지 <br>
<hr>


<form name="signup_form" action="./signip_check.php">
    <input type="text" name="user_id" placeholder="id">
    <br>
    <input type="password" name="user_pass" placeholder="pw">
    <br>
    <input type="password" name="user_pass2" placeholder="pw check">
    <br>
    <input type="text" name="user_email">
    <br>
    <input type="submit" value="signup">
    
    
</form>


<?php
include '../footer.php';
?>