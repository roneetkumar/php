<?php

class Employee
{
    private $id;
    private $name;
    private $salary;
    private $jobs;
    private $sequence = 0;

    public function __construct($id = null, $name = null, $salary = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->salary = $salary;
        $this->jobs = array();
    }

    public function createJob($job)
    {
        $this->jobs[$this->sequence++] = $job;
    }

    public static function heading()
    {

        echo "<table>";
        echo "<tr><th>Id</th><th>Name</th><th>Age</th></tr>";
        // print_r($this->jobs);

    }

    public static function footer()
    {
        echo "</table>";

        Job::heading();

        foreach ($this->jobs as $job) {
            echo $job;
        }

        Job::footer();
    }

    public function __toString()
    {
        return "<tr><td>$this->id</td><td>$this->name</td><td>$this->salary</td></tr>";
    }

}
