
<?php

class Person
{
    private $name;
    private $age;
    private $listOfCars;
    private $sequence = 0;

    public function __construct($name = null, $age = null)
    {
        $this->name = $name;
        $this->age = $age;
        $this->listOfCars = array();
    }

    public function setCar($cars)
    {
        $this->listOfCars = $cars;
    }

    public static function heading()
    {
        echo "<br><center>----------------------List of Persons---------------------</center><br>";

        echo "<table>";
        echo "<tr><th>Name</th><th>Age</th></tr>";

    }

    public function footer()
    {
        echo "</table>";

        if (count($this->listOfCars) > 0) {
            echo "<br><center>----------------------List of Cars---------------------</center><br>";

            echo Car::heading();

            foreach ($this->listOfCars as $car) {
                echo $car;
            }

            echo Car::footer();
        }
    }

    public function __toString()
    {
        return "<tr><td>$this->name</td><td>$this->age</td></tr>";
    }

}
