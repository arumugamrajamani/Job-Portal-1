<?php
//includes db connection from 2 folders back
include '../../php/db-connection.php';
session_start();

// When the page is loaded the js will call for this then this will get the admin's data from the DB
if (isset($_POST['fetchData'])) {
    $jobseekerId = $_SESSION['user_id'];
    // Create query to get the employer information
    $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM jobseeker WHERE jobseeker_id = '$jobseekerId'");
    $row = mysqli_fetch_assoc($fetchDetailsQuery);
    // Get the employer information needed
    $jobseekerName = $row['fullname'];
    $jobseekerEmail = $row['email'];
    $jobseekerNumber = $row['mobile_number'];

    // Create Assoc array to return to the ajax call
    $response = array(
        'fullname' => $jobseekerName,
        'email' => $jobseekerEmail,
        'mobile_number' => $jobseekerNumber,
   
    );
    echo json_encode($response);
}
