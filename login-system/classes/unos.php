<?php
include "klase.php";


if(isset($_POST['submit'])){
	$vest=$_POST['vest'];
	$opisvesti=$_POST['opisvesti'];
	$takmicenje=$_POST['takmicenje'];

	if(empty($vest)){
		header("Location: ../vesti.php?poruka=Ime vesti je potrebna");
		exit;
	}else{
		$kajsija =new Kajsija();
        $kajsija->dodaj_vest($vest, $opisvesti, $takmicenje);
	}
}else{
	header("Location: ../vesti.php");
	exit;
}
