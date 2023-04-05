<?php
include "bazapodatakacon.php";
include "klase.php";

if(isset($_POST['vest']) &&
	isset($_POST['opisvesti']) &&
	isset($_POST['imeucenika'])&&
	isset($_POST['predmet'])&&
	isset($_POST['takmicenje'])){

	$vest=$_POST['vest'];
	$opisvesti=$_POST['opisvesti'];
	$imeucenika=$_POST['imeucenika'];
	$predmet = $_POST['predmet'];
	$takmicenje=$_POST['takmicenje'];
	
	if(empty($vest)){
		header("Location: ../test.php?poruka=Ime vesti je potrebna");
		exit;
	}else{

		$vest =new Vest();
		  $vest->dodaj_vest($vest, $opisvesti, $imeucenika, $predmet, $takmicenje);
	}
}else{
	header("Location: ../test.php");
	exit;
}
