<?php
if(isset($_POST["submit"])) {

        $img = $_POST['NEW'];
        // Retrieving each selected option
        $projekat = $_POST['projekat'];
        $opisProjekta = $_POST['opisprojekta'];

        include "../classes/projekti.php";

        $projektiClass = new Projekti();
        $projektiClass->inputProjekat($projekat, $opisProjekta);

        $projekatId= $projektiClass->returnProjekatIme($projekat);

        foreach ($img as $key => $slika) {
            $projektiClass->updateProjekatFile($slika, $projekatId);
        }
        header("location: ../unosProjekata.php?error=none");
    }