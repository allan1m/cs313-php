<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="dbresults.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Results</title>
</head>
<body>
<div>
    <a href="w05-prove.php">Query selection</a>
</div>

<?php
    echo "<div class='wrapper'>";
    if (isset($_SESSION['fname'])) {
        echo "Employees: <br>";
        echo "<div id='block1'>";
        foreach ($_SESSION['fname'] as $key_one => $value) {
            echo $value . " " . "<br>";
        }
        echo "</div>";
            
        echo "<div id='block2'>";
        foreach ($_SESSION['lname'] as $key => $value) {
            echo " " . $value . "<br>";
        }
        echo "</div>";
        }
    echo "</div>";
?>
<?php
    echo "<div class='wrapper2'>";
    if (isset($_SESSION['date'])) {
        echo "Dates worked: <br>";
        foreach ($_SESSION['date'] as $key_one => $value) {
            echo $value . "<br>";
        }
    }
    echo "</div>";

?>

<form action="" method="post">
    <input type="hidden" name="name_id" value="name_id">
	<textarea name="name_content"></textarea>
	<input type="submit" value="Create Note">
</form>
</div>
</body>
</html>