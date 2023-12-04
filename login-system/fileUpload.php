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
</head>
<body>
    <h1>Datoteke</h1>

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


    <h2>Dodaj novu datoteku</h2>
    <form method="post" enctype="multipart/form-data">
        <label>Lokacija fajla:</label>
        <input type="file" id="filelocation" name="filelocation" required><br>
        
        <label>Ime fajla:</label>
        <input type="text" name="filename" required><br>

        <label for="filetype">Vrsta:</label>
		<select id="filetype" name="filetype" required>
			<option value= 0 >Skolska dokumenta</option>
			<option value= 1 >Raspored</option>
			<option value= 2 >Javne nabavke</option>
			<option value= 3 >Finansije</option>
			<option value= 4 >Roditelji</option>
            <option value= 5 >Slike smerova</option>
            <option value= 6 >Slike vesti</option>
			<option value= 7 >Ostalo</option>
        </select><br>

        <label for="fileextension"></label>
		<input type="hidden" id="fileextension" name="fileextension" readonly>

        <label>Datum:</label>
        <input type="date" name="filedate" required><br>

        <button type="submit" name="add-file" onclick="fillFileExtension()">Dodaj datoteku</button>
        <button onclick="document.location='index.php'">Povratak</button>
    </form>

    <h2>Lista datoteka</h2>
    <table>
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
				<a href="<?php echo $file['filelocation']; ?>" target="_blank">Pregledaj</a>
                <a href="includes/deleteFile.php?id=<?php echo $file['fileid']; ?>">Obrisi</a>
			<?php else: ?>
				<a href="<?php echo $file['filelocation'] . $file['uploadedFileName']; ?>" download>Preuzmi</a>
                <a href="includes/deleteFile.php?id=<?php echo $file['fileid']; ?>&name=<?php echo $file['uploadedFileName'];?>&dest=<?php echo $file['filelocation'];?>">Obrisi</a>
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