<?php
include 'basic.php';
class TableRows extends RecursiveIteratorIterator
{
    function __construct($it)
    {
        parent::__construct($it, self::LEAVES_ONLY);
    }
    function current()
    {
        return "<td style='width: 130px; border: 1px solid black;'>" . parent::current() . "</td>";
    }
    function beginChildren()
    {
        echo "<tr>";
    }
    function endChildren()
    {
        echo "</tr>" . "\n";
    }
}
?>


<?php

    try {
        session_start();
        $db = connectDB();
        $staff_name = $_SESSION['staff_name'];
        $staff_id = $_SESSION['staff_id'];
        $error = false;
        $q_staff_id = $db->quote($staff_id);

        $room = array(
            6 => array(48 => 701, 49 => 702, 50 => 703, 51 => 704, 52 => 705, 53 => 706, 54 => 707, 55 => 708),
            5 => array(40 => 601, 41 => 602, 42 => 603, 43 => 604, 44 => 605, 45 => 606, 46 => 607, 47 => 608),
            4 => array(32 => 501, 33 => 502, 34 => 503, 35 => 504, 36 => 505, 37 => 506, 38 => 507, 39 => 508),
            3 => array(24 => 401, 25 => 402, 26 => 403, 27 => 404, 28 => 405, 29 => 406, 30 => 407, 31 => 408),
            2 => array(16 => 301, 17 => 302, 18 => 303, 19 => 304, 20 => 305, 21 => 306, 22 => 307, 23 => 308),
            1 => array(8 => 201, 9 => 202, 10 => 203, 11 => 204, 12 => 205, 13 => 206, 14 => 207, 15 => 208),
            0 => array(0 => 101, 1 => 102, 2 => 103, 3 => 104, 4 => 105, 5 => 106, 6 => 107, 7 => 108)
        );

        $stmt_s = $db->query("SELECT attendance FROM staff_info WHERE id = " . $q_staff_id);
        $result_s = $stmt_s->fetchAll();

        $stmt = $db->prepare("SELECT id, sname, phone FROM staff_info WHERE department = 'receptionist' AND attendance = 1");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt2 = $db->prepare("SELECT id, sname, phone FROM staff_info WHERE department = 'roomkeeper' AND attendance = 1");
        $stmt2->execute();
        $stmt2->setFetchMode(PDO::FETCH_ASSOC);

        $stmt3 = $db->query("SELECT * FROM complainment ORDER BY NOW()");
        $result = $stmt3->fetchAll();

        $stmt4 = $db->query("SELECT * FROM staff_info WHERE attendance = 1 AND department = 'roomkeeper'");
        $result2 = $stmt4->fetchAll();

        $stmt5 = $db->query("SELECT * FROM room");
        $result3 = $stmt5->fetchAll();

        $stmt5 = $db->prepare("SELECT ttime, rnumber, staff_id, tstatus FROM task_log WHERE ttime > DATE_SUB(NOW(), INTERVAL 2 DAY)");
        $stmt5->execute();
        $stmt5->setFetchMode(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        $error = true;
    }


?>