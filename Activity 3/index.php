<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activity 3</title>
</head>

<body>


    <h3>In php an array many have different type of data</h3>
    <h3>In php the size (dimentions) of an array is unlimited</h3>
    <h3>In php, we distinguish 2 types of array : </h3>
    <ol>
        <li>Scalar Array (index is integer) e.g : arr[0], arr[1]</li>
        <li>
        Associative array (index is string) e.g : arr['name'], arr[name2]<br>
        <?php

        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        foreach($age as $key => $val) {
            echo "<span>Key = $key Value = $val</span>";
            echo "<br>";
        }
    ?>
        </li>

     <?php
        $colorsArr = array("red","green","blue","pink");

        function display($colorsArr){
            echo "<br><br>Colors :<br>";
            foreach ($colorsArr as $key => $value) {
                $key = $key + 1;
                echo "$key is $value";
                echo "<br>";
            }
        }

        display($colorsArr);

        echo "<br><br>";

        //find element
        $found = array_search("red", $colorsArr);

        echo "$colorsArr[$found] is at position $found<br><br>";

        //count
        $count = count($colorsArr);
        echo "$count elemets<br><br>";
     ?>
    </ol>
</body>

</html>
