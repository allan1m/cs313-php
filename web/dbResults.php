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

<div>
    <?php
        if (isset($_SESSION['fname'])) {
            echo "The following is a list of employees: <br>";
            foreach ($_SESSION['fname'] as $key_one => $value) {
                echo $value . "<br>";
            }
        }
    ?>
</div>
<div>
    <?php
        var_dump($_SESSION['date']);
        if (isset($_SESSION['date'])) {
            echo "The following dates indicated when business was operating: <br>";
            foreach ($_SESSION['date'] as $key_one => $value) {
                echo $value . "<br>";
            }
        }

    ?>
</div>
</body>
</html>