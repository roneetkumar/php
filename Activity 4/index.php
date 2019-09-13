<?php

// declare the Array empSalary
$empSalary = array(
    array('Jan' => 1600, 'Feb' => 1650, 'Apr' => 1600, 'Jun' => 1720, 'Jul' => 1900),
    array('Mar' => 2300, 'Jun' => 2100, 'Jul' => 2400),
    array('Jan' => 2400, 'Mar' => 2200, 'Apr' => 2500, 'Jul' => 2100, 'Aug' => 2200),
);

$i = 1;

// Display the Array empSalary
echo "<br><br><u>Before Min,Max,Avg</u> :- <br><br><br>";

foreach ($empSalary as $singleArray) {
    echo "Salary of Employee $i - ";

    $maxSalary = reset($singleArray);
    $minSalary = end($singleArray);
    $total = 0;
    foreach ($singleArray as $key => $value) {
        echo "$key: $value$, &nbsp;&nbsp;";
        $maxSalary = findMax($value, $maxSalary);
        $minSalary = findMin($value, $minSalary);
        $total += $value;
    }

    $avgSalary = findAvg($total, $singleArray);

    // adding min, max, avg to the array
    $empSalary[$i - 1] += array(
        'Max' => $maxSalary, 'Min' => $minSalary, 'Avg' => floor($avgSalary),
    );

    echo "<br>";
    $i++;
    echo "<hr>";
}

$i = 1;

echo "<br><br><u>After Min,Max,Avg</u> :- <br><br><br>";

foreach ($empSalary as $singleArray) {
    echo "Salary of Employee $i - ";
    foreach ($singleArray as $key => $value) {
        echo "$key: $value$, &nbsp;&nbsp;";
    }
    $i++;
    echo "<hr>";
}

// functions for findMax, findMin, findAvg
function findMax($value, $maxSalary)
{
    return ($value > $maxSalary) ? $value : $maxSalary;
}

function findMin($value, $minSalary)
{
    return ($value > $minSalary) ? $minSalary : $value;
}

function findAvg($total, $singleArray)
{
    return $total / count($singleArray);
}
