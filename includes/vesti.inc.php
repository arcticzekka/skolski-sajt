<?php
if(isset($_POST["submit"])) {

        $img = $_POST['NEW'];
        // Retrieving each selected option
        $vest = $_POST['vest'];
        $opisVesti = $_POST['opisvesti'];
        if (isset($_POST['takmicenje'])) {
            $takmicenje = 1;
        } else {
            $takmicenje = 0;
        }

        include "../classes/vestiContr.php";

        $novaVest = new VestiContr();
        $novaVest->handleSubmit($vest, $opisVesti, $takmicenje);

        $vestiId= $novaVest->handleReturnVestiIme($vest);

        foreach ($img as $key => $slika) {
            $novaVest->handleUpdate($slika, $vestiId);
        }
        header("location: ../unosVesti.php?error=none");
    }