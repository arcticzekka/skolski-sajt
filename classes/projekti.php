<?php
include_once "dbh.php";
class Projekti extends Dbh
{
    public function selectProjekat($id)
    {
        $sql = "SELECT * FROM projekti WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $res = $stmt->fetch();
        return $res;
    }

    public function returnProjekti()
    {
        $sql = "SELECT * FROM projekti";
        $stmt = $this->connect()->query($sql);
        $res = $stmt->fetchAll();
        return $res;
    }

    public function returnProjekatIme($ime)
    {
        $sql = "SELECT * FROM projekti WHERE naslov = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$ime]);
        $res = $stmt->fetch();
        return $res['id'];
    }
    public function inputProjekat($naslov, $opis)
    {
        $sql = "INSERT INTO projekti(naslov, opis) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$naslov, $opis]);
    }

    public function updateProjekatFile($fileid, $id){
        $sql2 = "UPDATE files SET vesti_id=? WHERE fileid=? AND filetype=0";
        $stmt2= $this->connect()->prepare($sql2);
        $stmt2->execute([$this->selectProjekat($id)['id'], $fileid]);
    }

    public function delProjekat($projekat)
    {
        $sql = "DELETE FROM projekti WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$projekat]);
    }

    public function editProjekat($vest, $novaVest, $novOpisVesti)
    {
        $sql = "UPDATE projekti SET naslov = ?, opis = ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$novaVest, $novOpisVesti, $vest]);
    }
    public function odabirSlike(){
        $sql = "SELECT * FROM files WHERE filetype=0";
        $stmt = $this->connect()->query($sql);
        return $stmt;
    }

    public function getProjekatFiles($id)
    {
        $sql = 'SELECT * FROM files WHERE vesti_id=? AND filetype=0';

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$id]);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}