<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Page</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="username" id="username"><label for="username"> Username </label>
    <input type="text" name="password" id="password"><label for="password"> Password </label>
    <input type="submit" value="submit" name="submit">
</form>
<?php
    require 'db_connect.php';
    $db = get_db();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if(!empty($_POST['password'])){
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            try{
                $query = 'INSERT INTO userLogin(username, password) VALUES(:username, :password)';
                $stmt = $db->prepare($query);
    
                $stmt->bindValue(':username', $username);
                $stmt->bindValue(':password', $hashed_password);
                $stmt->execute();
    
                $newId = $pdo->lastInsertId('userLogin_id_seq');
            }
            catch(Exception $ex){
                echo "Error with DB. Details: $ex";
                die();
            }




        }
    }

?>
</body>
</html>