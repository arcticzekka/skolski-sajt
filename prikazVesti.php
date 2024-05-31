<?php
session_start();
if(isset($_SESSION['userid'])):
include "classes/dbh.php";
$vest = new Dbh();
$vesti = $vest->getVestiDbh();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vesti</title>
    <link rel ="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div>

    <form method="post" >
        <br>
        <label class="smer"  for="courses">Vesti:</label>

        <table class="fileTable" id="vestiTable">
            <?php
            foreach ($vesti as $key => $value):
                ?>
                <tr>
                    <td>
                        <label>Naslov: </label>
                        <?= $value['naslov'] ?>
                    </td>
                    <td>
                        <a class="linkTable" href="includes/editVesti.php?id=<?= $value['id'] ?>">Izmeni</a>
                    </td>
                    <td>
                        <a class="linkTable" href="includes/deleteVesti.php?id=<?= $value['id'] ?>">Obrisi</a>
                    </td>

                </tr>
            <?php endforeach; ?>
        </table>
    </form>
    <button class="formBtn" id="povratak" style="height:80px;" onclick="document.location='unosVesti.php'">Povratak</button>

</div>
</body>
<?php else:
    header('Location: index.php?error=pleaseLogIn');
endif;
?>
</html>
