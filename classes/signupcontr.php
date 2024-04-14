<?php
class SignupContr extends Signup {

    private $uid;
    private $pwd;
    private $email;
    private $auth;

    public function __construct($uid, $pwd, $email, $auth){
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->email = $email;
        $this->auth = $auth;
    }

    public function signupUser() {
        if($this->emptyInput() == false) {
            header("location: ../index.php?error=emptyInput");
            exit();
        }
        if($this->invalidUid() == false) {
            header("location: ../index.php?error=invalidUid");
            exit();
        }
        if($this->invalidEmail() == false) {
            header("location: ../index.php?error=invalidEmail");
            exit();
        }
        if($this->uidMatch() == false) {
            header("location: ../index.php?error=uidMatch");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email, $this->auth);
    }

    private function emptyInput() {
        if(empty($this->uid) || empty($this->pwd) || empty($this->email)) {
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    private function invalidUid() {
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    private function invalidEmail() {
        if(!filter_var($this->email , FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    private function uidMatch() {
        if(!$this->checkUser($this->uid, $this->email)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

}