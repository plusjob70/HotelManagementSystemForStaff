<?php 
    include 'basic.php';

    $code = $_POST['complete'];
    $rnumber = $_POST['rnumber'];
    $staff_id = $_SESSION['staff_id'];

    $q_code = $db->quote($code);
    $q_rnumber = $db->quote($rnumber);
    $q_staff_id = $db->quote($staff_id);
    $str_CLEANING = $db->quote("CLEANING");

    $str = "UPDATE room SET clean = 1, isEmpty = 1 WHERE rnumber = " .$q_rnumber;
    $str2 = "DELETE FROM cleaning WHERE code =" .$q_code;
    $str3 = "INSERT INTO task_log (ttime, rnumber, staff_id, tstatus) 
            VALUE (NOW()," .$q_rnumber. "," .$q_staff_id. "," .$str_CLEANING.")";

    $db->exec($str);
    $db->exec($str2);
    $db->exec($str3);

    print "<script language=javascript> alert('청소를 완료하였습니다.'); location.replace('roomKeeperT1.php'); </script>";
    exit;
?>
