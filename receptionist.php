<?php include 'basic.php';
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

    try {
        session_start();
        $db = connectDB();

        $staff_name = $_SESSION['staff_name'];
        $staff_id = $_SESSION['staff_id'];
        $error = false;
        $q_staff_id = $db->quote($staff_id);

        $stmt_s = $db->query("SELECT attendance FROM staff_info WHERE id = " . $q_staff_id);
        $result_s = $stmt_s->fetchAll();

        $stmt = $db->prepare("SELECT code, cname, id, rnumber, nAdults, nKids, phone, checkIn, checkOut FROM reservation NATURAL JOIN customer_info WHERE checkIn >= DATE(NOW()) ORDER BY checkIn");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt2 = $db->query("SELECT code, cname, id, rnumber, rtype, nAdults, nKids, phone, checkIn, checkOut, isEmpty, clean FROM reservation NATURAL JOIN customer_info NATURAL JOIN room WHERE checkIn=DATE(NOW()) ORDER BY cname");
        $result2 = $stmt2->fetchAll();

        $stmt3 = $db->query("SELECT code, cname, id, rnumber, rtype, nAdults, nKids, phone, checkIn, checkOut, isEmpty, clean FROM reservation NATURAL JOIN customer_info NATURAL JOIN room WHERE checkOut=DATE(NOW()) OR (isEmpty = 0 AND checkIn<=DATE(NOW())) ORDER BY checkOut");
        $result3 = $stmt3->fetchAll();
    } catch (PDOException $ex) {
        $error = true;
    }

