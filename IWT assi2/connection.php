<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "online banking";

    $conn = mysqli_connect($server,$user,$pass,$db);

    if(!$conn){
        echo "Connection failed";
    }
    else{
        echo "Connection success";
    }
?>