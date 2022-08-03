<?php
session_start();
//includes db connection from 2 folders back
include '../../php/db-connection.php';

function dateTimeConvertion($date){
    return date('M d, Y, h:i A', strtotime($date));
}
function  getProfilePicLoc($profilePic){
    if ($profilePic != NULL && file_exists("../../storage/" . $profilePic)) {
        return "../storage/" . $profilePic;
    } else {
        return "image/comlogo.png";
    }
}

if (isset($_POST['getData'])) {
    $id = $_SESSION['postId'];
    $getPosts = mysqli_query($conn, "SELECT * FROM `jobpost` WHERE `post_iud` = '$id'");
    $row = mysqli_fetch_assoc($getPosts);
    $uid = $row['postedby_uid'];
    $postId = $row['post_iud'];
    $getEmployerName = mysqli_query($conn, "SELECT * FROM `employer` WHERE `employer_id` = '$uid'");
    while($name = mysqli_fetch_assoc($getEmployerName)){
        $companyAddress = $name['company_address'];
        $companyName = $name['company_name'];
        $companyLogo = getProfilePicLoc($name['company_logo_name']);
    }
    $jobCategory = $row['job_category'];
    $employment = $row['employment_type'];
    $jobTitle = $row['job_title'];
    $salary = $row['salary'];
    $description = $row['job_description'];
    $date = dateTimeConvertion($row['date_posted']);
    $data = array('date' => $date, 'employment' => $employment, 'jobCategory' => $jobCategory, 'jobTitle' => $jobTitle, 'companyAddress' => $companyAddress, 'companyName' => $companyName, 'salary' => $salary, 'description' => $description);
    echo json_encode($data);
}