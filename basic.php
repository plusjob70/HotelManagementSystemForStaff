<?php
    function connectDB(){
        $db = new PDO("mysql:dbname=HMS; host=localhost; port=3306", "root", "a12345");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
?>