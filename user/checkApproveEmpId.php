<?php

        require 'connect.php';
    
        $database = new connect();

        $empId = htmlspecialchars($_POST['empId']);
        $code = htmlspecialchars($_POST['code']);


        $query = "SELECT * FROM AddUser WHERE UserId='$empId' AND code='$code'";
        $resultQuery = mysql_query($query);

        $rows = mysql_num_rows($resultQuery);
        if($rows >= 1){
            echo '1';
        }else{
            echo '0';
        }
?>