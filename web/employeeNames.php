<?php

session_start();

require "dbConnect.php";

$db = get_db();

if (empty($_SESSION['fname']) && isset($_POST['employee_n'])) {    

    foreach ($db->query('SELECT first_name, last_name, id, address, phone_number FROM employee') as $row)
    {
        $_SESSION['fname'][] = $row['first_name'];
        $_SESSION['lname'][] = $row['last_name'];
        $_SESSION['id'][] = $row['id'];
        $_SESSION['address'][] = $row['address'];
        $_SESSION['phone_number'][] = $row['phone_number'];
    }
}

if (empty($_SESSION['date']) && isset($_POST['schedule'])) {
                   
    foreach ($db->query('SELECT id, work_date, start_work_time, end_work_time, employee_id FROM schedule') as $row) {
            {
                $_SESSION['id'][] = $row['id'];
                $_SESSION['work_date'][] = $row['work_date'];
                $_SESSION['start_work_time'][] = $row['start_work_time'];
                $_SESSION['end_work_time'][] = $row['end_work_time'];
                $_SESSION['employee_id'][] = $row['employee_id'];
            }
        }
}

?>