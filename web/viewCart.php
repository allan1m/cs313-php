<?php
    //A session is a way to store information (in variables) to be used 
    //across multiple pages.
    //Unlike a cookie, the information is not stored on the users 
    //computer
    require "viewCartDelete.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--    02. Your browse page should contain a link to view the cart. 
            On the view cart page, the user can see all the items that are 
            in their cart. Provide a way to remove individual items from the 
            cart.
            The view cart page should have a link to return to the browse 
            page for more shopping and a link to continue to the checkout 
            page.
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart | Shopping Cart</title>
</head>
<body>
    <h1>Your Order: </h1>
    <div>
        <!-- PHP for VEGETABLES -->
        <?php       
            //User will be made aware of selected VEGETABLES.
            if (isset($_SESSION['vegetables'])) {
                echo "Vegetable(s): <br>";
                
                //foreach loop implemented this way in order to access values from $_POST array.
                //values contain the data needed in order to pass to checkout.php through $_SESSION.
                foreach ($_SESSION['vegetables'] as $key => $value) {
                    echo $value . "<br>" . "<form action='' method='post'><button name='delete". $key."' value='".$value ."'type='submit'>Remove Item</button></form>";
                    
                    //Here we are passing POST array data to SESSION variable.
                    //$_SESSION['vegetables'] = $_POST['vegetables'];
                    
                }
            } //When $_POST array is empty this if statement will take effect.
            if (empty($_SESSION['vegetables'])) {
                //If NO VEGETABLES are selected, user will be made aware and
                //$_SESSION array will be destroyed.
                if (isset($_SESSION['vegetables'])) {
                    unset($_SESSION['vegetables']);
                }
                echo "No vegetables selected. <br>";
            }
        ?>
    </div>
    <br>
    <br>
    <div>
        <!-- PHP for FRUITS -->
        <?php        
            //User will be made aware of selected FRUIT.
            if (isset($_SESSION['fruit'])) {
                echo "Fruit(s): <br>";
                
                //foreach loop implemented this way in order to access values from $_POST array.
                //values contain the data needed in order to pass to checkout.php through $_SESSION.
                foreach ($_SESSION['fruit'] as $key => $value) {
                    echo $value . "<br>" . "<form action='' method='post'><button name='d". $key."' value='".$value ."'type='submit'>Remove Item</button></form>";
                    
                    //Here we are passing POST array data to SESSION variable.
                    //$_SESSION['vegetables'] = $_POST['vegetables'];
                    
                }
            } //When $_POST array is empty this if statement will take effect.
            if (empty($_SESSION['fruit'])) {
                //If NO FRUITS are selected, user will be made aware and
                //$_SESSION array will be destroyed.
                if (isset($_SESSION['fruit'])) {
                    unset($_SESSION['fruit']);
                }
                echo "No Fruit selected. <br>";
            }
        ?>
    </div>
    <br>
    <br>
    <div>
       <!-- PHP for POULTRY -->
       <?php       
            //User will be made aware of selected POULTRY.
            if (isset($_SESSION['poultry'])) {
                echo "Poultry: <br>";
                
                //foreach loop implemented this way in order to access values from $_POST array.
                //values contain the data needed in order to pass to checkout.php through $_SESSION.
                foreach ($_SESSION['poultry'] as $key => $value) {
                    echo $value . "<br>" . "<form action='' method='post'><button name='del". $key."' value='".$value ."'type='submit'>Remove Item</button></form>";
                                        
                }
            } //When $_POST array is empty this if statement will take effect.
            if (empty($_SESSION['poultry'])) {
                //If NO VEGETABLES are selected, user will be made aware and
                //$_SESSION array will be destroyed.
                if (isset($_SESSION['poultry'])) {
                    unset($_SESSION['poultry']);
                }
                echo "No poultry selected. <br>";
            }
        ?>
    </div>
    <br>
    <br>
    <div>
        <!-- PHP for MEAT -->
        <?php       
            //User will be made aware of selected MEAT.
            if (isset($_SESSION['meat'])) {
                echo "Meat: <br>";
                
                //foreach loop implemented this way in order to access values from $_POST array.
                //values contain the data needed in order to pass to checkout.php through $_SESSION.
                foreach ($_SESSION['meat'] as $key => $value) {
                    echo $value . "<br>" . "<form action='' method='post'><button name='delt". $key."' value='".$value ."'type='submit'>Remove Item</button></form>";
                                        
                }
            } //When $_POST array is empty this if statement will take effect.
            if (empty($_SESSION['meat'])) {
                //If NO MEAT are selected, user will be made aware and
                //$_SESSION array will be destroyed.
                if (isset($_SESSION['meat'])) {
                    unset($_SESSION['meat']);
                }
                echo "No meat selected. <br>";
            }
        ?>
    </div>
    <br>
    <br>
    <div>
        <!-- PHP for SEAFOOD -->
        <?php       
            //User will be made aware of selected SEAFOOD.
            if (isset($_SESSION['seafood'])) {
                echo "Seafood: <br>";
                
                //foreach loop implemented this way in order to access values from $_POST array.
                //values contain the data needed in order to pass to checkout.php through $_SESSION.
                foreach ($_SESSION['seafood'] as $key => $value) {
                    echo $value . "<br>" . "<form action='' method='post'><button name='dlt". $key."' value='".$value ."'type='submit'>Remove Item</button></form>";
                    
                    //Here we are passing POST array data to SESSION variable.
                    //$_SESSION['vegetables'] = $_POST['vegetables'];
                    
                }
            } //When $_POST array is empty this if statement will take effect.
            if (empty($_SESSION['seafood'])) {
                //If NO SEAFOOD are selected, user will be made aware and
                //$_SESSION array will be destroyed.
                if (isset($_SESSION['seafood'])) {
                    unset($_SESSION['seafood']);
                }
                echo "No seafood selected. <br>";
            }
        ?>
    </div>
    <div>
        <p>Continue to checkout: </p>
        <a href="checkout.php"><button id="checkout" class="checkoutButton">Checkout</button></a>
        <a href="browseItems.php"><button id="browse" class="browseButton">Back to Browsing</button></a>
    </div>
</body>
</html>