<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Unos</title>
</head>
<body>
<form action="classes/unos.php" method="post">
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
            <label>Naslov vesti:</label>
            <input name="vest" type="text">
        </div><br>
        <div>
            <label>Opis vesti:</label>
            <textarea name="opisvesti"></textarea>
        </div><br>
        <br>
        <input type="checkbox" name="takmicenje" value="takmicenje">
        <label>Takmicenje</label><br>
        <br>


        <input type="submit" value="Unesi podatke" name="submit"><br>
        <br>
        <a href="classes/prikaz.php">Pogledaj sve vesti</a>
    </fieldset>
</form>
</body>
</html>