<?php


    //VEGETABLES
    if (!empty($_SESSION['vegetables'])) {
        foreach ($_SESSION['vegetables'] as $key => $value) {
            echo $value. "<br>";

            //$_POST['vegetables'] = $_SESSION['vegetables'];
        }
    }
    if (empty($_SESSION['vegetables'])) {
            //If NO VEGETABLES are selected, user will be made aware.
            if (isset($_SESSION['vegetables'])) {
                session_destroy();
            }
            echo "Vegetable(s): <br>";
            echo "No vegetables selected. <br>";
        }
    
    //FRUIT
    if (!empty($_SESSION['fruit'])) {
        foreach ($_SESSION['fruit'] as $key => $value) {
            echo $value. "<br>";
            //$_POST['fruit'] = $_SESSION['fruit'];
        }
    }
    if (empty($_SESSION['fruit'])) {
            //If NO FRUIT are selected, user will be made aware.
            if (isset($_SESSION['fruit'])) {
                session_destroy();
            }
            echo "Vegetable(s): <br>";
            echo "No fruit selected. <br>";
        }
    //POULTRY
    if (!empty($_SESSION['poultry'])) {
        foreach ($_SESSION['poultry'] as $key => $value) {
            echo $value. "<br>";

            //$_POST['poultry'] = $_SESSION['poultry'];
        }
    }
    if (empty($_SESSION['poultry'])) {
            //If NO poultry are selected, user will be made aware.
            if (isset($_SESSION['poultry'])) {
                session_destroy();
            }
            echo "Poultry(s): <br>";
            echo "No poultry selected. <br>";
        }
     //MEAT
     if (!empty($_SESSION['meat'])) {
        foreach ($_SESSION['meat'] as $key => $value) {
            echo $value. "<br>";

            //$_POST['meat'] = $_SESSION['meat'];
        }
    }
    if (empty($_SESSION['meat'])) {
            //If NO meat are selected, user will be made aware.
            if (isset($_SESSION['meat'])) {
                session_destroy();
            }
            echo "Vegetable(s): <br>";
            echo "No meat selected. <br>";
        }
//SEAFOOD
    if (!empty($_SESSION['seafood'])) {
        foreach ($_SESSION['seafood'] as $key => $value) {
            echo $value. "<br>";
            //$_POST['seafood'] = $_SESSION['seafood'];
        }
    }
    if (empty($_SESSION['seafood'])) {
            //If NO seafood are selected, user will be made aware.
            if (isset($_SESSION['seafood'])) {
                session_destroy();
            }
            echo "Vegetable(s): <br>";
            echo "No seafood selected. <br>";
        }

?>