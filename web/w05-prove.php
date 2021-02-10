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

    <a href="dbResults.php">Go To Results</a>
    
    <form action="" method="post">
        <input type="radio" name="employee_n" id="employee_n"><label for="employee_n">Employee</label> <br>
        <input type="radio" name="schedule" id="employee_schedule"><label for="employee_schedule">Employee schedules</label><br>
        <input type="submit" value="submit" name="Submit">
    </form>

    <?php
        if (empty($_SESSION['fname']) && isset($_POST['employee_n'])) {
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
                $_SESSION['fname'][] = $row['first_name'];
            }
        }
    ?>
    <?php

        if (empty([$_SESSION['date']]) && isset($_POST['schedule'])) {
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

        
            foreach ($db->query('SELECT work_date FROM schedule') as $row) {
                    {
                        $_SESSION['date'][] = $row['work_date'];
                    }
                }
        }
    ?>
</body>
</html>