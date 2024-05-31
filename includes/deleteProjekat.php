<?php
include "../classes/projekti.php";
$projekatClass = new Projekti();
$id = $_GET['id'];
$projekatClass->delProjekat($id);
header('Location: ../prikazProjekata.php');