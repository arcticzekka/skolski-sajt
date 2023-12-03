<?php
include "dbh.php";

class PassChange extends Dbh {
    protected function setPass($uid, $pwd){
        $stmt = $this->connect()->prepare('UPDATE skola_login SET pwd = ? WHERE uid = ?');
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($hashedPwd, $uid))) {
            $stmt = null;
            header("location: ../promenaSifre.php?error=stmtFailed");
            exit();
        }
        $stmt = null;
    }
    public function returnUsers()
    {
        $sql = "SELECT * FROM skola_login";
        $stmt = $this->connect()->query($sql);
        return $stmt;
    }
    public function selectAccount($id)
    {
        $sql = "SELECT * FROM skola_login WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    public function editAccount($id, $newUid, $newPass)
    {
        $hashedPwd = password_hash($newPass, PASSWORD_DEFAULT);
        $sql = "UPDATE skola_login SET uid = ?, pwd = ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newUid, $hashedPwd, $id]);
    }
    public function delAccount($acc)
    {
        $sql = "DELETE FROM skola_login WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$acc]);
    }
}