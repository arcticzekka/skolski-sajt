<?php
if(isset($_POST["submit"]))
{

    $vest = $_POST['vest'];
    $opisVesti = $_POST['opisvesti'];
    if(isset($_POST['takmicenje'])){
        $takmicenje = 1;
    }else{
        $takmicenje = 0;
    }

    include "../classes/vestiContr.php";

    $novaVest = new VestiContr();
    $novaVest->handleSubmit($vest, $opisVesti, $takmicenje);
    header("location: ../unosVesti.php?error=none");
}
