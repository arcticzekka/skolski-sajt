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
    public function odabirSlike(){
        $sql = "SELECT * FROM files WHERE filetype=5";
        $stmt = $this->connect()->query($sql);
        return $stmt;
    }

    public function updateFile($fileid, $id){
        $sql2 = "UPDATE files SET vesti_id=? WHERE fileid=?";
        $stmt2= $this->connect()->prepare($sql2);
        $stmt2->execute([$this->selectCourse($id)['id'], $fileid]);
    }

    public function inputCourse($course, $desc, $img)
    {
        $sql = "INSERT INTO smerovi(smer, opis) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$course, $desc]);

        $sql = "SELECT MAX(id) FROM smerovi";
        $stmt = $this->connect()->query($sql);
        $stmt->execute();
        $idSmerovi = $stmt->fetch()[0];

        Course::updateFile($img, $idSmerovi);

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