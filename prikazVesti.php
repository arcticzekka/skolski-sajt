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
</head>
<body>
<div>

    <form method="post">
        <label for="courses">Vesti:</label>
        <hr>
        <table>
            <?php
            foreach ($vesti as $key => $value):
                ?>
                <tr>
                    <td>
                        <label>Naslov: </label>
                        <?= $value['naslov'] ?>
                    </td>
                    <td>
                        <a href="includes/editVesti.php?id=<?= $value['id'] ?>">Izmeni</a>
                    </td>
                    <td>
                        <a href="includes/deleteVesti.php?id=<?= $value['id'] ?>">Obrisi</a>
                    </td>

                </tr>
            <?php endforeach; ?>
        </table>
    </form>
    <button onclick="document.location='unosVesti.php'">Povratak</button>
</div>
</body>
<?php else:
header('Location: index.php?error=pleaseLogIn');
endif;
    ?>
</html>
