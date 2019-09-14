<?
include "functions.php";

$empSalary = array(
    array('Jan' => 1600, 'Feb' => 1650, 'Apr' => 1600, 'Jun' => 1720, 'Jul' => 1900),
    array('Mar' => 2300, 'Jun' => 2100, 'Jul' => 2400),
    array('Jan' => 2400, 'Mar' => 2200, 'Apr' => 2500, 'Jul' => 2100, 'Aug' => 2200),
);

displayEmployee($empSalary, "Before Min,Max,Avg");

$empSalary = addToArray($empSalary);

displayEmployee($empSalary, "After Min,Max,Avg");
