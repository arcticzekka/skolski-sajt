<?php
require 'dbh.php';

class Files extends Dbh{
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }
    public function odabirDestinacije(){
        if($_POST['filetype'] == 0){
            $destinacija = "slike_smerovi/";
        }else if($_POST['filetype'] == 1){
            $destinacija = "slike_vesti/";
        }
        return $destinacija;
    }

    public function addFile($filelocation, $filename, $filetype, $fileextension, $filedate) {
        try {
            if (isset($_FILES['filelocation']) && $_FILES['filelocation']['error'] === UPLOAD_ERR_OK)
            {
                // get details of the uploaded file
                $fileTmpPath = $_FILES['filelocation']['tmp_name'];
                $fileName = $_FILES['filelocation']['name'];
                $fileSize = $_FILES['filelocation']['size'];
                $fileType = $_FILES['filelocation']['type'];
                $fileNameCmps = explode(".", $fileName);
                $fileExtension = strtolower(end($fileNameCmps));
                // sanitize file-name
                $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
                    // directory in which the uploaded file will be moved
                    $uploadFileDir = './uploads/' . $this->odabirDestinacije();
                    $dest_path = $uploadFileDir . $newFileName;
                    if(move_uploaded_file($fileTmpPath, $dest_path))
                    {
                        $message ='Uspesno upload-ovan.';
                    }
                    else
                    {
                        $message = 'File nije premesten na zeljenu destinaciju.';
                    }
                }
            else
            {
                $message = 'Neuspesno upload-ovan.<br>';
                $message .= 'Error:' . $_FILES['filelocation']['error'];
            }
            echo $message;
            $stmt = $this->connect()->prepare("INSERT INTO files (filelocation, filename, filetype, fileextension, filedate, uploadedFileName) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$filelocation, $filename, $filetype, $fileextension, $filedate, $newFileName]);
            return true;
        } catch(PDOException $e) {
            echo "Error adding file: " . $e->getMessage();
            return false;
        }
    }

        public function deleteFile($fileid, $name, $destinacija) {
        try {
            $name = "../" . $destinacija . $name;
            unlink($name);
            $stmt = $this->connect()->prepare("DELETE FROM files WHERE fileid = ?");
            $stmt->execute([$fileid]);
            return true;
        } catch(PDOException $e) {
            echo "Error deleting file: " . $e->getMessage();
            return false;
        }
    }

    public function getAllFiles()
    {
        $sql = 'SELECT * FROM files';

        $stmt = $this->connect()->query($sql);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}
