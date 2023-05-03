<?php
session_start();
?>

<?php
if(isset($_SESSION['userid']) && $_SESSION['authID'] == 0):?>
<html>
<head>
    <title>Promena sifre</title>
</head>
<body>
    <div>
        <form action="includes/passChange.inc.php" method="post">
            <div>
                <label for="username">Korisnicko ime: </label>
                <input type="text" name="uid">
            </div><br>
            <div>
                <label for="password">Nova lozinka: </label>
                <input type="password" name="pwd">
            </div>
            <button type="submit" name="submit">Promena lozinke</button>
        </form>
        <button onclick="document.location='index.php'">Povratak</button>
    </div>
</body>
</html>
<?php elseif(isset($_SESSION['userid'])):
?>
    <div>
        <form action="includes/passChange.inc.php" method="post">
            <div>
                <input type="hidden" value="<?=$_SESSION['useruid']?>" name="uid">
                <label for="password">Nova lozinka: </label>
                <input type="password" name="pwd">
            </div>
            <button type="submit" name="submit">Promena lozinke</button>
        </form>
        <button onclick="document.location='index.php'">Povratak</button>
    </div>
<?php
endif;
?>
