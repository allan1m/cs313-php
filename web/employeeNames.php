<?php

session_start();

require "dbConnect.php";

$db = get_db();

if (empty($_SESSION['fname']) && isset($_POST['employee_name'])) {    

    foreach ($db->query('SELECT first_name, last_name, id FROM employee') as $row)
    {
        $_SESSION['fname'][] = $row['first_name'];
        $_SESSION['lname'][] = $row['last_name'];
        $_SESSION['id'][] = $row['id'];
    }
}

if (empty($_SESSION['address']) && isset($_POST['employee_address'])) {    

    foreach ($db->query('SELECT id, address FROM employee') as $row)
    {
       
        $_SESSION['address_id'][] = $row['id'];
        $_SESSION['address'][] = $row['address'];
    }
}

if (empty($_SESSION['phone_number']) && isset($_POST['employee_phoneNumber'])) {    

    foreach ($db->query('SELECT id, phone_number FROM employee') as $row)
    {
       
        $_SESSION['phone_number_id'][] = $row['id'];
        $_SESSION['phone_number'][] = $row['phone_number'];
    }
}

if (empty($_SESSION['date']) && isset($_POST['work_date'])) {
                   
    foreach ($db->query('SELECT id, work_date, start_work_time, end_work_time, employee_id FROM schedule') as $row) {
            {
                $_SESSION['schedule_id'][] = $row['id'];
                $_SESSION['work_date'][] = $row['work_date'];
                $_SESSION['employee_id'][] = $row['employee_id'];
            }
        }
}

if (empty($_SESSION['employee_shift']) && isset($_POST['employee_shift'])) {
                   
    foreach ($db->query('SELECT id, work_date, start_work_time, end_work_time, employee_id FROM schedule') as $row) {
            {
                $_SESSION['shift_id'][] = $row['id'];
                $_SESSION['start_work_time'][] = $row['start_work_time'];
                $_SESSION['end_work_time'][] = $row['end_work_time'];
                $_SESSION['employee_id'][] = $row['employee_id'];
            }
        }
}

?>