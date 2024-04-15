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
</head>
<body>
<form action="includes/vesti.inc.php" method="post">
    <fieldset>
        <legend>Unos</legend>
        <div>
            <label>Naslov vesti:</label>
            <input name="vest" type="text">
        </div><br>
        <div>
            <label>Opis vesti:</label>
            <textarea name="opisvesti"></textarea>
        </div><br>
        <br>
        <input type="checkbox" id="takmicenje" name="takmicenje" value="takmicenje" onclick="validate()">
        <label>Takmicenje</label><br>
        <br>
        Odaberi sliku:
        <select Emp Name='NEW[]' name="slika" multiple style="height: 100px; width: 100px; overflow-y: visible">
            <option value=-1>--- Odabir ---</option>
            <?php
            $select="slika";
            if (isset ($select)&&$select!=""){
                $select=$_POST['NEW'];
            }
            ?>
            <?php
            foreach($odabirSlike as $key => $value):
                if($value["vesti_id"] != 0) continue;
                ?>
                <option value="<?php echo $value["fileid"];?>">
                    <?php
                        echo $value["filename"];
                    ?>
                </option>
            <?php endforeach;?>
<!--            if ($x == "blue") continue;-->
<!--            echo "$x <br>";-->
        </select>
        <br>
        <input type="submit" value="Unesi podatke" name="submit"><br>
        <br>
        <a href="prikazVesti.php">Pogledaj sve vesti</a>
    </fieldset>
</form>
<button onclick="document.location='index.php'">Povratak</button>
</body>
</html>
<?php else:
    header('Location: index.php?error=pleaseLogIn');
endif;?>

