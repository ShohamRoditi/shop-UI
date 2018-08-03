<?php
    $servername = "182.50.133.51";
    $username = "studDB18A";
    $password = "stud18aDB1!";
    $dbname = "studDB18A";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if(mysqli_connect_errno()) {die("DB connection failed: " . mysqli_connect_error() . " (" .mysqli_connect_errno() . ")"      
        );   
    }
?>