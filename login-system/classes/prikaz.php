<?php
include "dbh.php";
include "klase.php";

$kajsija = new Kajsija();

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $kajsija->obrisi_vest($id); 
}

$vesti = $kajsija->prikazi_vesti(); 

?>

<h1 align="center">Vesti</h1>

<?php foreach($vesti as $obavestenje): ?>
    <h2>Ime vesti: <?php echo $obavestenje["vest"] ?> </h2>
    <hr style="max-width:500px" align="left">

    <h3>Takmičenje: <?php echo $obavestenje["takmicenje"] ?></h3>
    <h3><?php echo $obavestenje["opisvesti"] ?></h3>    
    <br>

    <button onclick="obrisi_vest(<?php echo $obavestenje['id'];?>)">Obriši vest</button>
    <button onclick="uredi_vest(<?php echo $obavestenje['id'];?>)">Izmeni vest</button>

<?php endforeach; ?>

<script>
    function obrisi_vest(id) {
        if (confirm("Da li ste sigurni da želite da obrišete ovu vest?")) {
            window.location.href = "obrisi_vest.php?id=" + id;
        }
    }

    function uredi_vest(id) {
        window.location.href = "uredi_vest.php?id=" + id;
    }
</script>

<div style="text-align: center;">
    <a href="../vesti.php">Povratak na početnu stranicu</a>
</div>
