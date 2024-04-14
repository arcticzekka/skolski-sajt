<?php
if(isset($_POST["submit"]))
{
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    include "../classes/dbh.php";
    include "../classes/passChange.php";
    include "../classes/passChangecontr.php";

    $passChg = new PassChangeContr($uid, $pwd);
    $passChg->changePass();


    header("location: ../index.php?promenjenaSifra");
}
