<?php
include "classes/courseCon.php";
$courseCon = new CourseCon();
session_start();
if(isset($_SESSION['userid'])):
?>

<html>
<head>
    <title>Izmena smerova!</title>
</head>
<body>
<form method="post">
    <input name="course">
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
        <select name="courses" id="courses">
            <?php
            foreach ($courses as $key => $value):
                ?>

                <option value="<?php echo $value['smer']; ?>">
                    <?=$value['smer']; ?>
                </option>

            <?php endforeach; ?>
        </select>
        <button name="edit" onclick="showForm(event)" type="submit">Izmeni</button>
        <button name="delete">Obrisi</button><br>
    </form>

    <?php
    if(isset($_POST['courses']) && isset($_POST['delete'])) {
            $selected = $_POST['courses'];
            $courseCon->handleDelete($selected);
    }?>

    <form method="POST" id="editForm" style="display:none">
        Unesi novo ime i opis smera
        <input type="text" name="editInputC">
        <input type="text" name="editInputD">
        <input type="hidden" name="courseEdit" id="courseEdit">
        <button name="confirmEdit" type="submit">Potvrdi</button>
    </form>
    <button onclick="document.location='index.php'">Povratak</button>
    <?php
    if(isset($_POST['confirmEdit'])) {
        $selected = $_POST['courseEdit'];
        $newName = $_POST['editInputC'];
        $newDesc = $_POST['editInputD'];
        $courseCon->handleEdit($selected, $newName, $newDesc);
    }
    ?>
</div>
<script>
    function showForm(event) {
        event.preventDefault();
        let form = document.getElementById("editForm");
        form.style.display = "block";
        let edit = document.getElementById("courseEdit");
        let list = document.getElementById("courses");
        edit.value = list.value;
    }
</script>
</body>
</html>
<?php else:
    echo "Morate se ulogovati!";
endif;?>