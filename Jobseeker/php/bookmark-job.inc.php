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
if(isset($_POST['apply'])) {
    $uid = $_POST['postId'];
    $fetchDeletedQuery = mysqli_query($conn, "SELECT * FROM `jobpost` WHERE `post_iud` = '$uid'");
    $row = mysqli_fetch_assoc($fetchDeletedQuery);
    $companyName = $row['company_name'];
    $jobTitle = $row['job_title'];
    $employment = $row['employment_type'];
    $jobCategory = $row['job_category'];
    $jobDescription = $row['job_description'];
    $salary = $row['salary'];
    $employerEmail = $row['employer_email'];
    $primarySkill = $row['primary_skill'];
    $secondarySkill = $row['secondary_skill'];
    $postedby = $row['postedby_uid'];
    $date = dateTimeConvertion($row['date_posted']);
    $id = ($_SESSION['user_id']);
        
    mysqli_query($conn, "INSERT INTO `applied_jobs`(
    `company_name`,
    `job_title`,
    `employment_type`,
    `job_category`,
    `job_description`,
    `salary`,
    `employer_email`,
    `primary_skill`,
    `secondary_skill`,
    `postedby_uid`,
    `date_applied`,
    `status`,
    `jobseeker_id`
)
VALUES(
    '$companyName',
    '$jobTitle',
    '$employment',
    '$jobCategory',
    '$jobDescription',
    '$salary',
    '$employerEmail',
    '$primarySkill',
    '$secondarySkill',
    '$postedby',
     NOW(),
    'Pending',
    '$id'
)");
}