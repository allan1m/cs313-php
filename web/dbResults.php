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
<input type="checkbox" name="" id=""><label for="">$value</label>

<?php
    echo "<div class='wrapper'>";
    if (isset($_SESSION['fname'])) {
        echo "inside first if statement";
        $i = 0;
        $sfname = $_SESSION['fname'];
        $counter = count($sfname);
        echo "Employees: <br>";
        echo "<div id='block1'>";
        while ($i >= $length) {
            echo "inside while loop";
            echo $sfname[$i];
            $i++;
        }
        /*foreach ($_SESSION['fname'] as $key_one => $value) {
            echo "<input"$value . " " . "<br>";
        }*/
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
    <input type="text" id="lname" name="lname"></input>
	<label for="lname">Book</label>
	<br /><br />
    <input type="text" id="fname" name="fname"></input>
	<label for="fname">Book</label>
	<br /><br />
    <input type="text" id="address" name="address"></input>
	<label for="address">Book</label>
	<br /><br />
    <input type="text" id="phnumber" name="phnumber"></input>
	<label for="phnumber">Book</label>
	<br /><br />
    <input type="submit" value="Add to Database" />
</form>
<?php


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo 'if statement';
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $address = $_POST['address'];
        $phnumber = $_POST['phnumber'];
        require "dbConnect.php";
        $db = get_db();
        try{
            echo 'try statement';
            $query = 'INSERT INTO employee(last_name, first_name, address, phone_number) VALUES(:last_name, :first_name, :address, :phone_number)';
            $stmt = $db->prepare($query);
            echo 'insert statement';

            $stmt->bindValue(':last_name', $lname);
            $stmt->bindValue(':first_name', $fname);
            $stmt->bindValue(':address', $address);
            $stmt->bindValue(':phone_number', $phnumber);
            echo 'bindValue';

            $stmt->execute();
            echo 'execute';

            $newId = $pdo->lastInsertId('employee_id_seq');
        }
        catch(Exception $ex){
            echo "Error with DB. Details: $ex";
	        die();
        }
        
    }
    

?>
</div>
</body>
</html>