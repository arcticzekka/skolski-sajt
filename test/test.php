<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Unos</title>
</head>
<body>
<form action="php/unos.php" method="post">
<fieldset>
	<legend>Unos</legend>
	<mark>
		<?php if(isset($_GET['poruka']))
{
	echo $_GET['poruka'];
} 
?>
</mark>
<div>
	<label>Vest:</label>
	<input name="vest" type="text">
</div><br>
<div>
	<label>Opis</label>
	<textarea name="opisvesti"></textarea>
</div><br>
<div>
	<label>Ime učenika</label>
	<input type="text" name="imeucenika">
</div><br />

	<label>Predmet:</label><br> 
	<input type="checkbox" name="predmet" value="Matematika">
	<label>Matematika</label><br>
	<input type="checkbox" name="predmet" value="Fizika">
	<label>Fizika</label><br>
	<input type="checkbox" name="predmet" value="Programiranje">
	<label>Programiranje</label><br>
</div><br>
<div>
	<label>Takmičenje:</label><br> 
	<input type="radio" name="takmicenje" value="Opštinsko">
	<label>Opštinsko</label><br>
	<input type="radio" name="takmicenje" value="Državno">
	<label>Državno</label><br>
	<input type="radio" name="takmicenje" value="Regionalno">
	<label>Regionalno</label><br>
</div><br>


<input type="submit" value="Unesi podatke">
<br>
<a href="php/prikaz.php">Pogledaj sve vesti</a>
</fieldset>
</form>
</body>
</html>