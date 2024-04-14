<?php
include "../classes/vestiContr.php";
$vest = new VestiContr();
$id = $_GET['id'];
$vest->handleDelete($id);
header('Location: ../prikazVesti.php');