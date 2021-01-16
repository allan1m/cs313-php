<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="intro.css?Friday 15th January 2021">
    <script src="intro.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Allan Marina">
    <title>Introduction</title>
</head>
<body >
<div class="bg">
    <div>
        <header>
            <h1>All Hikes</h1>
        </header>
    </div>
    <main class="container">
        <div class="box-1">
            <a href="index.php"><button id="Btn" class="dropdownButton">Home</button></a>
        </div>
        <div class="box-2">
            <button id="Btn-a" class="dropdownButton" onmouseover="getHikingInfo()">About</button>
                <div id="dropMenu" class="dropdown-content">
                    <a href="#home">View trails</a>
                    <a href="#about">View scenery</a>
                    <a href="#contact">View gear</a>
                </div>
        </div>
    </main>
</div>
<footer class="footer">
    <?php
        echo date("m/d/Y") . " " . date("h:i:sa");
    ?>
</footer>   
</body>
</html>