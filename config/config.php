<?php
    $servername  =  "localhost";
    $username = "root";
    $password = "";
    $database = "tblpantai";

    $dbo = new mysqli($servername, $username, $password, $database);

    if($dbo->connect_error){
        die("Connection Failed". $dbo->connect_error);
    }
?>