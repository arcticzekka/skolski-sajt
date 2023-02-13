<?php
include "bazapodatakacon.php";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM sajt WHERE id=$id";
	if (mysqli_query($conn, $sql)) {
		echo "Vest je uspešno obrisana.";
	} else {
		echo "Došlo je do greške prilikom brisanja vesti: " . mysqli_error($conn);
	}
}
header("Location: prikaz.php")
?>
