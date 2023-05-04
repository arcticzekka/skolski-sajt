<?php

class Dbh{
    protected function connect() {
        try{
            $username = "root";
            $password = "aleksa2212";
            $dbh = new PDO('mysql:host=localhost;dbname=php_dev', $username, $password);
            return $dbh;
        }catch (PDOException $e){
            print 'Error: ' . $e->getMessage() . "<br/>";
            die();
        }
    }
    public function getUsersDbh(){
        $sql = "SELECT * FROM skola_login";
        $stmt = $this->connect()->query($sql);
        return $stmt;
    }
    public function getVestiDbh(){
        $sql = "SELECT * FROM vesti";
        $stmt = $this->connect()->query($sql);
        return $stmt;
    }
}