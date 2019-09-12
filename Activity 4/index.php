<?php

$empSalary = array(
    array('Jan' => 1600, 'Feb' => 1650, 'Apr' => 1600, 'Jun' => 1720, 'Jul' => 1900),
    array('Mar' => 2300, 'Jun' => 2100, 'Jul' => 2400),
    array('Jan' => 2400, 'Mar' => 2200, 'Apr' => 2500, 'Jul' => 2100, 'Aug' => 2200),
);

$i = 1;

echo "<br><br><u>Before Min,Max,Avg</u> :- <br><br><br>";

foreach ($empSalary as $singleArray) {
    echo "Salary of Employee $i - ";

    $findMax = reset($singleArray);
    $findMin = end($singleArray);
    $total = 0;
    foreach ($singleArray as $key => $value) {
        echo "$key: $value$, &nbsp;&nbsp;";
        $findMax = ($value > $findMax) ? $value : $findMax;
        $findMin = ($value > $findMin) ? $findMin : $value;
        $total += $value;
    }

    $avg = $total / count($singleArray);

    $empSalary[$i - 1] += array('| &nbsp; Max' => $findMax);
    $empSalary[$i - 1] += array('Min' => $findMin);
    $empSalary[$i - 1] += array('Avg' => floor($avg));

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
