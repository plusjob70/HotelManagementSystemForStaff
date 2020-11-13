<?php
    try{
        include 'basic.php';
        session_start();
        $db = connectDB();

        $code = $_POST['code'];
        $id = $_POST['id'];
        $cname = $_POST['cname'];
        $rnumber = $_POST['rnumber'];
        $phone = $_POST['phone'];
        $checkIn = $_POST['checkIn'];
        $checkOut = $_POST['checkOut'];
        $staff_id = $_SESSION['staff_id'];

        $q_code = $db->quote($code);
        $q_id = $db->quote($id);
        $q_cname = $db->quote($cname);
        $q_rnumber = $db->quote($rnumber);
        $q_phone = $db->quote($phone);
        $q_checkIn = $db->quote($checkIn);
        $q_checkOut = $db->quote($checkOut);
        $q_staff_id = $db->quote($staff_id);
        $str_CHECKOUT = $db->quote("CHECKOUT");

        $str = "UPDATE room SET isEmpty = 1, clean = 0 WHERE rnumber = ".$q_rnumber;
        $str2 = "INSERT INTO task_log (ttime, rnumber, staff_id, tstatus)
                VALUE (NOW()," .$q_rnumber. "," .$q_staff_id. "," .$str_CHECKOUT.")";
        $str3 = "INSERT INTO customer_log (code, id, cname, rnumber, phone, checkIn, checkOut)
                VALUE (" .$q_code. "," .$q_id. "," .$q_cname. "," .$q_rnumber. "," .$q_phone. "," .$q_checkIn. "," .$q_checkOut.")";
        $str4 = "DELETE FROM reservation WHERE code =" .$q_code;
        $db->exec($str);
        $db->exec($str2);
        $db->exec($str3);
        $db->exec($str4);

        print "<script language=javascript> alert('체크아웃 되었습니다.'); location.replace('receptionistMain.php'); </script>";
        exit;

    } catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
}
?>