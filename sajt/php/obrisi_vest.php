<?php
include "bazapodatakacon.php";
include "klase.php"
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$vest= new Vest();
	 $vest->obrisi_vest($id);
}
header("Location: prikaz.php")
?>
