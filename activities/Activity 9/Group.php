<?php

class Group
{
    private $id;
    private $desc;
    private $students = [];

    public function __construct($id = null, $desc = null)
    {
        $this->id = $id;
        $this->desc = $desc;
    }

    public function setStudent($student)
    {
        array_push($this->students, $student);
    }

    public function getStudents()
    {
        return $this->students;
    }

    public function __toString()
    {
        return "$this->id $this->desc";
    }
}
