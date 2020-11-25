<?php 
    include 'basic.php';
    
    $code = $_POST['recept'];
    $selected_staff_id = $_POST['selected_staff'];

    $q_code = $db->quote($code);
    $q_selected_staff_id = $db->quote($selected_staff_id);

    $str = "UPDATE complainment SET recept = 1, staff_id =" .$q_selected_staff_id." WHERE code =" .$q_code;
    $db->exec($str);

    print "<script language=javascript> alert('직원배정이 완료되었습니다.'); location.replace('managerT4.php'); </script>";
    exit;
?>