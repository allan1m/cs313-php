<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- 04.After completing the purchase from the checkout page, the 
            user is shown a confirmation page. It should display all the 
            items they have just purchased as well as the address to which 
            it will be shipped.
            Make sure to check for malicious injection, especially from 
            free-entry fields like the address.
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Your order has been confirmed, thank you for shopping with us.</p>
    <p>Order will ship to the following address: </p>
    <!-- PHP for address here -->
    <?PHP

        echo $_SESSION['address'].", " . $_SESSION['city']. ", " .  $_SESSION['state'] . " " . $_SESSION['zip'];

    ?>

    <p>Your order: </p>
    <?php
        if (isset($_SESSION['vegetables'])) {
            
            foreach ($_SESSION['vegetables'] as $key => $value) {
                echo $value. "<br>";
            }
        }
        if (isset($_SESSION['fruit'])) {
            
            foreach ($_SESSION['fruit'] as $key => $value) {
                echo $value. "<br>";
            }
        }
        if (isset($_SESSION['poultry'])) {
            
            foreach ($_SESSION['poultry'] as $key => $value) {
                echo $value. "<br>";
            }
        }
        if (isset($_SESSION['meat'])) {
            
            foreach ($_SESSION['meat'] as $key => $value) {
                echo $value. "<br>";
            }
        }
        if (isset($_SESSION['seafood'])) {
            
            foreach ($_SESSION['seafood'] as $key => $value) {
                echo $value. "<br>";
            }
        }
    ?>
    
</body>
</html>