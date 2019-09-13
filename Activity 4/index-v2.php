<?php
$empSalary = array(
    array('Jan' => 1600, 'Feb' => 1650, 'Apr' => 1600, 'Jun' => 1720, 'Jul' => 1900),
    array('Mar' => 2300, 'Jun' => 2100, 'Jul' => 2400),
    array('Jan' => 2400, 'Mar' => 2200, 'Apr' => 2500, 'Jul' => 2100, 'Aug' => 2200),
);

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

    $empSalary[$i - 1] += array(
        'Max' => max($singleArray),
        'Min' => min($singleArray),
        'Avg' => floor(array_sum($singleArray) / count($singleArray)),
    );

    $i++;
    echo "</table>";
}
echo "</div>";

$i = 1;

echo "<br><br><h3>After Min, Max, Avg</h3>";
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
