<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" method="get">
    <table>
    <tr>
        <td><label for="">Employee Id: </label></td>
        <td><input type="text" name="id" required></td>
    </tr>
    <tr>
        <td><label for="">Last Name: </label></td>
        <td> <input type="text" name="name" required></td>
    </tr>
    <tr>
        <td><label for="">Gross Salary: </label></td>
        <td> <input type="text" name="salary" required></td>
    </tr>
    <tr>
        <td colspan=2>
        <br>
        <input type="submit" value="Save" name="submit"></td>
    </tr>

    </table>
    </form>
    <br>
    <hr>
    <br>

    <?php
    include "grossSalary.php";


    echo "
    <table style='display:$display;'>
    <tr>
        <td>Employee ID:</td>
        <td>$id</td>
    </tr>
    <tr>
        <td>Last Name: </td>
        <td>$name</td>
    </tr>
    <tr>
        <td>Gross Salary: </td>
        <td>$$salary</td>
    </tr>
    <tr>
        <td>Tax (%): </td>
        <td>$tax%</td>
    </tr>
    <tr>
        <td>Amount of tax: </td>
        <td>$$amountOfTax</td>
    </tr>
    <tr>
        <td>Net Salary: </td>
        <td>$$netSalary</td>
    </tr>
    </table>";
    ?>
</body>


<style>

*{
    font-family: Roboto
}

form,table{
        width: max-content;
        display: block;
        margin: auto;
        font-size: 20px
}

input[type='submit']{
    width: 100%;
}

</style>
</html>
