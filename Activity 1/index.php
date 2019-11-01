<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    form{
        width: max-content;
        display: block;
        margin: auto;
    }
</style>
<body>
<form action="#" method="get">
    <label >Temprature Convertion</label><br><br>
    <label for="">Temprature C : </label>
    <input type="number" name="celcius">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="">

    <?php
if (isset($_GET['celcius'])) {
    $inCelcius = $_GET['celcius'];
    $inFer = $inCelcius * 9 / 5 + 32;
    echo "Temprature in Fahrenheit : <b>$inFer</b>";
} else {
    echo "Please enter the value";
}
?>

    </label><br><br>
    <input type="submit" value="OK" name="submit">

</form>
</body>
</html>
