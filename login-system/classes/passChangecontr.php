<?php
include "passChange.php";
$ime = new PassChange();
$imena = $ime->returnUsers();

class PassChangeContr extends PassChange {

    private $uid;
    private $pwd;

    public function __construct($uid, $pwd){
        $this->uid = $uid;
        $this->pwd = $pwd;
    }
    public function changePass() {
        if($this->emptyInput() == false) {
            header("location: ../index.php?error=emptyInput");
            exit();
        }
        $this->setPass($this->uid, $this->pwd);
    }

    private function emptyInput() {
        if(empty($this->uid) || empty($this->pwd)) {
            $result = false;
        }else{
            $result = true;
        }
        return $result;

    }

    public function handleSelect($id) {
        return PassChange::selectAccount($id);
    }
    public function handleEdit($uid, $newUid, $newPass) {
        PassChange::editAccount($uid, $newUid, $newPass);
    }
    public function handleDelete($uid) {
        PassChange::delAccount($uid);
    }
    public function handleReturn() {
        PassChange::returnUsers();
    }

}