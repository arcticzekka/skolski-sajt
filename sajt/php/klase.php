<?php
include "bazapodatakacon.php";

class Vest {
    public function dodaj_vest($vest, $opis, $imeucenika, $predmet, $takmicenje) {
        $sql = "INSERT INTO sajt (vest, opisvesti, imeucenika, predmet, takmicenje) VALUES ('$vest', '$opis', '$imeucenika', '$predmet', '$takmicenje')";
        if (mysqli_query($conn, $sql)) {
            echo "Nova vest je uspešno dodata.";
        } else {
            echo "Došlo je do greške prilikom dodavanja vesti: " . mysqli_error($conn);
        }
    }

    public function izmeni_vest($id, $vest, $opis, $imeucenika, $predmet, $takmicenje) {
        $sql = "UPDATE sajt SET vest='$vest', opisvesti='$opis', imeucenika='$imeucenika', predmet='$predmet', takmicenje='$takmicenje' WHERE id=$id";
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
