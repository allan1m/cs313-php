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

        //var_dump($_SESSION['fname']);

        if (isset($_SESSION['fname'])) {
            
            echo $_SESSION['fname'];
        }

    ?>
</body>
</html>