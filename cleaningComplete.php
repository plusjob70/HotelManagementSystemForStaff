<?php 
    include 'basic.php';
    $db = connectDB();
    session_start();

    $code = $_POST['complete'];
    $rnumber = $_POST['rnumber'];
    $staff_id = $_SESSION['staff_id'];

    $q_code = $db->quote($code);
    $q_rnumber = $db->quote($rnumber);
    $q_staff_id = $db->quote($staff_id);
    $str_CLEANING = $db->quote("CLEANING");

    $str = "DELETE FROM cleaning WHERE code =" .$q_code;
    $str2 = "INSERT INTO task_log (ttime, rnumber, staff_id, tstatus) 
            VALUE (NOW()," .$q_rnumber. "," .$q_staff_id. "," .$str_CLEANING.")";
    $db->exec($str);
    $db->exec($str2);

    print "<script language=javascript> alert('청소를 완료하였습니다.'); location.replace('roomKeeperMain.php'); </script>";
    exit;
?>
