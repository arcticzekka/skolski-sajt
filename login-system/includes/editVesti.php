<?php
include "../classes/vestiContr.php";
$vesti = new VestiContr();
$id = $_GET['id'];
$vestSel = $vesti->handleSelect($id);
?>
    <form method="POST">
        <label>Novi naslov:</label>
        <input type="text" name="editNaslov" value="<?=$vestSel['naslov']?>">
        <label>Nov opis:</label>
        <input type="text" name="editOpis" value="<?=$vestSel['opis']?>">
        <input type="submit" value="Izmeni" name="editSubmit">
    </form>
<?php
if(isset($_POST['editSubmit'])) {
    $vesti->handleEdit($id, $_POST['editNaslov'], $_POST['editOpis']);
    header('Location: ../prikazVesti.php');
}


