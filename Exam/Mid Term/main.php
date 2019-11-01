<?php
require_once 'dbconfig.php';

// question 1
$movieRating = array(
    "Joker" => array("Maria" => 4, "Kim" => -4, "Riazeh" => 2, "Adison" => 3, "Roy" => 7),
    "Maleficent" => array("Maria" => 3, "Kim" => 2, "Riazeh" => 4, "Adison" => -2, "Roy" => 1),
    "Matrix" => array("Maria" => 5, "Kim" => 2, "Riazeh" => 3, "Adison" => 4, "Roy" => 2),
    "Gladiator" => array("Maria" => 4, "Kim" => 4, "Riazeh" => -3, "Adison" => 3, "Roy" => 2),
    "Terminator" => array("Maria" => 5, "Kim" => 3, "Riazeh" => 4, "Adison" => 4, "Roy" => 5),
);

$fixedArr = fixArr($movieRating);
$rating = ratingArr($fixedArr);

// question  2
function displayMovieRating($movieRating)
{
    echo "<table border='1'> <tr>
    <th> Client/Movies </th>
    <th> Maria </th>
    <th> Kim </th>
    <th> Riazeh </th>
    <th> Adison </th>
    <th> Roy </th>
    ";

    foreach ($movieRating as $movie => $ratingArr) {
        echo "<tr><th>$movie</th>";
        foreach ($ratingArr as $key => $value) {
            # code...
            echo "<th>$value</th>";
        }
        echo "<tr>";
    }
    echo "</table>";
}

// question 3
function fixArr($movieRating)
{
    foreach ($movieRating as $key => $value) {
        foreach ($value as $key1 => $value1) {
            if ($value1 < 1 || $value1 > 5) {
                $movieRating[$key][$key1] = null;
            }
        }
    }
    return $movieRating;
}

// question 4 - 5
function ratingArr($movieRating)
{
    $ratingArr = array(
        "Joker" => array("total" => 0, "min" => 0, "max" => 0),
        "Maleficent" => array("total" => 0, "min" => 0, "max" => 0),
        "Matrix" => array("total" => 0, "min" => 0, "max" => 0),
        "Gladiator" => array("total" => 0, "min" => 0, "max" => 0),
        "Terminator" => array("total" => 0, "min" => 0, "max" => 0),
    );

    foreach ($movieRating as $key => $value) {
        $max = 0;
        $min = 100;
        foreach ($value as $key1 => $value1) {
            if ($value1 > 0) {
                $ratingArr[$key]['total'] += $value1;
                $ratingArr[$key]['max'] = $max = $value1 > $max ? $value1 : $max;
                $ratingArr[$key]['min'] = $min = $value1 < $min ? $value1 : $min;
            }
        }
    }

    return $ratingArr;
}

function printRating($rating)
{
    echo "<table border='1'> <tr>
    <th> Client/Movies </th>
    <th> Total rating </th>
    <th> min </th>
    <th> max </th>
    ";

    foreach ($rating as $movie => $ratingArr) {
        echo "<tr><th>$movie</th>";
        foreach ($ratingArr as $key => $value) {
            # code...
            echo "<th>$value</th>";
        }
        echo "<tr>";
    }
    echo "</table>";

}
