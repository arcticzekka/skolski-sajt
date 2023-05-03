<?php
include "dbh.php";

class Kajsija {
    public function dodaj_vest($vest, $opis, $takmicenje) {
        $sql = "INSERT INTO sajt (vest, opisvesti, takmicenje) VALUES ('$vest', '$opis', '$takmicenje')";
        if (mysqli_query($conn, $sql)) {
            echo "Nova vest je uspešno dodata.";
        } else {
            echo "Došlo je do greške prilikom dodavanja vesti: " . mysqli_error($conn);
        }
    }

    public function izmeni_vest($id, $vest, $opis, $takmicenje) {
        $sql = "UPDATE sajt SET vest='$vest', opisvesti='$opis', takmicenje='$takmicenje' WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "Vest je uspešno izmenjena.";
        } else {
            echo "Došlo je do greške prilikom izmene vesti: " . mysqli_error($conn);
        }
    }

    public function obrisi_vest($id) {
        $sql = "DELETE FROM sajt WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "Vest je uspešno obrisana.";
        } else {
            echo "Došlo je do greške prilikom brisanja vesti: " . mysqli_error($conn);
        }
    }

    public function prikazi_vesti() {
        $sql = "SELECT * FROM sajt";
        $result = mysqli_query($conn, $sql);
        $vesti = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $vesti;
    }
}
?>
