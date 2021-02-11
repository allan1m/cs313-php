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
    <input type="text" id="employeeName" name="employeeName"></input>
	<label for="employeeName">Book</label>
	<br /><br />
    <input type="submit" value="Add to Database" />
</form>
<?php


    if (!empty($_POST['employeeName'])) {
        $employee_name = $_POST['employeeName'];
        require "dbConnect.php";
        $db = get_db();
        try{
            $sql = 'INSERT INTO employee(last_name, first_name, address, phone_number) VALUES(:last_name, :first_name, :address, :phone_number)';
            $stmt = $db->prepare($sql);

            $stmt->bindValue(':first_name', $employee_Name);

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