<?php
session_start();
if(isset($_SESSION['userid'])):
include "classes/courseCon.php";
$courseCon = new CourseCon();
?>

<html>
<body>
<form method="post" action="includes/smerovi.inc.php" enctype="multipart/form-data">
    <label>Naziv Smera:</label>
    <input name="course">
    <label>Opis Smera:</label>
    <input name="desc">
    Odaberi sliku:
    <select Emp Name='NEW' name="slika">
        <option value="">--- Odabir ---</option>
        <?php
        $select="slika";
        if (isset ($select)&&$select!=""){
            $select=$_POST['NEW'];
        }
        ?>
        <?php
        foreach($odabirSlike as $key => $value):?>
            <option value="<?php echo $value["fileid"];?>">
                <?php echo $value["filename"]; ?>
            </option>
        <?php endforeach;?>
    </select>
    <button name="submitCourse">Unesi</button><br>
</form>



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
                    <a href="includes/editSmer.php?id=<?= $value['id'] ?>">Izmeni</a>
                </td>
                <td>
                    <a href="includes/deleteSmer.php?id=<?= $value['id'] ?>">Obrisi</a>
                </td>

            </tr>
            <?php endforeach; ?>
        </table>
    </form>
    <button onclick="document.location='index.php'">Povratak</button>

</div>

</body>
</html>
<?php else:
    header('Location: fileUpload.php?error=pleaseLogIn');
endif;?>