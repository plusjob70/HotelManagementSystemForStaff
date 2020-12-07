<?php
    session_start();
    
    $db = new PDO("mysql:dbname=hotel; host=localhost; port=3306", "root", "root");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $staff_id = $_SESSION['staff_id'];
    $staff_name = $_SESSION['staff_name'];
    
    $q_staff_id = $db->quote($staff_id);

    $stmt_s = $db->query("SELECT attendance FROM staff WHERE id = " .$q_staff_id);
    $result_s = $stmt_s->fetchAll();

?>