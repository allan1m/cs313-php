<?php

session_start();
//User will be made aware of selected VEGETABLES.
if (isset($_POST['vegetables'])) {
    //echo "Vegetable(s): <br>";
                
    //foreach loop implemented this way in order to access values from $_POST array.
    //values contain the data needed in order to pass to checkout.php through $_SESSION.
    foreach ($_POST['vegetables'] as $key => $value) {
        //echo $key ."" . $value . "<br>";
                    
        //Here we are passing POST array data to SESSION variable.
        $_SESSION['vegetables'] = $_POST['vegetables'];
                    
    }
} //When $_POST array is empty this if statement will take effect.
if (!isset($_POST['vegetables'])) {
    //If NO VEGETABLES are selected, but if previous session ISSET() then
    //keep isset() values
    if (isset($_SESSION['vegetables'])) {
        foreach ($_SESSION as $key => $value) {
            $_SESSION['vegetables'] = $_SESSION['vegetables'];
        }
    }
}
?> 
<?php
//User will be made aware of selected FRUITS.
if (isset($_POST['fruit'])) {
    //echo "Fruit(s): <br>";
                
    //foreach loop implemented this way in order to access values from $_POST array.
    //values contain the data needed in order to pass to checkout.php through $_SESSION.
    foreach ($_POST['fruit'] as $key => $value) {
        //echo $key ."" . $value . "<br>";
                    
        //Here we are passing POST array data to SESSION variable.
        $_SESSION['fruit'] = $_POST['fruit'];
                    
    }
} //When $_POST array is empty this if statement will take effect.
if (!isset($_POST['fruit'])) {
    //If NO FRUIT are selected, but if previous session ISSET() then
    //keep isset() values
    if (isset($_SESSION['fruit'])) {
        foreach ($_SESSION['fruit'] as $key => $value) {
            $_SESSION['fruit'] = $_SESSION['fruit'];
        }
    }
}
?>
<?php
//User will be made aware of selected POULTRY.
if (isset($_POST['poultry'])) {
    //echo "Fruit(s): <br>";
                
    //foreach loop implemented this way in order to access values from $_POST array.
    //values contain the data needed in order to pass to checkout.php through $_SESSION.
    foreach ($_POST['poultry'] as $key => $value) {
        //echo $key ."" . $value . "<br>";
                    
        //Here we are passing POST array data to SESSION variable.
        $_SESSION['poultry'] = $_POST['poultry'];
                    
    }
} //When $_POST array is empty this if statement will take effect.
if (!isset($_POST['poultry'])) {
    //If NO POULTRY are selected, but if previous session ISSET() then
    //keep isset() values
    if (isset($_SESSION['poultry'])) {
        foreach ($_SESSION['poultry'] as $key => $value) {
            $_SESSION['poultry'] = $_SESSION['poultry'];
        }
    }
}
?>
<?php
//User will be made aware of selected MEAT.
if (isset($_POST['meat'])) {
    //echo "Meat(s): <br>";
                
    //foreach loop implemented this way in order to access values from $_POST array.
    //values contain the data needed in order to pass to checkout.php through $_SESSION.
    foreach ($_POST['meat'] as $key => $value) {
        //echo $key ."" . $value . "<br>";
                    
        //Here we are passing POST array data to SESSION variable.
        $_SESSION['meat'] = $_POST['meat'];
                    
    }
} //When $_POST array is empty this if statement will take effect.
if (!isset($_POST['meat'])) {
    //If NO MEAT are selected, but if previous session ISSET() then
    //keep isset() values
    if (isset($_SESSION['meat'])) {
        foreach ($_SESSION['meat'] as $key => $value) {
            $_SESSION['meat'] = $_SESSION['meat'];
        }
    }
}
?>
<?php
//User will be made aware of selected SEAFOOD.
if (isset($_POST['seafood'])) {
    //echo "Meat(s): <br>";
                
    //foreach loop implemented this way in order to access values from $_POST array.
    //values contain the data needed in order to pass to checkout.php through $_SESSION.
    foreach ($_POST['seafood'] as $key => $value) {
        //echo $key ."" . $value . "<br>";
                    
        //Here we are passing POST array data to SESSION variable.
        $_SESSION['seafood'] = $_POST['seafood'];
                    
    }
} //When $_POST array is empty this if statement will take effect.
if (!isset($_POST['seafood'])) {
    //If NO SEAFOOD are selected, but if previous session ISSET() then
    //keep isset() values
    if (isset($_SESSION['seafood'])) {
        foreach ($_SESSION['seafood'] as $key => $value) {
            $_SESSION['seafood'] = $_SESSION['seafood'];
        }
    }
}
?> 