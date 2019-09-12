<?php

$students = array("p100" => "david","p200"=>"ahmad","p300"=>"cathy","p400"=>"goe","p500"=>"mary");

function sortByLength($a,$b){
    return strlen($a) > strlen($b) ? 1 : -1;
}

uasort($students, 'sortByLength');

foreach ($students as $key => $value) {
    echo "$key is $value<br>";
}

?>
