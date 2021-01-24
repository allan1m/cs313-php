<?php
    //A session is a way to store information (in variables) to be used 
    //across multiple pages.
    //Unlike a cookie, the information is not stored on the users 
    //computer
    //session_start();
    require "browseSession.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--	01. Browse Items
			On the browse items page, the user sees a list of items they 
			can add to their cart and purchase. Again, the kind of items 
            and the formatting of this page is up to you.
            You should provide a button or link to add an item to 
			the cart. Doing so should store that item in some way to 
			the session, and then keep the user on the browse page.
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BROWSE ITEMS | Shopping Cart</title>
</head>
<body>
<?php
    //print_r($_SESSION['vegetables']);
    //print_r($_SESSION['fruit']);
    //print_r($_SESSION['poultry']);
    //print_r($_SESSION['meat']);
    //print_r($_SESSION['seafood']);
?>
    <h1>Place your order: </h1>
    <a href="viewCart.php">View Cart</a>
    <div class="container">
        <form action="" method="post">
            <h2>Vegetables</h2>
            <br>
            <input type="checkbox" name="vegetables[0]" id="veggie-art" value="Artichoke" ><label for="veggie-art">Artichoke</label><br />
            <input type="checkbox" name="vegetables[1]" id="veggie-asp" value="Asparagus"><label for="veggie-asp">Asparagus</label><br />
            <input type="checkbox" name="vegetables[2]" id="veggie-bt" value="Beet"><label for="veggie-bt">Beet</label><br />
            <input type="checkbox" name="vegetables[3]" id="veggie-brc" value="Broccoli"><label for="veggie-brc">Broccoli</label><br />
            <input type="checkbox" name="vegetables[4]" id="veggie-crt" value="Carrots"><label for="veggie-crt">Carrot</label><br />
            <input type="checkbox" name="vegetables[5]" id="veggie-cly" value="Cilantro"><label for="veggie-cly">Celery</label><br />
            <input type="checkbox" name="vegetables[6]" id="veggie-chpp" value="Chili Peppers"><label for="veggie-chpp">Chili Peppers</label>
            <br>
            <h2>Fruit</h2>
            <input type="checkbox" name="fruit[]" id="fruit-app" value="Apple"><label for="fruit-app">Apple</label><br />
            <input type="checkbox" name="fruit[]" id="fruit-avo" value="Avocado"><label for="fruit-avo">Avocado</label><br />
            <input type="checkbox" name="fruit[]" id="fruit-bnn" value="Banana"><label for="fruit-bnn">Banana</label><br />
            <input type="checkbox" name="fruit[]" id="fruit-coco" value="Coconut"><label for="fruit-coco">Coconut</label><br />
            <input type="checkbox" name="fruit[]" id="fruit-chr" value="Cherries"><label for="fruit-chr">Cherries</label><br />
            <input type="checkbox" name="fruit[]" id="fruit-grp" value="Grapes"><label for="fruit-grp">Grapes</label><br />
            <input type="checkbox" name="fruit[]" id="fruit-mng" value="Mango"><label for="fruit-mng">Mango</label><br />
            <br>
            <h2>Poultry</h2>
            <input type="checkbox" name="poultry[]" id="poultry-chk" value="Chicken"><label for="poultry-chk">Chicken</label><br />
            <input type="checkbox" name="poultry[]" id="poultry-dck" value="Duck"><label for="poultry-dck">Duck</label><br />
            <input type="checkbox" name="poultry[]" id="poultry-gee" value="Geese"><label for="poultry-gee">Geese</label><br />
            <input type="checkbox" name="poultry[]" id="poultry-trk" value="Turkey"><label for="poultry-trk">Turkey</label><br />
            <br>
            <h2>Meat</h2>
            <input type="checkbox" name="meat[]" id="meat-bf" value="Beef"><label for="meat-bf">Beef</label><br />
            <input type="checkbox" name="meat[]" id="meat-pk" value="Pork"><label for="meat-pk">Pork</label><br />
            <input type="checkbox" name="meat[]" id="meat-lm" value="Lamb"><label for="meat-lm">Lamb</label><br />
            <input type="checkbox" name="meat[]" id="meat-gt" value="Goat"><label for="meat-gt">Goat</label><br />
            <br>
            <h2>Seafood</h2>
            <input type="checkbox" name="seafood[]" id="seafood-plk" value="Pollock"><label for="seafood-plk">Pollock</label><br />
            <input type="checkbox" name="seafood[]" id="seafood-ctf" value="Catfish"><label for="seafood-ctf">Catfish</label><br />
            <input type="checkbox" name="seafood[]" id="seafood-tlp" value="Tilapia"><label for="seafood-tlp">Tilapia</label><br />
            <input type="checkbox" name="seafood[]" id="seafood-slm" value="Salmon"><label for="seafood-slm">Salmon</label><br />
            <input type="checkbox" name="seafood[]" id="seafood-shr" value="Shrimp"><label for="seafood-shr">Shrimp</label><br />
            <br>
            <input type="submit" name="submit" value="add to order">
        </form>
    </div>   
</body>
</html>