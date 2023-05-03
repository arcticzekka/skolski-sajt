<?php

class Dbh{
    protected function connect() {
        try{
            $username = "sekcija";
            $password = "sekcija";
            $dbh = new PDO('mysql:host=localhost;dbname=php_dev', $username, $password);
            return $dbh;
        }catch (PDOException $e){
            print 'Error: ' . $e->getMessage() . "<br/>";
            die();
        }
    }
    public function getUsers(){
        $sql = "SELECT * FROM skola_login";
        $stmt = $this->connect()->query($sql);
        return $stmt;
    }
}