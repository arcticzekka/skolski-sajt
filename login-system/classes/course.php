<?php
include 'dbh.php';
class Course extends Dbh
{
    public function selectCourse($id)
    {
        $sql = "SELECT * FROM smerovi WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $res = $stmt->fetch();
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

        $sql = "SELECT MAX(id) FROM smerovi";
        $stmt = $this->connect()->query($sql);
        $stmt->execute();
        $idSmerovi = $stmt->fetch()[0];

    }

    public function delCourse($course)
    {
        $sql = "DELETE FROM smerovi WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$course]);
    }

    public function editCourse($course, $newCourse, $newDesc)
    {
        $sql = "UPDATE smerovi SET smer = ?, opis = ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newCourse, $newDesc, $course]);
    }
}