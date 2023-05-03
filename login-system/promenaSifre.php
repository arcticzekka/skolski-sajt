<?php
session_start();
include "classes/dbh.php";
$ime = new Dbh();
$imena = $ime->getUsersDbh();
?>

<?php
if(isset($_SESSION['userid']) && $_SESSION['authID'] == 0):?>
<html>
<head>
    <title>Promena sifre</title>
</head>
<body>
    <div>
        <form method="post">
            <table>
                <?php
                foreach ($imena as $key => $value):
                    ?>
                    <tr>
                        <td>
                            Ime: <?= $value['uid'] ?>
                        </td>
                        <td>
                            E-mail: <?= $value['email'] ?>
                        </td>
                        <td>
                            <a href="includes/editSifra.php?id=<?= $value['id'] ?>">Izmeni</a>
                        </td>
                        <td>
                            <a href="includes/deleteSifra.php?id=<?= $value['id'] ?>">Obrisi</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </form>
        <button onclick="document.location='index.php'">Povratak</button>
    </div>
</body>
</html>
<?php elseif(isset($_SESSION['userid'])):
?>
    <div>
        <form action="includes/passChange.inc.php" method="post">
            <div>
                <input type="hidden" value="<?=$_SESSION['useruid']?>" name="uid">
                <label for="password">Nova lozinka: </label>
                <input type="password" name="pwd">
            </div>
            <button type="submit" name="submit">Promena lozinke</button>
        </form>
        <button onclick="document.location='index.php'">Povratak</button>
    </div>
<?php
endif;
?>
