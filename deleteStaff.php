<?php 
    $db = new PDO("mysql:dbname=HMS; host=localhost; port=3306", "root", "a12345");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $staff_id = $_POST['staff_id'];
    $q_staff_id = $db->quote($staff_id);
    $db->exec("DELETE FROM staff WHERE id = " .$q_staff_id);

    print "<script language=javascript> alert('Staff information has been removed.'); history.back(); </script>";
    exit;
?>