<?php
include_once "dbh.php";
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

    public function selectSekcija($id)
    {
        $sql = "SELECT * FROM sekcija WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $res = $stmt->fetch();
        return $res;
    }

    public function returnTakmicenja()
    {
        $sql = "SELECT * FROM vesti WHERE takmicenje = 1";
        $stmt = $this->connect()->query($sql);
        $res = $stmt->fetchAll();
        return $res;
    }

    public function returnSekcija()
    {
        $sql = "SELECT * FROM sekcija";
        $stmt = $this->connect()->query($sql);
        return $stmt;
    }

    public function returnVesti()
    {
        $sql = "SELECT * FROM vesti WHERE takmicenje = 0";
        $stmt = $this->connect()->query($sql);
        $res = $stmt->fetchAll();
        return $res;
    }

    public function returnVest()
    {
        $sql = "SELECT * FROM vesti";
        $stmt = $this->connect()->query($sql);
        return $stmt;
    }

    public function returnVestIme($ime)
    {
        $sql = "SELECT * FROM vesti WHERE naslov = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$ime]);
        $res = $stmt->fetch();
        return $res['id'];
    }
    protected function inputVest($naslov, $opis, $takmicenje)
    {
        $sql = "INSERT INTO vesti(naslov, opis, takmicenje) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$naslov, $opis, $takmicenje]);
    }

    public function updateFile($fileid, $id){
        $sql2 = "UPDATE files SET vesti_id=? WHERE fileid=?";
        $stmt2= $this->connect()->prepare($sql2);
        $stmt2->execute([$this->selectVest($id)['id'], $fileid]);
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
    public function odabirSlike(){
        $sql = "SELECT * FROM files WHERE filetype=6";
        $stmt = $this->connect()->query($sql);
        return $stmt;
    }

    public function getVestiFiles($id)
    {
        $sql = 'SELECT * FROM files WHERE vesti_id=? AND filetype=6';

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$id]);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getSekcijaFiles($id)
    {
        $sql = 'SELECT * FROM files WHERE vesti_id=? AND filetype=7';

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$id]);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}