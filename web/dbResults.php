<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="dbresults.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Results</title>
</head>
<body>

    <a href="w05-prove.php">Home</a>
    <a href="insertDb.php">Add Employee</a>

<?php
    echo "<div class='container'>";
        if (isset($_SESSION['fname'])) {
            $i = 0;
            $arrayCount = count($_SESSION['fname']);
        
            echo "Employees: <br>";
            echo "<div id='item'>";

            while ($i < $arrayCount) {
                echo '<input type="checkbox" name="employee_name" id="' . $_SESSION['id'][$i] . '"><label for="">' . $_SESSION["fname"][$i] . " " .  $_SESSION['lname'][$i] . '</label><br>';
                $i++;
            }
            echo "</div>";
        }
    
    
    if (isset($_SESSION['address'])) {
        $i = 0;
        $arrayCount = count($_SESSION['address']);
    
        echo "Address: <br>";
        echo "<div id='item'>";

        while ($i < $arrayCount) {
            echo $_SESSION["address"][$i] . '<br>';
            $i++;
        }
        echo "</div>";
    }

    
    if (isset($_SESSION['phone_number'])) {
        $i = 0;
        $arrayCount = count($_SESSION['phone_number']);
    
        echo "Phone Number: <br>";
        echo "<div id='item'>";

        while ($i < $arrayCount) {
            echo $_SESSION["phone_number"][$i] . '<br>';
            $i++;
        }
        echo "</div>";
        }


   
        if (isset($_SESSION['work_date'])) {
            $i=0;
            $arrayCount = count($_SESSION['work_date']);

            echo "Dates worked: <br>";
            echo "<div id=item>";

            while ($i < $arrayCount) {
                echo $_SESSION["work_date"][$i] . '<br>';
                $i++;
            }
            echo "</div>";
        }

    
    if (isset($_SESSION['start_time'])) {
        $i = 0;
        $arrayCount = count($_SESSION['work_date']);
    
        echo "Shift: <br>";
        echo "<div id='item'>";

        while ($i < $arrayCount) {
            echo $_SESSION["start_time"][$i] . ' - ' . $_SESSION['end_time'][$i] . '<br>';
            $i++;
        }
        echo "</div>";
        }
    echo "</div>";

?>
</div>
</body>
</html>