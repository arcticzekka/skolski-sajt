<?php
session_start();
?>

<html>
<head>
    <title>Dobrodosli!</title>
    <link rel ="stylesheet" type="text/css" href="style.css">
</head>
<body style="height: 1000px;">
<?php
if(isset($_SESSION['userid'])):?>
    <p class="greet" id="greet1" >Dobar dan, <?php echo $_SESSION['useruid'];?></p>
    <p class="greet" >Privilegija: <?php echo $_SESSION["auth"]?></p>

    <div>
        <form class = "form"  action="includes/signup.inc.php" method="post">

            <label class="formText" style="margin-bottom:2%;" for="username">Korisnicko ime: </label>
            <input class="formTextInput" style="height:35px;" type="text" name="uid">

            <label class="formText" style="margin-bottom:2%;" for="password">Lozinka: </label>
            <input class="formTextInput" style="height:35px;" type="password" name="pwd">

            <label class="formText" style="margin-bottom:2%;" for="email">Email: </label>
            <input class="formTextInput" style="height:35px;" type="text" name="email">

            <label class="formText" id="nivoPriv" for="auth">Odaberi nivo privilegija:</label>

            <select name="auth" class="select">
                <option value="0">Admin</option>
                <option value="1">Direktor</option>
                <option value="2">Profesor</option>
            </select>
            <button class="formBtn" type="submit" name="submit">Prijava korisnika</button>

            <button class="formBtn"  onclick="document.location='includes/logout.inc.php'">Log Out</button>

        </form>
    </div>
    <div class="links" >
    <p ><a class="linksLink" href="unosProjekata.php">Izmena Projekata</a></p>
    <p ><a class="linksLink"href="courseView.php">Izmena Smerova</a></p>
    <p ><a class="linksLink" href="promenaSifre.php">Promena Lozinke</a></p>
    <p ><a class="linksLink"href="unosVesti.php">Izmena Vesti</a></p>
    <p ><a class="linksLink"href="fileUpload.php">Unos File-ova</a></p>
<?php
else:
    ?>
    </div>
    <div >
        <form  class = "form" action="includes/login.inc.php" method="post" >

            <label class = "formText" for="username">Korisničko ime</label>
            <input class="formTextInput" type="text" name="uid">

            <label class = "formText" for="password">Lozinka </label>
            <input class="formTextInput" type="password" name="pwd">

            <button class="formBtn"  type="submit" name="submit" >Login</button>

        </form>
    </div>
<?php endif;?>
</body>
</html>
