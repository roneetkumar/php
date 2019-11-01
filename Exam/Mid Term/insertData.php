<?php
require_once 'main.php';

// question 6
foreach ($rating as $key => $value) {
    $sqlstmt = "INSERT INTO movie_rating VALUES ('$key','$value[total]','$value[min]','$value[max]')";
    $queryID = mysqli_query($connectionID, $sqlstmt);
}

if ($queryID = true) {
    echo '<h2> ratings are added successfully</h2>';
} else {
    echo '<h2>' . mysqli_error($connectionID) . '</h2>';
}

?>
<a href='manipulate.php'>return</a><br/>
