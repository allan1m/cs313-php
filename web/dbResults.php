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
        $i = 0;
        $arrayCount = count($_SESSION['fname']);
        
        echo "Employees: <br>";
        echo "<div id='block1'>";

        while ($i < $arrayCount) {
            echo '<input type="checkbox" name="employee_name" id="' . $_SESSION['id'][$i] . '"><label for="">' . $_SESSION["fname"][$i] . " " .  $_SESSION['lname'][$i] . '</label><br>';
            $i++;
        }
        echo "</div>";
        }
    echo "</div>";
    
    echo "<div class='wrapper2'>";
    if (isset($_SESSION['work_date'])) {
        $i=0;
        $arrayCount = count($_SESSION['work_date']);

        echo "Dates worked: <br>";

        while ($i < $arrayCount) {
            echo '<input type="checkbox" name="work_date" id="' . $_SESSION['employee_id'][$i] . '"><label for="">' . $_SESSION["work_date"][$i] . '</label><br>';
            $i++;
        }
        /*foreach ($_SESSION['work_date'] as $key_one => $value) {
            echo $value . "<br>";
        }*/
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
</div>
</body>
</html>