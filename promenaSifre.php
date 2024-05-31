<?php
session_start();
if(isset($_SESSION['userid']) && $_SESSION['authID'] == 0):
    include "classes/dbh.php";
    $ime = new Dbh();
    $imena = $ime->getUsersDbh();
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Promena sifre</title>
        <link rel ="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
    <div>
        <form method="post" class="formPwd">
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
                            <a class="linkTable" href="includes/editSifra.php?id=<?= $value['id'] ?>">Izmeni</a>
                        </td>
                        <td>
                            <a class="linkTable" href="includes/deleteSifra.php?id=<?= $value['id'] ?>">Obrisi</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </form>
        <button class="formBtn" id="povratak" style="height:80px;" onclick="document.location='index.php'">Povratak</button>
    </div>
    </body>
    </html>
<?php elseif(isset($_SESSION['userid'])):
?>
<html>
<head>
    <title>Promena sifre</title>
    <link rel ="stylesheet" type="text/css" href="style.css">

</head>
<form  class="form" action="includes/passChange.inc.php" method="post">

    <label class="formText"  for="password">Nova lozinka: </label>
    <input  type="hidden" value="<?=$_SESSION['useruid']?>" name="uid">

    <input class="formTextInput" type="password" name="pwd">



    <button class="formBtn" type="submit" name="submit">Promena lozinke</button>

    <button class="formBtn" id="povratak" onclick="document.location='index.php'">Povratak</button>
</form>



<?php else:
    header('Location: fileUpload.php?error=pleaseLogIn');
endif;
?>
</body>
</html>