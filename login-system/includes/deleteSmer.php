<?php
    include "../classes/courseCon.php";
    $course = new CourseCon();
    $id = $_GET['id'];
    $slika = $_GET['id'];
    $course->handleDelete($id);
    header('Location: ../courseView.php');