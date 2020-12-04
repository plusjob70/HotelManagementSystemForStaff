<?php 
    include 'basic.php';

    $rnumber = $_POST['rnumber'];
    $staff_id = $_POST['selected_staff'];
    $q_rnumber = $db->quote($rnumber);
    $q_staff_id = $db->quote($staff_id);

    $str = "UPDATE room SET clean = 1, isEmpty = 0 WHERE rnumber = " .$q_rnumber;
    $str2 = "INSERT INTO cleaning (ttime, rnumber, staff_id)
            VALUE (NOW()," .$q_rnumber. "," .$q_staff_id. ")";

    $db->exec($str);
    $db->exec($str2);

    print "<script language=javascript> alert('Staff has been located for cleaning.'); history.back(); </script>";
    exit;
?>