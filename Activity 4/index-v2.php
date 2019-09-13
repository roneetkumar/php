<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

$empSalary = array(
    array('Jan' => 1600, 'Feb' => 1650, 'Apr' => 1600, 'Jun' => 1720, 'Jul' => 1900),
    array('Mar' => 2300, 'Jun' => 2100, 'Jul' => 2400),
    array('Jan' => 2400, 'Mar' => 2200, 'Apr' => 2500, 'Jul' => 2100, 'Aug' => 2200),
);

$i = 1;

echo "<br><br><h3>Before Min,Max,Avg</h3><br><br><br>";
echo "<div>";
foreach ($empSalary as $singleArray) {
    echo "<table border='1'>";
    echo "<caption> Salary of Employee $i </caption>";
    foreach ($singleArray as $key => $value) {
        echo "<tr>";
        echo "<td>$key </td><td>$value$</td>";
        echo "</tr>";
    }

    $maxSalary = max($singleArray);
    $minSalary = min($singleArray);
    $avgSalary = array_sum($singleArray) / count($singleArray);

    $empSalary[$i - 1] += array('Max' => $maxSalary);
    $empSalary[$i - 1] += array('Min' => $minSalary);
    $empSalary[$i - 1] += array('Avg' => floor($avgSalary));

    $i++;
    echo "</table>";
}
echo "</div>";

$i = 1;

echo "<br><br><h3>After Min,Max,Avg</h3><br><br><br>";
echo "<div>";

foreach ($empSalary as $singleArray) {
    echo "<table border='1'>";
    echo "<caption> Salary of Employee $i </caption>";
    foreach ($singleArray as $key => $value) {
        echo "<tr>";
        echo "<td>$key </td><td>$value$</td>";
        echo "</tr>";
    }
    $i++;
    echo "</table>";
}
echo "</div>";

?>
</body>

<style>

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
</style>
</html>
