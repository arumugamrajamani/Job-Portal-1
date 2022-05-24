<?php
    //includes db connection from 2 folders back
    include '../../php/db-connection.php';
    
    if(isset($_POST['loadData'])){
        //Variable to hold the querryu result
        $output = "";
        //fetch all the jobseeker info from the database
        $checkJobseekerInfo = mysqli_query($conn, "SELECT * FROM jobseeker");
        while($row = mysqli_fetch_assoc($CheckEmployerInfo)){
            $jobseekerId = $row['jobseeker_id'];
            $fullName = $row['fullname'];
            $profilePicture = "../storage".$row['profile_picture'];
            $resume = "../storage".$row['resume'];
            $email = $row['email'];
            $output .= "";
        }

    }
?>