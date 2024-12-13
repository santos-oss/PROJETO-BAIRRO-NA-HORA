<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'odeiodarnome';

    $Conection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // if($Conection->connect_errno)
    // {
    //     echo "Error";
    // }
    // else
    // {
    //     echo "Successfully connected";
    // }
?>