<?php
    $host = "localhost";
    $user = "dw9605";
    $pass = "eoqkr53062!";
    $db = "dw9605";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    // if(mysqli_connect_errno()){
    //     echo "Database Connect False";
    // } else {
    //     echo "Database Connect True";
    // }
?>