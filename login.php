<?php
    session_start();

	try{
		$db = new PDO("mysql:dbname=HMS; host=localhost; port=3306", "root", "a12345");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$ID = $_POST['ID'];
		$PW = $_POST['PW'];

		$rows = $db->query("SELECT * FROM staff_info");
        $result = $rows->fetchAll();

		for($i = 0; $i<count($result); $i++){
        	if($result[$i]["id"] == $ID and $result[$i]["pw"] == $PW){
                switch($result[$i]["department"]){
                    case "manager":
                        header("Location: managerMain.php");
                        break;
                    case "roomkeeper":
                        header("Location: roomKeeperMain.php");
                        break;
                    case "receptionist":
                        header("Location: receptionistMain.php");        
                        break;
                }
                $_SESSION['staff_name'] = $result[$i]["sname"];
                $_SESSION['staff_id'] = $result[$i]["id"];
                exit;
        	}
        }
         
        print "<script language=javascript> alert('회원정보가 일치하지 않습니다.'); location.replace('index.html'); </script>";
        exit;


	} catch (PDOException $ex) {
        ?>
        <p>Sorry, a database error occurred. Please try again later.</p>
        <p>(Error details: <?= $ex->getMessage() ?>)</p>
        <?php
    }
    exit;
?>