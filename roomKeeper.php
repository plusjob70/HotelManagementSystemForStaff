<?php include 'basic.php';
try {
    session_start();
    $db = connectDB();

    $staff_name = $_SESSION['staff_name'];
    $staff_id = $_SESSION['staff_id'];
    $error = false;
    $q_staff_id = $db->quote($staff_id);

    $stmt_s = $db->query("SELECT attendance FROM staff_info WHERE id = " .$q_staff_id);
    $result_s = $stmt_s->fetchAll();

    $stmt = $db->query("SELECT * FROM cleaning WHERE staff_id =" .$q_staff_id);
    $result = $stmt->fetchAll();

    $stmt2 = $db->query("SELECT * FROM complainment WHERE staff_id =" .$q_staff_id);
    $result2 = $stmt2->fetchAll();

} catch (PDOException $ex) { $error = true; }
?>