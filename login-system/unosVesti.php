<?php
session_start();
if(isset($_SESSION['userid'])):?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Unos</title>
</head>
<body>
<form action="includes/vesti.inc.php" method="post">
    <fieldset>
        <legend>Unos</legend>
        <div>
            <label>Naslov vesti:</label>
            <input name="vest" type="text">
        </div><br>
        <div>
            <label>Opis vesti:</label>
            <textarea name="opisvesti"></textarea>
        </div><br>
        <br>
        <input type="checkbox" id="takmicenje" name="takmicenje" value="takmicenje" onclick="validate()">
        <label>Takmicenje</label><br>
        <br>
        <label>Lokacija fajla:</label>
        <input type="file" id="filelocation" name="filelocation"><br>
        <br>
        <input type="submit" value="Unesi podatke" name="submit"><br>
        <br>
        <a href="prikazVesti.php">Pogledaj sve vesti</a>
    </fieldset>
</form>
<button onclick="document.location='index.php'">Povratak</button>
</body>
</html>
<?php else:
    header('Location: index.php?error=pleaseLogIn');
endif;?>

