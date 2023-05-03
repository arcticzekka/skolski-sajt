<?php
include "../classes/passChangecontr.php";
$id = $_GET['id'];
$pwd = $_GET['pwd'];
$pass = new PassChangeContr($id, $pwd);
$accSel = $pass->handleSelect($id);
?>
    <form method="POST">
        <input type="text" name="editUID" value="<?=$accSel['uid']?>">
        <input type="text" name="editPWD" value="">
        <input type="submit" value="a" name="editSubmit">
    </form>
<?php
if(isset($_POST['editSubmit'])) {
    $pass->handleEdit($id, $_POST['editUID'], $_POST['editPWD']);
    header('Location: ../promenaSifre.php');
}


