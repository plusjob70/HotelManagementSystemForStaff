<?php
    include 'basic.php';
    session_start();
    $db = connectDB();

    $rnumber = $_POST['checkin'];
    $staff_id = $_SESSION['staff_id'];

    $q_rnumber = $db->quote($rnumber);
    $q_staff_id = $db->quote($staff_id);
    $q_checkin = $db->quote("CHECKIN");

    $str = "UPDATE room SET isEmpty = 0 WHERE rnumber = ".$q_rnumber;
    $str2 = "INSERT INTO task_log (ttime, rnumber, staff_id, tstatus)
             VALUE (NOW()," .$q_rnumber. "," .$q_staff_id. "," .$q_checkin. ")";
    $db->exec($str);
    $db->exec($str2);

    print "<script language=javascript> alert('체크인 되었습니다.'); location.replace('receptionistMain.php'); </script>";
    exit;

?>