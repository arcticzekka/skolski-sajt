<?php
    session_start();
?>

<!DOCTYPE html>
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
    <button type="submit" name="submit">SIGNUP</button>
</form>

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

<?php
if(isset($_SESSION['userid'])){
    echo "Ulogovan";
    echo "<a href='includes/logout.inc.php'> LOGOUT </a>";
}else{
    echo "Nisi Ulogovan";
}