<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Activity 06</title>
</head>
<body>

<form action="" method="post">
    <input type="radio" name="script" id="script"><label for="script">Script</label>
    <input type="submit" value="submit" name="Submit">
</form>

<?php

    if (isset($_POST['script'])) {
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
        
        foreach ($db->query('SELECT book, chapter, verse, content password FROM scriptures') as $row)
        {
            echo 'Book: ' . $row['book'];
            echo 'Chapter: ' . $row['chapter'];
            echo 'Verse: ' . $row['verse'];
            echo 'Content: ' . $row['content'];
            echo '<br>';
        }
}

?>
    
</body>
</html>
