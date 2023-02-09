<?php

session_start();

if (isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if($name == 'john' && $pass == '123'){
        $_SESSION['username'] = $name;
        header('Location: extras/dashboard.php');
    }else{
        echo 'incorrect';
    }
} ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username">
    </div>
    <br>
    <div>
        <label for="password">Password: </label>
        <input type="pass" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>