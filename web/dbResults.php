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
    <?php

        echo "VAR DUMP: " . var_dump($_SESSION['fname']) . "<br>";
        echo "PRINT R: " . print_r($_SESSION['fname']) . "<br>";
        if (isset($_SESSION['fname']) || isset($_SESSION['lname'])) {
            echo "The following is a list of employees: <br>";
            foreach ($_SESSION['fname'] as $key_one => $value) {
                echo $value . "<br>";
            }
        }

        if (isset($_SESSION['date'])) {
            echo "The following dates indicated when business was operating: <br>";
            foreach ($_SESSION['date'] as $key_one => $value) {
                echo $value . "<br>";
            }
        }

    ?>
</body>
</html>