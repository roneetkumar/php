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

//-----usort-----------------------------

$arr = ['apple','mango','banana', 'grapes', 'pineapple'];

function display($arr){
    foreach ($arr as $key => $value) {
        $key = $key + 1;
        echo "the value $key is $value <br>";
        }
}

function sortByLength($a,$b){
    return strlen($a) > strlen($b) ? 1 : -1;
}

echo '<br><br><u><b> Normal Display </b></u><br><br>';

display($arr);


echo '<br><br><u><b> User Defined Sort </b></u><br><br>';

usort($arr, 'sortByLength');

display($arr);






?>

</body>
</html>
