<?php
class Signup extends Dbh {

    protected function setUser($uid, $pwd, $email, $auth){
        $stmt = $this->connect()->prepare('INSERT INTO skola_login (uid, pwd, email, AuthID) VALUES (?, ?, ?, ?);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        if(!$stmt->execute(array($uid, $hashedPwd, $email, $auth))) {
            $stmt = null;
            header("location: ../index.php?error=stmtFailed");
            exit();
        }
        $stmt = null;
    }

    protected function checkUser($uid, $email) {
        $stmt = $this->connect()->prepare('SELECT uid FROM skola_login WHERE uid = ? OR email = ?;');

        if(!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtFailed");
            exit();
        }
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }
        return $resultCheck;
    }

}