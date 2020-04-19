<?php

include "index1.php";

$emp1 = new Employee("Roneet", "FullTime", 3000, 10);
$emp2 = new Employee("Davinder", "FullTime", 2000, 12);
$emp3 = new Employee("Rupinder", "PartTime", 4000, 11);
$emp4 = new Employee("Vinay", "PartTime", 3500, 9);
$emp5 = new Employee("Sunil", "Temporary", 2200, 11);
$emp6 = new Employee("Ankit", "Temporary", 3600, 13);

$allEmployees = [$emp1, $emp2, $emp3, $emp4, $emp5, $emp6];

displayEmployees($allEmployees);

$emp2->set_salary(7000);
$emp4->set_salary(1, 200);
$emp6->set_salary(1, 15, 1);

echo "<br><br>------------------------After New Salaries----------------------<br><br>";

displayEmployees($allEmployees);

function displayEmployees($allEmployees)
{
    Employee::header();

    foreach ($allEmployees as $OneEmployee) {
        echo $OneEmployee;
    }

    Employee::footer();
}
