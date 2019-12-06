<?php

class Student
{

    private $teacherID;
    private $name;
    private $phone;
    private $email;

    public function __construct($teacherID = null, $name = null, $phone = null, $email = null)
    {
        $this->teacherID = $teacherID;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function getTeacherID()
    {
        return $this->teacherId;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setTeacherID($teacherID)
    {
        $this->teacherID = $teacherID;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public static function getHeader()
    {
        return "<table border='1'>
                <tr>
                    <th>Teacher ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>";
    }

    public static function getFooter()
    {
        return "</table>";
    }

    public function __toString()
    {
        return "<tr><td>$this->teacherID</td><td>$this->name</td><td>$this->phone</td><td>$this->email</td></tr>";
    }

    public function create($connection)
    {
        $teacherID = $this->teacherID;
        $name = $this->name;
        $phone = $this->phone;
        $email = $this->email;
        $sql = "INSERT INTO teacher VALUES($teacherID, '$name', '$phone', '$email')";
        $result = $connection->exec($sql);
        return $result;
    }

    public function updatePhone($connection)
    {
        $teacherID = $this->teacherID;
        $phone = $this->phone;
        $sql = "UPDATE teacher SET phone = $phone WHERE teacherID = $teacherID";
        $result = $connection->exec($sql);
        return $result;
    }

    public function delete($connection)
    {
        $teacherID = $this->teacherID;
        $sql = "DELETE FROM teacher WHERE teacherID = $teacherID";
        $result = $connection->exec($sql);
        return $result;
    }

    private function getAllTeachers($connection)
    {
        $counter = 0;
        $sql = "SELECT * FROM teacher";
        foreach ($connection->query($sql) as $row) {
            $teacher = new Teacher();
            $teacher->setTeacherID($row['teacherID']);
            $teacher->setName($row['name']);
            $teacher->setPhone($row['phone']);
            $teacher->setEmail($row['email']);
            $listOfTeachers[$counter++] = $teacher;
        }
        return $listOfTeachers;
    }

    public function displayAllTeachers($connection)
    {
        $listOfTeachers = Teacher::getAllTeachers($connection);
        echo Teacher::getHeader();
        foreach ($listOfTeachers as $teacher) {
            echo $teacher;
        }
        echo Teacher::getFooter();
    }

    public function getTeacherByID($connection)
    {
        $sql = "SELECT * FROM teacher WHERE teacherID = :tID";
        $prepare = $connection->prepare($sql);
        $prepare->bindValue(":tID", $this->teacherID, PDO::PARAM_INT);
        $prepare->execute();
        $result = $prepare->fetchAll();
        // $teacher;

        if (sizeof($result) > 0) {
            $teacherID = $result[0]['teacherID'];
            $name = $result[0]['name'];
            $phone = $result[0]['phone'];
            $email = $result[0]['email'];

            $teacher = new Teacher($teacherID, $name, $phone, $email);
        }
        return $teacher;
    }
}
