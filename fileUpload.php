<?php
session_start();
if(isset($_SESSION['userid'])):
    require_once "classes/Files.php";
    $files = new Files();
    $allFiles = $files->getAllFiles();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['add-file'])) {
            $filename = $_POST['filename'];
            $filetype = $_POST['filetype'];
            $destinacija = $files->odabirDestinacije();
            $filelocation = 'uploads/' . $destinacija;
            $fileextension = $_POST['fileextension'];
            $filedate = $_POST['filedate'];
            $files->addFile($filelocation, $filename, $filetype, $fileextension, $filedate);
        }
    }?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Datoteke</title>
        <link rel ="stylesheet" type="text/css" href="style.css">
    </head>
    <body class="heig">
    <p class="greet" id="greet1">Datoteke</p>

    <script>
        function getFileExtension(filename) {
            return filename.slice((filename.lastIndexOf(".") - 1 >>> 0) + 2);
        }

        function fillFileExtension() {
            var fileInput = document.getElementById("filelocation");
            var filename = fileInput.value.split("\\").pop();
            var extension = getFileExtension(filename);
            document.getElementById("fileextension").value = extension;
        }
    </script>


    <p class="greet">Dodaj novu datoteku</p>
    <form class = "form" id="formUpload" method="post" enctype="multipart/form-data">
        <label class="formText" >Lokacija fajla:</label>
        <input class="formTextInput" type="file" id="filelocation" name="filelocation" required>

        <label class="formText" >Ime fajla:</label>
        <input class="formTextInput" type="text" name="filename" required>

        <label class="formText" for="filetype">Vrsta:</label>
        <select class="select" id="filetype" name="filetype" required>
            <option value= 0 >Skolska dokumenta</option>
            <option value= 1 >Raspored</option>
            <option value= 2 >Javne nabavke</option>
            <option value= 3 >Finansije</option>
            <option value= 4 >Roditelji</option>
            <option value= 5 >Slike smerova</option>
            <option value= 6 >Slike vesti</option>
            <option value= 7 >Ostalo</option>
        </select>

        <label for="fileextension"></label>
        <input class="formTextInput" type="hidden" id="fileextension" name="fileextension" readonly>

        <label class="formText">Datum:</label>
        <input  class="formTextInput" type="date" name="filedate" required>

        <button class="formBtn" type="submit" name="add-file" onclick="fillFileExtension()">Dodaj datoteku</button>
        <button class="formBtn" id="povratak" onclick="document.location='index.php'">Povratak</button>
    </form>

    <p class="greet" id="greet1">Lista datoteka</p>
    <table class="fileTable">
        <tr>
            <th>ID_Datoteke</th>
            <th>Lokacija</th>
            <th>Ime</th>
            <th>Vrsta</th>
            <th>Ekstenzija</th>
            <th>Datum</th>
        </tr>
        <?php foreach ($allFiles as $file): ?>
            <tr>
                <td><?php echo $file['fileid'];?></td>
                <td><?php echo $file['filelocation']; ?></td>
                <td><?php echo $file['filename']; ?></td>
                <td><?php echo $file['filetype']; ?></td>
                <td><?php echo $file['fileextension']; ?></td>
                <td><?php echo $file['filedate']; ?></td>
                <td>
                    <?php if ($file['fileextension'] == 'pdf'): ?>
                        <a class="linkTable" href="<?php echo $file['filelocation']; ?>" target="_blank">Pregledaj</a>
                        <a class="linkTable" href="includes/deleteFile.php?id=<?php echo $file['fileid']; ?>">Obrisi</a>
                    <?php else: ?>
                        <a class="linkTable" href="<?php echo $file['filelocation'] . $file['uploadedFileName']; ?>" download>Preuzmi</a>
                        <a class="linkTable" href="includes/deleteFile.php?id=<?php echo $file['fileid']; ?>&name=<?php echo $file['uploadedFileName'];?>&dest=<?php echo $file['filelocation'];?>">Obrisi</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </body>
    </html>
<?php
else:
    header('Location: index.php?error=pleaseLogIn');
    ?>
<?php endif;?>