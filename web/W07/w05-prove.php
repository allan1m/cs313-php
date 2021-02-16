<?php
    require "queryDB.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="dbresults.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    What would you like to do?

    <a href="dbResults.php">Go To Results</a>
    <div class="container01">
        <form action="" method="post">
            <input type="checkbox" name="employee_name" id="employee_n" class="regular-checkbox"><label for="employee_n">Employee Names</label> <br>
            <input type="checkbox" name="employee_address" id="employee_address" class="regular-checkbox"><label for="employee_address">Employee Address</label> <br>
            <input type="checkbox" name="employee_phone_number" id="employee_phone_number" class="regular-checkbox"><label for="employee_phone_number">Employee Phone Number</label> <br>
            <input type="checkbox" name="work_date" id="work_date"><label for="work_date" class="regular-checkbox">Employee schedule</label><br>
            <input type="checkbox" name="employee_shift" id="employee_shift" class="regular-checkbox"><label for="employee_shift">Employee Shift</label> <br>
            <input type="submit" value="submit" name="Submit">
        </form>
    </div>
</body>
</html>