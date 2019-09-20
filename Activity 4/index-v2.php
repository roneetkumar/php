<?

$empSalary = array(
    array('Jan' => 1600, 'Feb' => 1650, 'Apr' => 1600, 'Jun' => 1720, 'Jul' => 1900),
    array('Mar' => 2300, 'Jun' => 2100, 'Jul' => 2400),
    array('Jan' => 2400, 'Mar' => 2200, 'Apr' => 2500, 'Jul' => 2100, 'Aug' => 2200),
);

displayEmp($empSalary, "Before Min, Max, Avg");

$empSalary = addToArray($empSalary);

displayEmp($empSalary, "After Min, Max, Avg");

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
        $max = max($value);
        $min = min($value);
        $avg = findAvg($value);
        $empSalary[$key] += array('Min' => $min, 'Max' => $max, 'Avg' => $avg);
    }
    return $empSalary;
}

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
