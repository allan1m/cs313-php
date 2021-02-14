<?php
    require "employeeNames.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    What would you like to do?

    <a href="dbResults.php">Go To Results</a>
    
    <form action="" method="post">
        <input type="checkbox" name="employee_name" id="employee_n"><label for="employee_n">Employee Names</label> <br>
        <input type="checkbox" name="employee_address" id="employee_address"><label for="employee_address">Employee Info</label> <br>
        <input type="checkbox" name="employee_phone_number" id="employee_phone_number"><label for="employee_phone_number">Employee Info</label> <br>
        <input type="checkbox" name="work_date" id="work_date"><label for="work_date">Employee schedule</label><br>
        <input type="checkbox" name="employee_shift" id="employee_shift"><label for="employee_shift">Employee</label> <br>
        <input type="submit" value="submit" name="Submit">
    </form>
</body>
</html>