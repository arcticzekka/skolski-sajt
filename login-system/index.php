<?php
    session_start();
?>

<!DOCTYPE html>
<body>
<?php
if(isset($_SESSION['userid'])):
    echo "Dobar dan, " . $_SESSION['useruid'];
    echo "<br>";
    echo "Privilegija: " . $_SESSION["auth"];
    ?>
    <form action="includes/signup.inc.php" method="post">
        <div>
            <label for="username">Username: </label>
            <input type="text" name="uid">
        </div>
        <br>
        <div>
            <label for="password">Password: </label>
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
        <button type="submit" name="submit">Signup</button>
    </form>
        <button onclick="document.location='includes/logout.inc.php'">Log Out</button>
    <a href="courseView.php">Izmena Smerova</a>
<?php
else:
    ?>
<form action="includes/login.inc.php" method="post">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="uid">
    </div>
    <br>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="pwd">
    </div>
    <button type="submit" name="submit">LOGIN</button>
</form>
<?php endif;?>
</body>
