<?php
session_start();
if(isset($_SESSION['userid'])):
    include "classes/courseCon.php";
    $courseCon = new CourseCon();
    ?>

    <html>
    <head>
        <title>Smerovi!</title>
        <link rel ="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <form class="form" style="height:500px;"method="post" enctype="multipart/form-data">
        <label class="formText">Naziv Smera:</label>
        <input class="formTextInput" name="course">
        <label class="formText">Opis Smera:</label>
        <input class="formTextInput" name="desc">
        <label  class="formText" id="odabirSlike">Odaberi sliku:</label>
        <select class="select" Emp Name='NEW' name="slika">
            <option value="" >--- Odabir ---</option>
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
        <button class="formBtn" name="submitCourse">Unesi</button><br>
    </form>


    <?php
    if(isset($_POST['submitCourse'])) {
        $name = $_POST['course'];
        $desc = $_POST['desc'];
        $img = $_POST['NEW'];
        $courseCon->handleSubmit($name, $desc, $img);
    }
    ?>

    <div>

        <form method="post" class="formSmer">
            <label class="smer" for="courses">Smerovi:</label>
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
                            <a class="linkTable" href="includes/editSmer.php?id=<?= $value['id'] ?>">Izmeni</a>
                        </td>
                        <td>
                            <a class="linkTable"  href="includes/deleteSmer.php?id=<?= $value['id'] ?>">Obrisi</a>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </table>

        </form>
        <button class="formBtn" id="povratak" onclick="document.location='index.php'">Povratak</button>
    </div>

    </body>
    </html>
<?php else:
    header('Location: fileUpload.php?error=pleaseLogIn');
endif;?>