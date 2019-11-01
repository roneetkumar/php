<?php
require_once 'dbconfig.php';
if (!mysqli_connect_errno()) {
    echo "You are connected to $dbname datbase<br/>";
    header("location:manipulate.php");
} else {
    echo "You are connected to $dbname datbase<br/>";
    header("location:errorDatabase.php");
}
