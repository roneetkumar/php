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
    foreach ($empSalary as $key => $value) {
        $max = findMax($value);
        $min = findMin($value);
        $avg = findAvg($value);
        $empSalary[$key] += array('Min' => $min, 'Max' => $max, 'Avg' => $avg);
    }
    return $empSalary;
}

//---------------------- version with the table---------------------------------------------------

function displayEmp($empSalary, $heading)
{
    $i = 1;
    echo "<br><br><h3>Before Min, Max, Avg</h3>";
    echo "<div>";
    foreach ($empSalary as $singleArray) {
        echo "<table border='1'>";
        echo "<caption><b> Salary of Employee - $i </b></caption>";
        foreach ($singleArray as $key => $value) {
            echo "<tr>";
            echo "<td>$key </td><td>$value$</td>";
            echo "</tr>";
        }
        $i++;
        echo "</table>";
    }
    echo "</div>";
}

function applyStyles()
{
    echo "<style>

    td{
        padding: 5px 40px
    }

    div{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        max-width: 900px;
        margin: auto;
        grid-gap: 1em
    }

    h3{
        text-align: center
    }

    caption{
        margin: 10px auto
    }
    </style>";
}
