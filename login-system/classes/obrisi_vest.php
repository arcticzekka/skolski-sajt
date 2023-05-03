<?php
include "dbh.php";
include "klase.php";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$kajsija= new Kajsija();
	$kajsija->obrisi_vest($id);
}
header("Location: prikaz.php")
?>
