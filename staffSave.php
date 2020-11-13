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
            print "<script language=javascript> alert('비밀번호가 일치하지 않습니다.'); location.replace('signUp.php'); </script>";
            exit;
        }

        $q_id = $db->quote($id);
        $q_password = $db->quote($password);
        $q_password2 = $db->quote($password2);
        $q_name = $db->quote($name);
        $q_phone = $db->quote($phone);
        $q_attendance = $db->quote(0);
        $q_department = $db->quote($department);

        $rows = $db->query("SELECT * FROM staff_info");
        $result = $rows->fetchAll();
        
        for($i = 0; $i < count($result); $i++){
            if($result[$i]["id"] == $id){
                print "<script language=javascript> alert('해당 아이디는 이미 가입되어 있습니다.'); location.replace('signUp.php'); </script>";
                exit;
            }
        }

        $str = "INSERT INTO staff_info (id, pw, sname, phone, department, attendance) 
                VALUE ($q_id, $q_password, $q_name, $q_phone, $q_department, $q_attendance)";
        $db->exec($str);

        print "<script language=javascript> alert('회원가입이 완료되었습니다.'); location.replace('staffMain.html'); </script>";
        exit;

    } catch (PDOException $ex) {
        ?>
        <p>Sorry, a database error occurred. Please try again later.</p>
        <p>(Error details: <?= $ex->getMessage() ?>)</p>
        <?php
    }

?>