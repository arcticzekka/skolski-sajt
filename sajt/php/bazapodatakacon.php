<?php 

$sname="localhost";
$uname="root";
$password="";

$db_name="bazapodataka";

$conn=mysqli_connect($sname,$uname,$password,$db_name);
if(!$conn){
	echo "Konekcija neuspešna";
}
?>