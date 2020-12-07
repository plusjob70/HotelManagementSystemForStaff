<?php 
    $db = new PDO("mysql:dbname=hotel; host=localhost; port=3306", "root", "root");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $code = $_POST['staffSignUp'];
    $staff_id = $_POST['staff_id'];
    $q_staff_id = $db->quote($staff_id);

    function accept(){
        global $db, $q_staff_id;
        $db->exec("UPDATE staff SET accept = 1 WHERE id =" .$q_staff_id);    
    }

    function reject(){
        global $db, $q_staff_id;
        $db->exec("DELETE FROM staff WHERE id = " .$q_staff_id);

    }

    if ($code == 't'){
        accept();
        print "<script language=javascript> alert('Registration request has been accepted.'); history.back(); </script>";
    }else if ($code == 'f') {
        reject();
        print "<script language=javascript> alert('Registration request has benn declined.'); history.back(); </script>";
    }
    exit;
?>