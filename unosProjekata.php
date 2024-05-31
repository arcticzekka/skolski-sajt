<?php
session_start();
if(isset($_SESSION['userid'])):
    include "classes/projekti.php";
    $projektiClass = new Projekti();
    ?>

<!DOCTYPE html>
<html>
<head>
    <link rel ="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <title>Unos</title>
</head>
<body>
<form action="includes/projekti.inc.php" method="post" class="form" id="vestiForm">
        <p class="greet" id="greet1">Unos</p>
        <div>
            <label class="formText">Naslov projekta:</label>
            <input class="formTextInput" name="projekat" type="text">
        </div><br>
        <div>
            <label class="formText" >Opis projekta:</label>
            <textarea class="formTextInput" name="opisprojekta"></textarea>
        </div><br>
        <br>
    <label class="formText">Odaberi sliku:</label>
        <select class="select" Emp Name='NEW[]' name="slika" multiple style="overflow-y: visible;margin-top:3px;">
            <option value="">--- Odabir ---</option>
            <?php
            $select="slika";
            if (isset ($select)&&$select!=""){
                $select=$_POST['NEW'];
            }
            ?>
            <?php
            foreach($projektiClass->odabirSlike() as $key => $value):?>
                <option value="<?php echo $value["fileid"];?>">
                    <?php echo $value["filename"]; ?>
                </option>
            <?php endforeach;?>
        </select>
    <a class="formText" id="vestiLink" href="prikazProjekata.php">Pogledaj sve projekte</a>
        <input class="formBtn" type="submit" value="Unesi podatke" name="submit"><br>
</form>
<button class="formBtn" id="povratak" style="height:80px;margin-bottom:20px;" onclick="document.location='index.php'">Povratak</button>
</body>
</html>
<?php else:
    header('Location: index.php?error=pleaseLogIn');
endif;?>

