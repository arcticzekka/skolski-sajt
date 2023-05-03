<?php
include "../classes/courseCon.php";
$course = new CourseCon();
$id = $_GET['id'];
$courseSel = $course->handleSelect($id);
?>
<form method="POST">
    <input type="text" name="editName" value="<?=$courseSel['smer']?>">
    <input type="text" name="editDesc" value="<?=$courseSel['opis']?>">
    <input type="submit" value="a" name="editSubmit">
</form>
<?php
if(isset($_POST['editSubmit'])) {
    $course->handleEdit($id, $_POST['editName'], $_POST['editDesc']);
    header('Location: ../courseView.php');
}


