<?php 
    include 'basic.php';

    $code = $_POST['recept'];
    $rnumber = $_POST['rnumber'];
    $staff_id = $_SESSION['staff_id'];

    $q_code = $db->quote($code);
    $q_rnumber = $db->quote($rnumber);
    $q_staff_id = $db->quote($staff_id);

    $str = "INSERT INTO task_log (ttime, rnumber, staff_id, tstatus)
            VALUE (NOW()," .$q_rnumber. "," .$q_staff_id. ", 'COMPLAIN.ACT.')";
    $str2 = "DELETE FROM complainment WHERE code =" .$q_code;

    $db->exec($str);
    $db->exec($str2);

    print "<script language=javascript> alert('Complainment is resolved!.'); history.back(); </script>";
    exit;
?>