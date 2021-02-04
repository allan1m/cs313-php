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

        if (isset($_SESSION['fname'])) {
            foreach ($_SESSION['fname'] as $key => $value) {
                echo $value;
            }
        }

    ?>
</body>
</html>