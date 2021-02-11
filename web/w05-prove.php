<?php
    session_start();
    
    require ('employeeNames.php');
    require ('employeeSchedules.php');
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
        <input type="radio" name="employee_n" id="employee_n"><label for="employee_n">Employee</label> <br>
        <input type="radio" name="schedule" id="employee_schedule"><label for="employee_schedule">Employee schedules</label><br>
        <input type="submit" value="submit" name="Submit">
    </form>
</body>
</html>