<?php
session_start();
include "../classes/passChangecontr.php";
$id = $_GET['id'];
$pwd = $_GET['pwd'];
$ime = new PassChangeContr($id, $pwd);
$imena = $ime->handleSelect($id);
$ime->handleDelete($id);
if($_SESSION['userid'] == $imena['id']){
    session_unset();
    session_destroy();
    header('Location: ../index.php');
}else{
    header('Location: ../promenaSifre.php');
}