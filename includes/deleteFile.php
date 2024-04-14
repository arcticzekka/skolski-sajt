<?php
session_start();
include "../classes/Files.php";
$fileid = $_GET['id'];
$name = $_GET['name'];
$dest = $_GET['dest'];
$file = new Files();
$file->deleteFile($fileid, $name, $dest);
header('Location: ../fileUpload.php?error=none');
