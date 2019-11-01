<?php

class Car
{
    private $id;
    private $brand;
    private $year;

    public function __construct($id = null, $brand = null, $year = null)
    {
        $this->id = $id;
        $this->brand = $brand;
        $this->year = $year;
    }

    public static function heading()
    {
        echo "<table>";
        echo "<tr><th>Car ID</th><th>Brand</th><th>Year</th></tr>";

    }

    public static function footer()
    {
        echo "</table>";
    }

    public function __toString()
    {
        return "<tr><td>$this->id</td><td>$this->brand</td><td>$this->year</td></tr>";
    }
}
