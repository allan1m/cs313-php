<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Acitivity 05</title>
</head>
<body>
    <form action="" method="post">

    </form>
    <?php
        try
        {
          $dbUrl = getenv('DATABASE_URL');
        
          $dbOpts = parse_url($dbUrl);
        
          $dbHost = $dbOpts["host"];
          $dbPort = $dbOpts["port"];
          $dbUser = $dbOpts["user"];
          $dbPassword = $dbOpts["pass"];
          $dbName = ltrim($dbOpts["path"],'/');
        
          $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
        
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $ex)
        {
          echo 'Error!: ' . $ex->getMessage();
          die();
        }

        
        foreach ($db->query('SELECT first_name, last_name, address, phone_number FROM employee') as $row)
        {
            echo 'Firt Name: ' . $row['first_name'];
            echo ' Last Name: ' . $row['last_name'];
            echo 'Address: ' . $row['address'];
            echo 'Phone Number: ' . $row['phone_number'];
            echo '<br/>';
        }
    ?>
</body>
</html>