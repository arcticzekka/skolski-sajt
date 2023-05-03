<?php
    session_start();
?>

<html>
<head>
    <title>Dobrodosli!</title>
</head>
<body>
<?php
if(isset($_SESSION['userid'])):?>
<p>Dobar dan, <?php echo $_SESSION['useruid'];?></p>
<p>Privilegija: <?php echo $_SESSION["auth"]?></p>

<div style="text-align: center;">
    <form action="includes/signup.inc.php" method="post" style="display: inline-block;text-align: center;">
        <div>
            <label for="username">Korisnicko ime: </label>
            <input type="text" name="uid">
        </div>
        <br>
        <div>
            <label for="password">Lozinka: </label>
            <input type="password" name="pwd">
        </div>
        <br>
        <div>
            <label for="email">Email: </label>
            <input type="text" name="email">
        </div>
        <br>
        <label for="auth">Odaberi nivo privilegija:</label>
        <select name="auth">
            <option value="0">Admin</option>
            <option value="1">Direktor</option>
            <option value="2">Profesor</option>
        </select>
        <br>
        <button type="submit" name="submit">Prijava Korisnika</button>
    </form><br>
    <button onclick="document.location='includes/logout.inc.php'" style="margin-top: 10px">Log Out</button>
</div>
<div style="  position: fixed;
  bottom: 20px;
  right:0%;
  margin: 0 auto;">
    <p style="text-align: right;text-decoration: none;"><a href="courseView.php">Izmena Smerova</a></p>
    <p style="text-align: right;text-decoration: none;"><a href="promenaSifre.php">Promena Lozinke</a></p>
    <p style="text-align: right;text-decoration: none;"><a href="izmenaVesti.php">Izmena Vesti</a></p>
<?php
else:
    ?>
</div>
<div style="text-align: center">
<form action="includes/login.inc.php" method="post" style="display: inline-block;text-align: center;width:250px;margin: 10% auto auto;">
    <div>
        <label for="username">Korisnicko ime: </label>
        <input type="text" name="uid">
    </div>
    <br>
    <div>
        <label for="password">Lozinka: </label>
        <input type="password" name="pwd">
    </div>
    <button type="submit" name="submit" style="margin-top: 10px">Login</button>
</form>
</div>
<?php endif;?>
</body>
</html>
