<?php
include "dbh.php";
class Vesti extends Dbh
{
    public function selectVest($id)
    {
        $sql = "SELECT * FROM vesti WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $res = $stmt->fetch();
        return $res;
    }
    public function returnVest()
    {
        $sql = "SELECT * FROM vesti";
        $stmt = $this->connect()->query($sql);
        return $stmt;
    }
    protected function inputVest($naslov, $opis, $takmicenje)
    {
        $sql = "INSERT INTO vesti(naslov, opis, takmicenje) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$naslov, $opis, $takmicenje]);
    }

    public function delVest($vest)
    {
        $sql = "DELETE FROM vesti WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$vest]);
    }

    public function editVest($vest, $novaVest, $novOpisVesti)
    {
        $sql = "UPDATE vesti SET naslov = ?, opis = ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$novaVest, $novOpisVesti, $vest]);
    }
}