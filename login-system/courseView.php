<?php
include "classes/courseCon.php";
$courseCon = new CourseCon();
?>

<html>
<body>
<form method="post">
    <label>Naziv Smera:</label>
    <input name="course">
    <label>Opis Smera:</label>
    <input name="desc">
    <button name="submitCourse">Unesi</button><br>
</form>

<?php
if(isset($_POST['submitCourse'])) {
    $name = $_POST['course'];
    $desc = $_POST['desc'];
    $courseCon->handleSubmit($name, $desc);
    }
    ?>

<div>

    <form method="post">
        <label for="courses">Smerovi:</label>
        <table>
            <?php
            foreach ($courses as $key => $value):
                ?>
            <tr>
                <td>
                    <?= $value['smer'] ?>
                </td>
                <td>
                    <?= $value['opis'] ?>
                </td>
                <td>
                    <a href="includes/edit.php?id=<?= $value['id'] ?>">Izmeni</a>
                </td>
                <td>
                    <a href="includes/delete.php?id=<?= $value['id'] ?>">Obrisi</a>
                </td>

            </tr>
            <?php endforeach; ?>
        </table>
    </form>

<!--    --><?php
//    if(isset($_POST['courses']) && isset($_POST['delete'])) {
//            $selected = $_POST['courses'];
//            $courseCon->handleDelete($selected);
//    }?>

<!--    <form method="post" id="editForm" style="display:none">-->
<!--        Unesi novo ime i opis smera-->
<!--        <input type="text" name="editInputC">-->
<!--        <input type="text" name="editInputD">-->
<!--        <input type="hidden" name="courseEdit" id="courseEdit">-->
<!--        <button name="confirmEdit" type="submit">Potvrdi</button>-->
<!--    </form>-->

<!--    --><?php
//    if(isset($_POST['confirmEdit'])) {
//        $selected = $_POST['courseEdit'];
//        $newName = $_POST['editInputC'];
//        $newDesc = $_POST['editInputD'];
//        $courseCon->handleEdit($selected, $newName, $newDesc);
//    }
//    ?>
</div>
<!--<script>-->
<!--    function showForm(event) {-->
<!--        event.preventDefault();-->
<!--        let form = document.getElementById("editForm");-->
<!--        form.style.display = "block";-->
<!--        let edit = document.getElementById("courseEdit");-->
<!--        let list = document.getElementById("courses");-->
<!--        edit.value = list.value;-->
<!--    }-->
<!--</script>-->
</body>
</html>