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
            foreach ($_SESSION['fname'] as $key_one => $value_one) {
                foreach ($_SESSION['lname'] as $key_one => $value_two) {
                    echo $value_one . " " . $value_two;
                }
            }
        }

    ?>
</body>
</html>