<?php
    try {
        $db = new PDO("mysql:dbname=HMS; host=localhost; port=3306", "root", "a12345");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $id=$_POST['id'];
        $password=$_POST['pwd'];
        $password2=$_POST['pwd2'];
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $department=$_POST['department'];

        if ($password !== $password2) {
            print "<script language=javascript> alert('You entered the wrong password.'); location.replace('signUp.php'); </script>";
            exit;
        }

        $q_id = $db->quote($id);
        $q_password = $db->quote($password);
        $q_password2 = $db->quote($password2);
        $q_name = $db->quote($name);
        $q_phone = $db->quote($phone);
        $q_attendance = $db->quote(0);
        $q_department = $db->quote($department);

        $rows = $db->query("SELECT * FROM staff");
        $result = $rows->fetchAll();
        
        for($i = 0; $i < count($result); $i++){
            if($result[$i]["id"] == $id){
                print "<script language=javascript> alert('This ID has been taken.'); location.replace('signUp.php'); </script>";
                exit;
            }
        }

        $str = "INSERT INTO staff (id, pw, sname, phone, department, attendance, accept) 
                VALUE ($q_id, $q_password, $q_name, $q_phone, $q_department, $q_attendance, 0)";
        $db->exec($str);

        print "<script language=javascript> alert('Registration will be completed after admin approval.'); location.replace('staffMain.html'); </script>";
        exit;

    } catch (PDOException $ex) {
        ?>
        <p>Sorry, a database error occurred. Please try again later.</p>
        <p>(Error details: <?= $ex->getMessage() ?>)</p>
        <?php
    }

?>