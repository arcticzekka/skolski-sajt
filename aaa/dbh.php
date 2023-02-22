<?php
class Dbh
{
    protected function connect()
    {
        $dsn = 'mysql:host=localhost;dbname=test_db';
        $pdo = new PDO($dsn, "maky", "123");
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }

}
?>