<?php
include 'dbh.php';
class Smerovi extends Dbh
{
    public function vratiSmerove()
    {
        $sql = "SELECT * FROM smerovi";
        $stmt = $this->connect()->query($sql);
        while($a = $stmt->fetch())
        {
            echo $a['smer'];
        }
    }
    public function vratiOpisSmera($smer)
    {
        $sql = "SELECT * FROM smerovi WHERE smer = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$smer]);
        $smerovi = $stmt->fetchAll();

        foreach($smerovi as $s)
        {
            echo $s['opis'];
        }
    }

    public function unesiSmer($smer, $opis)
    {
        $sql = "INSERT INTO smerovi(smer, opis) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$smer, $opis]);
    }
}
?>