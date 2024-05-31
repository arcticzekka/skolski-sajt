<?php
if(isset($_POST['submitCourse'])) {
    include "../classes/courseCon.php";
    $name = $_POST['course'];
    $desc = $_POST['desc'];
    $img = $_POST['NEW'];
    $courseCon = new CourseCon();
    $courseCon->handleSubmit($name, $desc, $img);

    // var_dump();
    // die();
    
    header("location: ../courseView.php?error=none");
}
    ?>