<?php
    $dbServerName = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "job_portal";

    // Create connection
    $conn = mysqli_connect($dbServerName, $dbUsername,$dbPassword, $dbName);

    // Check the connection
    if($conn) {
        // echo "<script>alert('Connected Successfully..');</script>"; 
    }
    else
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>