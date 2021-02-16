<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="dbResults.php">Back to Results</a>
<br>
<form action="" method="post">
    <input type="text" id="lname" name="lname"></input>
	<label for="lname">Last Name</label>
	<br /><br />
    <input type="text" id="fname" name="fname"></input>
	<label for="fname">First Name</label>
	<br /><br />
    <input type="text" id="address" name="address"></input>
	<label for="address">Address</label>
	<br /><br />
    <input type="text" id="phnumber" name="phnumber"></input>
	<label for="phnumber">Phone Number</label>
	<br /><br />
    <input type="submit" value="Add to Database" />
</form>
<?php


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $address = $_POST['address'];
        $phnumber = $_POST['phnumber'];
        require "dbConnect.php";
        $db = get_db();
        try{
            $query = 'INSERT INTO employee(last_name, first_name, address, phone_number) VALUES(:last_name, :first_name, :address, :phone_number)';
            $stmt = $db->prepare($query);

            $stmt->bindValue(':last_name', $lname);
            $stmt->bindValue(':first_name', $fname);
            $stmt->bindValue(':address', $address);
            $stmt->bindValue(':phone_number', $phnumber);
            $stmt->execute();

            $newId = $pdo->lastInsertId('employee_id_seq');
        }
        catch(Exception $ex){
            echo "Error with DB. Details: $ex";
	        die();
        }
        
    }
?>
</body>
</html>