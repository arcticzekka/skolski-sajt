<?php
session_start();
if(isset($_SESSION['userid'])):
include "classes/vestiContr.php";
$vestiCon = new VestiContr();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Unos</title>
    <link rel ="stylesheet" type="text/css" href="style.css">
</head>
<body>
<p class="greet" id="greet1">Unos</p>
<form class="form" id="vestiForm" action="includes/vesti.inc.php" method="post">



    <label class="formText">Naslov vesti:</label>
    <input class="formTextInput" name="vest" type="text">

    <label class="formText">Opis vesti:</label>
    <textarea class="formTextInput" style="height:100px; font-size:15px;" name="opisvesti"></textarea>

    <label class="formText" >Takmicenje:</label>
    <input class="formTextInput" id="check"  type="checkbox" id="takmicenje" name="takmicenje" value="takmicenje" onclick="validate()">


    <label class="formText"> Odaberi sliku:</label>
    <select class="select" Emp Name='NEW[]' name="slika" multiple style="overflow-y: visible;margin-top:3px;">
        <option  value="">--- Odabir ---</option>
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
    <a class="formText" id="vestiLink" href="prikazVesti.php">Pogledaj sve vesti</a>
    <input class="formBtn" type="submit" value="Unesi podatke" name="submit">


</form>
<button class="formBtn" id="povratak" style="height:80px;margin-bottom:20px;" onclick="document.location='index.php'">Povratak</button>

</body>

<?php else:
    header('Location: index.php?error=pleaseLogIn');
endif;?>
</html>
