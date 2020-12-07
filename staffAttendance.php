<?php 
    session_start();

    $db = new PDO("mysql:dbname=hotel; host=localhost; port=3306", "root", "root");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $code = $_POST['attendance'];
    $staff_id = $_SESSION['staff_id'];
    $q_staff_id = $db->quote($staff_id);

    function participate(){
        global $db, $q_staff_id;
        $db->exec("UPDATE staff SET attendance = 1 WHERE id =" .$q_staff_id);    
    }

    function leave(){
        global $db, $q_staff_id;
        $db->exec("UPDATE staff SET attendance = 0 WHERE id =" .$q_staff_id);

    }

    if ($code == 't'){participate();}
    else if ($code == 'f') {leave();}
    
    header("Location:".$_SERVER['HTTP_REFERER']);
?>