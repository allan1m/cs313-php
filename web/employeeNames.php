<?php

session_start();

require "dbConnect.php";

$db = get_db();

if (empty($_SESSION['fname']) && isset($_POST['employee_n'])) {    

    foreach ($db->query('SELECT id, first_name, last_name, FROM employee') as $row)
    {
        //$_SESSION['id'][] = $row['id'];
        $_SESSION['fname'][] = $row['first_name'];
        $_SESSION['lname'][] = $row['last_name'];
    }
}

if (empty($_SESSION['date']) && isset($_POST['schedule'])) {
                   
    foreach ($db->query('SELECT work_date FROM schedule') as $row) {
            {
                $_SESSION['date'][] = $row['work_date'];
            }
        }
}

?>