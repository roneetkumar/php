<?php

class Employee
{
    private $empId;
    private $empName;
    private $empType;
    private $salary;
    private $commission;
    private static $sequence = 100;

    public function __construct($empName, $empType, $salary, $commission)
    {
        $this->empId = self::$sequence++;
        $this->empName = $empName;
        $this->empType = $empType;
        $this->salary = $salary;
        $this->commission = $commission;
    }

    public function get_empId()
    {
        return $this->empId;
    }

    public function set_empId($empId)
    {
        $this->empId = $empId;
    }

    public function get_empName()
    {
        return $this->empName;
    }

    public function set_empName($empName)
    {
        $this->empName = $empName;
    }

    public function get_empType()
    {
        return $this->empType;
    }

    public function set_empType($empType)
    {
        $this->empType = $empType;
    }

    public function get_salary()
    {
        return $this->salary;
    }

    // public function set_salary($salary)
    // {
    //     $this->salary = $salary;
    // }

    public function get_commission()
    {
        return $this->commission;
    }

    public function set_commission($commission)
    {
        $this->commission = $commission;
    }

    public function __toString()
    {
        return "<tr><td>$this->empId</td><td>$this->empName</td><td>$this->empType</td><td>$$this->salary</td><td>$this->commission%</td></tr>";
    }

    public static function header()
    {
        echo "<table border='1'>";
        echo "<caption>Employees</caption><tr><th>Employee ID</th><th>Name</th><th>Type</th><th>Salary</th><th>Commission</th></tr>";

    }

    public static function footer()
    {
        echo "</table>";
    }

    public function __call($method, $params)
    {
        switch ($method) {
            case 'set_salary':
                if (count($params) == 1) {
                    $this->salary = $params[0];
                } elseif (count($params) == 2) {
                    $percentage = $params[1];
                    $this->salary = $this->salary + $params[1];
                } elseif (count($params) == 3) {
                    $percentage = $params[1];
                    $this->salary = $this->salary + ($this->salary * $percentage) / 100;
                }
                break;
            default:
                break;
        }
    }

}
