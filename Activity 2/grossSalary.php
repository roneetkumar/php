<?php
    $id = $_GET['id'];
    $name = $_GET['name'];
    $salary = $_GET['salary'];
    $tax = 0;
    $amountOfTax = 0;
    $netSalary = 0;
    $display = 'none';

    if($salary >= 50000){
        $tax = 45;
    }elseif ($salary >= 40000) {
        $tax = 40;
    }elseif ($salary >= 30000) {
        $tax = 35;
    }elseif ($salary >= 25000) {
        $tax = 30;
    }else{
        $tax = 20;
    }

    $amountOfTax = $salary * $tax / 100;

    function grossSalary($salary,$amountOfTax){
        return $salary - $amountOfTax;
    }

    $netSalary = grossSalary($salary,$amountOfTax);

    if($id != '' ){
        $display = 'block';
    }

?>
