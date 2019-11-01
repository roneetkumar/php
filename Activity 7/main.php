<?php

include_once "Employee.php";
include_once "Job.php";

$emp0 = new Employee(100, "John", 2000);
$emp1 = new Employee(101, "Jane", 1000);
$emp2 = new Employee(102, "Peter", 3000);
$emp3 = new Employee(103, "Rocky", 5000);

$job0 = new Job(10, "Programmer");
$job1 = new Job(11, "Analyst");
$job2 = new Job(12, "Writer");
$job3 = new Job(13, "Developer");

$emp = [$emp0, $emp1, $emp2, $emp3];
$job = [$job0, $job1, $job2, $job3];

for ($i = 0; $i < count($emp); $i++) {
    $emp[$i]->createJob($job[$i]);
}

Employee::heading();

foreach ($emp as $value) {
    echo $value;
}

Employee::footer();

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
        font-family: Google Sans
    }
    </style>";
