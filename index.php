<?php

session_start();

if (isset($_POST['submit'])) {

    // filter_input() - Sanitize inputs
    $name = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pass = $_POST['pass'];

    if($name == 'john' && $pass='password'){
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
        <input type="pass" name="pas">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>