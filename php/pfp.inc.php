<?php
//includes db connection from 2 folders back
include '../../php/db-connection.php';
session_start();

// check if profile pic is not null && if file exists  then returns a string value of the profile picture location
function getCompanyLogoLoc($companyLogo)
{
    if ($companyLogo != NULL && file_exists("../../storage/" . $companyLogo)) {
        return "../storage/" . $companyLogo;
    } else {
        return "../storage/noProfilePic.png";
    }
}

// Function for getting the profile picture name
function getCompanyLogo()
{
    $GetCompanyLogoQuery = mysqli_query($GLOBALS['conn'], "SELECT company_logo_name FROM employer WHERE employer_id = '{$_SESSION['user_id']}'");
    $row = mysqli_fetch_assoc($GetCompanyLogoQuery);
    $companyLogo = $row['company_logo_name'];
    return $companyLogo;
}
if (isset($_POST['fetchData'])) {
    $jobseekerId = $_SESSION['user_id'];
    // Create query to get the employer information
    $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM jobseeker WHERE jobseeker_id = '$jobseekerId'");
    $row = mysqli_fetch_assoc($fetchDetailsQuery);
    $name = $row['fullname'];
    $logoPic = getCompanyLogoLoc($row['profile_picture']);
    // Create Assoc array to return to the ajax call
    $response = array('pfp' => $logoPic, 'name' => $name);
    echo json_encode($response);
}