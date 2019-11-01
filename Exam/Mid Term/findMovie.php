 <?php
require_once 'dbconfig.php';

// question 7

echo "<form action='#' method='get'>
        <input type='text' name='movie' required> <input type='submit' value='find'/>
     </form>";

if (isset($_GET['movie'])) {
    find($_GET['movie']);
}

function find($movie)
{
    $sqlstmt = "SELECT * FROM movie_rating WHERE movie_title = '$movie'";
    $queryID = mysqli_query($GLOBALS['connectionID'], $sqlstmt);

    $cn = mysqli_num_rows($queryID);

    echo $movie;

    echo "<table border='1'><caption><big><b>ratings</b></big></caption>";

    echo "<tr>
        <th>min</th>
        <th>max</th>
        <th>total</th>
     </tr>";

    while ($row = mysqli_fetch_array($queryID)) {
        $total = $row['TOT_RAT'];
        $min = $row['MIN_RAT'];
        $max = $row['MAX_RAT'];

        echo "<tr>
            <td>$min</td>
            <td>$max</td>
            <td>$total</td>
        </tr>";

    }
    echo "</table><br/>";

    if ($queryID = true) {
        echo '<h2> rating found</h2>';
    } else {
        echo '<h2>' . mysqli_error($GLOBALS['connectionID']) . '</h2>';
    }
}

?>
<br><a href='manipulate.php'>return</a><br/>
