<?php
session_start();
if(isset($_SESSION['userid'])):
include "classes/courseCon.php";
$courseCon = new CourseCon();
?>

<html>
<body>
<form method="post">
    <fieldset>
    <label>Naziv Smera:</label>
    <input name="course">
    <br>
    <br>
    <label>Opis Smera:</label>
    <textarea id="editor" name="desc"></textarea>
    <script type="text/javascript" src='https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: "#editor"
        });
    </script>
    <br>
    <br>
    <button name="submitCourse">Unesi</button><br>
    </fieldset>
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
        <fieldset>
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
                    <a href="includes/editSmer.php?id=<?= $value['id'] ?>">Izmeni</a>
                </td>
                <td>
                    <a href="includes/deleteSmer.php?id=<?= $value['id'] ?>">Obrisi</a>
                </td>

            </tr>
            <?php endforeach; ?>
        </table>
        </fieldset>
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
<?php else:
    header('Location: index.php?error=pleaseLogIn');
endif;?>