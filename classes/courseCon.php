<?php
include "course.php";
$course = new Course();
$courses = $course->returnCourses();
$odabirSlike = $course->odabirSlike();

class CourseCon extends Course {
    public function handleSubmit($course, $desc, $img) {
        if(empty($course) || empty($desc)) {
            header("location: ../courseView.php?error=emptyInput");
            exit();
        }
        Course::inputCourse($course, $desc, $img);
    }

    public function handleEdit($selected, $newName, $newDesc) {
        Course::editCourse($selected, $newName, $newDesc);
    }

    public function handleDelete($selected) {
        Course::delCourse($selected);
    }

    public function handleSelect($id) {
        return Course::selectCourse($id);
    }
}





