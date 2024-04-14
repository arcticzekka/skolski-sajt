<?php
session_start();
include "../classes/passChangecontr.php";
$id = $_GET['id'];
$pwd = $_GET['pwd'];
$ime = new PassChangeContr($id, $pwd);
$ime->handleDelete($id);
if($_SESSION['userid'] == $id){
    session_unset();
    session_destroy();
    header('Location: ../index.php');
}else{
    header('Location: ../promenaSifre.php');
}