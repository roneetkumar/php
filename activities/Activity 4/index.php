<?

$empSalary = array(
    array('Jan' => 1600, 'Feb' => 1650, 'Apr' => 1600, 'Jun' => 1720, 'Jul' => 1900),
    array('Mar' => 2300, 'Jun' => 2100, 'Jul' => 2400),
    array('Jan' => 2400, 'Mar' => 2200, 'Apr' => 2500, 'Jul' => 2100, 'Aug' => 2200),
);

displayEmployee($empSalary, "Before Min,Max,Avg");

$empSalary = addToArray($empSalary);

displayEmployee($empSalary, "After Min,Max,Avg");

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
    foreach ($empSalary as $value) {
        $maxSalary = ($value > $maxSalary) ? $value : $maxSalary;
    }
    return $maxSalary;
}

function findMin($empSalary)
{
    $minSalary = findMax($empSalary);
    foreach ($empSalary as $value) {
        $minSalary = ($value > $minSalary) ? $minSalary : $value;
    }
    return $minSalary;
}

function findAvg($empSalary)
{
    $total = 0;
    foreach ($empSalary as $value) {
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
