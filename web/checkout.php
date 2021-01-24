<?php
    //A session is a way to store information (in variables) to be used 
    //across multiple pages.
    //Unlike a cookie, the information is not stored on the users 
    //computer
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--    03. The checkout page should ask the user for the different 
            components of their address. (No credit card or other purchase 
            information is collected, only an address.)
            It should have the option to complete the purchase or return to 
            the cart.
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p class="complete-order">In order to complete your order, please fill out the following with your address: </p>
    <?php
        $address = $city = $state = $zip = "";
        $addressErr = $cityErr = $stateErr = $zipErr = "";

        $valid = true;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["address"]) || empty($_POST['city']) || empty($_POST['state'] || empty(['zip']))) {
                $valid = false;
                $addressErr = "Address is required";
                $cityErr = "City is required";
                $stateErr = "State is required";
                $zipErr = "Zip is requried";

            }
            if (isset($_POST['address']) && isset($_POST['city']) && isset($_POST['state']) && isset($_POST['zip'])) {
                $address = test_input($_POST["address"]);
                $city = test_input($_POST["city"]);
                $state = test_input($_POST["state"]);
                $zip = test_input($_POST["zip"]);
                
                $_SESSION["address"] = $_POST['address'];
                $_SESSION["city"] = $_POST['city'];
                $_SESSION["state"] = $_POST['state'];
                $_SESSION["zip"] = $_POST['zip'];
            }

            if ($valid) {
                header('location: confirmation.php');
                exit();

            }
        }
        
        function test_input($data) {
            //Strip unnecessary characters (extra space, tab, newline) from the 
            //user input data (with the PHP trim() function)
            //Remove backslashes (\) from the user input data (with the PHP stripslashes() function)
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    

    <?php
        require "checkoutSession.php";
    ?>
    <form action="" method="post">
        <p>Address: </p><input type="text" name="address" id="address" value="<?php echo htmlspecialchars($address); ?>">
        <span><?php echo $addressErr;?></span>
        <p>City: </p><input type="text" name="city" id="city" value="<?php echo htmlspecialchars($city);?>">
        <span><?php echo $cityErr;?></span>
        <p>State: </p><input type="text" name="state" id="state" value="<?php echo htmlspecialchars($state);?>">
        <span><?php echo $stateErr;?></span>
        <p>Zip: </p><input type="text" name="zip" id="zip" value="<?php echo htmlspecialchars($zip);?>">
        <span><?php echo $zipErr;?></span>

        <p class="confirm-order">Click confirm to complete your order</p>
        <input type="submit" name="submit" value="confirm">
    </form>
    <a href="viewCart.php"><button id="home" class="homeButton">View Cart</button></a>
    
</body>
</html>