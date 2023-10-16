<?php
    $host = "localhost";
    $user = "capitaljs10";
    $pw = "wltjddl7306!";
    $db = "capitaljs10";

    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("utf-8");

    // if(mysqli_connect_errno()){
    //     echo "DATABASE Connect False";
    // } else {
    //     echo "DATABASE Connect True";
    // }
?>