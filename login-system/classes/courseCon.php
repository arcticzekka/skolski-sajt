<?php
include "course.php";
$course = new Course();
$courses = $course->returnCourses();

class CourseCon extends Course {
    public function handleSubmit($course, $desc) {
        Course::inputCourse($course, $desc);
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


?>





