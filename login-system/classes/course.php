<?php
include 'dbh.php';
class Course extends Dbh
{
    public function selectCourse($id)
    {
        $sql = "SELECT * FROM smerovi WHERE id = ?";
        $stmt = $this->connect()->query($sql);
        $res = $stmt->execute([$id]);
        return $res;
    }
    public function returnCourses()
    {
        $sql = "SELECT * FROM smerovi";
        $stmt = $this->connect()->query($sql);
        return $stmt;
    }
    public function inputCourse($course, $desc)
    {
        $sql = "INSERT INTO smerovi(smer, opis) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$course, $desc]);
    }

    public function delCourse($course)
    {
        $sql = "DELETE FROM smerovi WHERE smer = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$course]);
    }

    public function editCourse($course, $newCourse, $newDesc)
    {
        $sql = "UPDATE smerovi SET smer = ?, opis = ? WHERE smer = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newCourse, $newDesc, $course]);
    }
}