<?php
//includes db connection from 2 folders back
include '../../php/db-connection.php';
session_start();

mysqli_query($conn, "INSERT INTO manage_resume(id, Full_name, Email, Gdrive_link)
            VALUES (`$id`, `$Full_name`, `$Email`, `$Gdrive_link`)");