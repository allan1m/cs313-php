<?php

    session_start();

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

    <a href="dbResults.php">Results</a>
    
    <form action="" method="post">
        <input type="radio" name="employee_info" id="employee_info"><label for="employee_info">Employee</label> <br>
        <input type="radio" name="schedule" id="employee_schedule"><label for="employee_schedule">Employee schedules</label><br>
        <input type="submit" value="submit" name="Submit">
    </form>

    <?php

        $_SESSION['fname'];
        $_SESSION['lname'];
        $_SESSION['pnumber'];
        $_SESSION['address'];


        if (isset($_POST['employee_info'])) {
            try
            {
                $dbUrl = getenv('DATABASE_URL');
        
                $dbOpts = parse_url($dbUrl);
        
                $dbHost = $dbOpts["host"];
                $dbPort = $dbOpts["port"];
                $dbUser = $dbOpts["user"];
                $dbPassword = $dbOpts["pass"];
                $dbName = ltrim($dbOpts["path"],'/');
        
                $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
        
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $ex)
            {
                echo 'Error!: ' . $ex->getMessage();
                die();
            }

        
            foreach ($db->query('SELECT first_name FROM employee') as $row)
            {
                $_SESSION['fname'] = $row['first_name'];
            }
        }
    ?>
    <?php

        if (isset($_POST['schedule'])) {
            try
            {
                $dbUrl = getenv('DATABASE_URL');
        
                $dbOpts = parse_url($dbUrl);
        
                $dbHost = $dbOpts["host"];
                $dbPort = $dbOpts["port"];
                $dbUser = $dbOpts["user"];
                $dbPassword = $dbOpts["pass"];
                $dbName = ltrim($dbOpts["path"],'/');
        
                $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
        
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $ex)
            {
                echo 'Error!: ' . $ex->getMessage();
                die();
            }

        
            foreach ($db->query('SELECT work_date, start_work_time, end_work_time FROM schedule') as $row) {
                    {
                        echo 'Date: ' . $row['work_date'];
                        echo 'Start Time: ' . $row['start_work_time'];
                        echo 'End Time: ' . $row['end_work_time'];
                        echo '<br/>';
                    }
                }
        }
    ?>
</body>
</html>