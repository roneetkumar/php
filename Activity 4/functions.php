<?php
function displayEmployee($empSalary, $heading)
{
    echo "<br><br><u>$heading</u> :- <br><br><br>";
    $i = 1;
    foreach ($empSalary as $singleArray) {
        echo "Salary of Employee $i - ";
        foreach ($singleArray as $key => $value) {
            echo "$key: $value$, &nbsp;&nbsp;";
        }
        echo "<br>";
        $i++;
        echo "<hr>";
    }
}

function findMax($empSalary)
{
    $maxSalary = 0;
    foreach ($empSalary as $key => $value) {
        $maxSalary = ($value > $maxSalary) ? $value : $maxSalary;
    }
    return $maxSalary;
}

function findMin($empSalary)
{
    $minSalary = findMax($empSalary);
    foreach ($empSalary as $key => $value) {
        $minSalary = ($value > $minSalary) ? $minSalary : $value;
    }
    return $minSalary;
}

function findAvg($empSalary)
{
    $total = 0;
    foreach ($empSalary as $key => $value) {
        $total += $value;
    }
    $avg = $total / count($empSalary);
    return round($avg, 2);
}

function addToArray($empSalary)
{
    $i = 0;
    foreach ($empSalary as $key => $value) {
        $max = findMax($empSalary[$i]);
        $min = findMin($empSalary[$i]);
        $avg = findAvg($empSalary[$i]);
        $empSalary[$i] += array('Min' => $min, 'Max' => $max, 'Avg' => $avg);
        $i++;
    }
    return $empSalary;
}
