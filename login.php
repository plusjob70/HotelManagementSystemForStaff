<?php
session_start();

try {
    $db = new PDO("mysql:dbname=HMS; host=localhost; port=3306", "root", "a12345");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $ID = $_POST['ID'];
    $PW = $_POST['PW'];

    $rows = $db->query("SELECT * FROM staff");
    $result = $rows->fetchAll();

    for ($i = 0; $i < count($result); $i++) {
        if ($result[$i]["id"] == $ID and $result[$i]["pw"] == $PW) {
            if ($result[$i]["accept"] == 1) {
                $_SESSION['staff_id'] = $result[$i]["id"];
                $_SESSION['staff_name'] = $result[$i]["sname"];

                switch ($result[$i]["department"]) {
                    case "manager":
                        header("Location: managerT1.php");
                        break;
                    case "roomkeeper":
                        header("Location: roomKeeperT1.php");
                        break;
                    case "receptionist":
                        header("Location: receptionistT1.php");
                        break;
                    case "master":
                        header("Location: masterT1.php");
                        break;
                }
            } else {
                print "<script language=javascript> alert('Need admin approval.'); history.back(); </script>";
                exit;
            }
        }
    }
    print "<script language=javascript> alert('Information does not match.'); history.back(); </script>";
    exit;
} catch (PDOException $ex) {
?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
<?php
}
exit;
?>