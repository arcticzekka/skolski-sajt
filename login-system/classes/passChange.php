<?php

class PassChange extends Dbh {
    protected function setPass($uid, $pwd){
        $stmt = $this->connect()->prepare('UPDATE skola_login SET pwd = ? WHERE uid = ?');
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($hashedPwd, $uid))) {
            $stmt = null;
            header("location: ../index.php?error=stmtFailed");
            exit();
        }
        $stmt = null;
    }
}