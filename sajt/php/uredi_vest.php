<?php 
include "bazapodatakacon.php";
include "klase.php"

$kajsija=new Kajsija();
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="SELECT * FROM sajt WHERE id=$id";
	$result=mysqli_query($conn,$sql);
	$vest=mysqli_fetch_assoc($result);
}

if(isset($_POST['submit'])){
	$id=$_POST['id'];
	$vest=$_POST['vest'];
	$imeucenika=$_POST['imeucenika'];
	$predmet=$_POST['predmet'];
	$takmicenje=$_POST['takmicenje'];
	$opisvesti=$_POST['opisvesti'];

$kajsija->izmeni_vest($id, $vest, $opisvesti, $imeucenika, $predmet, $takmicenje);
	
}

?>

<h1>Izmeni vest</h1>
<form method="POST">
	<input type="hidden" name="id" value="<?php echo $vest['id'] ?>">
	<label>Ime vesti:</label>
	<input type="text" name="vest" value="<?php echo $vest['vest'] ?>">
	<br>
	<label>Ime učenika:</label>
	<input type="text" name="imeucenika" value="<?php echo $vest['imeucenika'] ?>">
	<br>
	<label>Predmet:</label>
	<input type="radio" name="predmet" value="Matematika" <?php if(in_array("Matematika",explode(",",$vest['predmet']))) echo "checked"; ?>> Matematika
	<input type="radio" name="predmet" value="Fizika" <?php if(in_array("Fizika",explode(",",$vest['predmet']))) echo "checked"; ?>> Fizika
	<input type="radio" name="predmet" value="Programiranje" <?php if(in_array("Programiranje",explode(",",$vest['predmet']))) echo "checked"; ?>> Programiranje
	<br>
	<label>Takmičenje:</label>
	
<input type="radio" name="takmicenje" value="Opstinsko" <?php if ($vest['takmicenje'] === 'Opstinsko') echo 'checked'; ?>>Opstinsko
<input type="radio" name="takmicenje" value="Drzavno" <?php if ($vest['takmicenje'] === 'Drzavno') echo 'checked'; ?>>Drzavno
<input type="radio" name="takmicenje" value="Regionalno" <?php if ($vest['takmicenje'] === 'Regionalno') echo 'checked'; ?>>Regionalno
<br>
	<label>Opis vesti:</label>
	<textarea name="opisvesti"><?php echo $vest['opisvesti'] ?></textarea>
	<br>
	<input type="submit" name="submit" value="Izmeni vest">
</form>

<div style="text-align: center;">
	<a href="../test.php">Povratak na početnu stranicu</a>
</div>
