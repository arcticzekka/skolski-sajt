<?php
if(isset($_POST["submit"]))
{
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    include "../classes/dbh.php";
    include "../classes/login.php";
    include "../classes/logincontr.php";
    $login = new LoginContr($uid, $pwd);
    $login->loginUser();

    header("location: ../index.php?error=none");
}
