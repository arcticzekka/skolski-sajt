<?php
include "../classes/projekti.php";
$projekatClass = new Projekti();
$id = $_GET['id'];
$projekat = $projekatClass->selectProjekat($id);
?>
    <form method="POST">
        <label>Novi naslov:</label>
        <input type="text" name="editNaslov" value="<?=$projekat['naslov']?>">
        <label>Nov opis:</label>
        <input type="text" name="editOpis" value="<?=$projekat['opis']?>">
        <input type="submit" value="Izmeni" name="editSubmit">
    </form>
<?php
if(isset($_POST['editSubmit'])) {
    $projekatClass->editProjekat($id, $_POST['editNaslov'], $_POST['editOpis']);
    header('Location: ../prikazProjekata.php');
}


