<?php
class Login extends Dbh {

    protected function getUser($uid, $pwd){
        $stmt = $this->connect()->prepare('SELECT pwd FROM skola_login WHERE uid = ? OR email = ?;');

        if(!$stmt->execute(array($uid, $pwd))) {
            $stmt = null;
            header("location: ../index.php?error=stmtFailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            header('location: ../index.php?error=usernotfound');
            exit();
        }
        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["pwd"]);

        if($checkPwd == false){
            $stmt = null;
            header('location: ../index.php?error=wrongpass');
            exit();
        }elseif ($checkPwd == true){
            $stmt = $this->connect()->prepare('SELECT * FROM skola_login WHERE uid = ? OR email = ? AND pwd = ?;');
            $stmt2 = $this->connect()->prepare("SELECT * FROM skola_login JOIN auth ON skola_login.authID=auth.authID WHERE uid = ?;");

            if(!$stmt->execute(array($uid, $uid, $pwd))) {
                $stmt = null;
                header("location: ../index.php?error=stmtFailed");
                exit();
            }
            if($stmt->rowCount() == 0){
                $stmt = null;
                header('location: ../index.php?error=usernotfound');
                exit();
            }
            if($stmt2->execute(array($uid))){
                $auth = $stmt2->fetchAll(PDO::FETCH_ASSOC);
            }
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION['authID'] = $auth[0]['authID'];
            $_SESSION['auth'] = $auth[0]['AuthName'];
            $_SESSION['userid'] = $user[0]["id"];
            $_SESSION['useruid'] = $user[0]["uid"];
            $stmt = null;
        }
        $stmt = null;
    }
}