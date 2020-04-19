<?php

class Student
{
    private $id;
    private $fname;
    private $lname;
    private $photo;

    public function __construct($id = null, $fname = null, $lname = null, $photo = null)
    {
        $this->id = $id;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->photo = $photo;

    }

    public function getID()
    {
        return $this->id;
    }
    public function getFname()
    {
        return $this->fname;
    }
    public function getLname()
    {
        return $this->lname;
    }
    public function getPhoto()
    {
        return $this->photo;
    }

    public function setID($id)
    {
        $this->id = $id;
    }
    public function setFname($fname)
    {
        $this->fname = $fname;
    }
    public function setLname($lname)
    {
        $this->lname = $lname;
    }
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    public function displayAllStudents($connection, $listOfStudents)
    {
        echo $this->getHeader();
        foreach ($listOfStudents as $student) {
            echo $student;
        }
        echo $this->getFooter();
    }

    public function getHeader()
    {
        return "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Photo</th>
                </tr>";
    }

    public function getFooter()
    {
        return "</table>";
    }

    public function __toString()
    {
        return "<tr><td>$this->id</td><td>$this->fname</td><td>$this->lname</td><td>$this->photo</td></tr>";
    }

}
