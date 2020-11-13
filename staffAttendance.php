<?php 
    include 'basic.php';
    session_start();
    
    $db = connectDB();
    $code = $_POST['attendance'];
    $staff_id = $_SESSION['staff_id'];
    $q_staff_id = $db->quote($staff_id);

    function participate(){
        global $db, $q_staff_id;
        $db->exec("UPDATE staff_info SET attendance = 1 WHERE id =" .$q_staff_id);    
    }

    function leave(){
        global $db, $q_staff_id;
        $db->exec("UPDATE staff_info SET attendance = 0 WHERE id =" .$q_staff_id);

    }

    if ($code == 't'){participate();}
    else if ($code == 'f') {leave();}
    
    header("Location:".$_SERVER['HTTP_REFERER']);
?>