<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Results</title>
</head>
<body>

<a href="w05-prove.php">Query selection</a>

<div class="employee_info">
    <?php
        if (isset($_SESSION['fname'])) {
            echo "Employees: <br>";
            while (!empty($_SESSION['fname'] && !empty($_SESSION['lname']))) {
                echo $_SESSION['fname'] . $_SESSION['lname'] . "<br>";
            }
        }
    ?>
</div>
<div class="employee_schedule">
    <?php
        if (isset($_SESSION['date'])) {
            echo "Dates worked: <br>";
            foreach ($_SESSION['date'] as $key_one => $value) {
                echo $value . "<br>";
            }
        }

    ?>
</div>
</body>
</html>