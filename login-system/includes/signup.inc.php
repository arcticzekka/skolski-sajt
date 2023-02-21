<?php
if(isset($_POST["submit"]))
{
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    include "../classes/dbh.php";
    include "../classes/signup.php";
    include "../classes/signupcontr.php";

    $signup = new SignupContr($uid, $pwd, $email);
    $signup->signupUser();

    header("location: ../index.php?error=none");
}
