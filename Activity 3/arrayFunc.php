<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>List of Jobs</h1>

    <?php
    $jobs  = array("670"=>"Manager","667"=>"Analyst","669"=>"Programmer","668"=>"Clerk","671"=>"Admin");

    asort($jobs);

    echo "<select onchange='update()'>";
    foreach ($jobs as $id => $type) {
        echo "<option value='$id'>$type</option>";
    }
    echo "</select>";
    ?>

<h3>Job Id : <span class='id'></span></h3>
<h3>Job Type : <span class='type'></span></h3>

</body>

<script>

const _ = el => document.querySelector(el);
const __ = el => document.querySelectorAll(el);

const select = _('select');

function update(){
    _('.id').innerText = select.options[select.selectedIndex].value;
    _('.type').innerText = select.options[select.selectedIndex].innerText;
}

update();

</script>

</html>
