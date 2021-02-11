<?php

require ('dbConnect.php');

$db = get_db();

if (empty($_SESSION['date']) && isset($_POST['schedule'])) {
                   
    foreach ($db->query('SELECT work_date FROM schedule') as $row) {
            {
                $_SESSION['date'][] = $row['work_date'];
            }
        }
}

?>