<?php
    $servername = 'localhost';
    $dbname = 'inventory';
    $username = 'root';
    $password = '';

    $conn = new mysqli($servername,$username,$password,$dbname);

    //Check Connection
   /* if($conn -> connect_error){

       die("error" . $conn -> connect_error);
    }
    echo "success";*/


?>