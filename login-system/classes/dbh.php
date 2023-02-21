<?php

class Dbh{
    protected function connect() {
        try{
            $username = "aleksa";
            $password = "mudjajecigan123";
            $dbh = new PDO('mysql:host=localhost;dbname=php_dev', $username, $password);
            return $dbh;
        }catch (PDOException $e){
            print 'Error: ' . $e->getMessage() . "<br/>";
            die();
        }
    }
}