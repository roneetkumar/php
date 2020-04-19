<?php
require_once "dbconfig.php";
require_once "Teacher.php";

function printMenu()
{
    echo "
        <table>

        </table>
    ";
}

echo "Hello World<br>";

try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $t1 = new Teacher();
    // $t1->setTeacherID(1001);

    // $result = $t1->delete($connection);

    // if ($result == true) {
    //     echo "one row is deleted sucessfully";
    // } else {
    //     $error = $connection->errorInfo();
    //     echo $error[2] . "<br>";
    // }

    // $t1->displayAllTeachers($connection);

    $t1->setTeacherID(1001);

    $t1 = $t1->getTeacherByID($connection);

    echo Teacher::getHeader();

    echo $t1;
    echo Teacher::getFooter();

} catch (SQLExecption $error) {
    echo $connection->Error[2];
}
