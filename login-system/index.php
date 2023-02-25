<?php
    session_start();
?>

<!DOCTYPE html>
<body>
<?php
if(isset($_SESSION['userid'])):
    ?>
    <a href='includes/logout.inc.php'> LOGOUT </a>
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
        </select>
        <br>
        <button type="submit" name="submit">SIGNUP</button>
    </form>
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
