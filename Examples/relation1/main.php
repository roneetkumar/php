<?php

require_once "Car.php";
require_once "Person.php";

$car0 = new Car(100, "Tesla Model S", 2018);
$car1 = new Car(101, "Tesla Model 3", 2017);
$car2 = new Car(102, "Tesla Model X", 2019);

$cars = [$car0, $car1, $car2];

$p0 = new Person("Roneet", 22);

$p0->setCar($cars);

echo $p0->heading();

echo $p0;

echo $p0->footer();

echo
    "<style>
    tr,td{
        padding: 15px;
        border: 1px solid #000
    }

    table{
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        margin: 20px auto;
    }
    </style>";
