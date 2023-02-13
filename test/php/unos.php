<?php
if(isset($_POST['vest']) &&
	isset($_POST['opisvesti']) &&
	isset($_POST['imeucenika'])&&
	isset($_POST['predmet'])&&
	isset($_POST['takmicenje'])){

	include "bazapodatakacon.php";

	$vest=$_POST['vest'];
	$opisvesti=$_POST['opisvesti'];
	$imeucenika=$_POST['imeucenika'];
	$predmet = $_POST['predmet'];
	$takmicenje=$_POST['takmicenje'];
	
	if(empty($vest)){
		header("Location: ../test.php?poruka=Ime vesti je potrebna");
		exit;
	}else{

		$sql="INSERT INTO sajt(vest,opisvesti,imeucenika,predmet,takmicenje)
		VALUES('$vest','$opisvesti','$imeucenika','$predmet','$takmicenje')";
		$result=mysqli_query($conn,$sql);

		if($result){
			$poruka="Uspešno napravljeno";
			header("Location: ../test.php?poruka=$poruka");
			exit;
		}else{
			$poruka="Javila se greška";
			header("Location: ../test.php?poruka=$poruka");
			exit;
		}
	}
}else{
	header("Location: ../test.php");
	exit;
}
