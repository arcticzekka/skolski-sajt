<?php
include "bazapodatakacon.php";
include " klase.php"
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$direktor= new Direktor();
	 $direktor->obrisi_vest($id);
}
header("Location: prikaz.php")
?>
