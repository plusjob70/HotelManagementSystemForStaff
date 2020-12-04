<?php include 'basic.php';
    try{
        $staff_id = $_SESSION['staff_id'];
        $rnumber = $_POST['rnumber'];
        $complainment = $_POST['complainment'];
        $detail = $_POST['detail'];
    
        $q_staff_id = $db->quote($staff_id);
        $q_rnumber = $db->quote($rnumber);
        $q_complainment = $db->quote($complainment);
        $q_detail = $db->quote($detail);
    
        $str = "INSERT INTO complainment (ttime, rnumber, staff_id, complainment, detail, recept)
                 VALUE (NOW()," .$q_rnumber. "," .$q_staff_id. "," .$q_complainment. "," .$q_detail. ", 0)";
        $db->exec($str);
    
        print "<script language=javascript> alert('Request has been registered.'); location.replace('receptionistT4.php'); </script>";
        exit;
    }catch(PDOException $ex){ ?>
        <p>Sorry, a database error occurred. Please try again later.</p>
        <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php }
    
?>