<?php include 'basic.php';
    $db = connectDB();

    $code = $_POST['recept'];
    $staff_id = $_POST['selected_staff'];

    $q_code = $db->quote($code);
    $q_staff_id = $db->quote($staff_id);

    $str = "UPDATE complainment SET recept = 1, staff_id =" .$q_staff_id." WHERE code =" .$q_code;
    $db->exec($str);

    print "<script language=javascript> alert('직원배정이 완료되었습니다.'); location.replace('managerMain.php'); </script>";
    exit;
?>