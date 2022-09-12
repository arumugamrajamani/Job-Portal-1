<?php
//includes db connection from 2 folders back
include '../../php/db-connection.php';
session_start();

// check if profile pic is not null && if file exists  then returns a string value of the profile picture location
function  getProfilePicLoc($profilePic)
{
    if ($profilePic != NULL && file_exists("../../storage/" . $profilePic)) {
        return "../storage/" . $profilePic;
    } else {
        return "../storage/noProfilePic.png";
    }
}

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

// When the page is loaded the js will call for this then this will get the admin's data from the DB
if (isset($_POST['fetchData'])) {
    $employerId = $_SESSION['user_id'];
    // Create query to get the employer information
    $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM employer WHERE employer_id = '$employerId'");
    $row = mysqli_fetch_assoc($fetchDetailsQuery);
    // Get the employer information needed
    $employerName = $row['employer_name'];
    $employerEmail = $row['email'];
    $employerNumber = $row['contact_number'];
    $employerPosition = $row['employer_position'];
    $employerAddress = $row['company_address'];
    $companyName = $row['company_name'];
    $companydDescription = $row['company_description'];
    $logoPic = getCompanyLogoLoc($row['company_logo_name']);

    // Create Assoc array to return to the ajax call
    $response = array(
        'employer_name' => $employerName,
        'email' => $employerEmail,
        'contact_number' => $employerNumber,
        'company_logo_name' => $logoPic,
        'employer_position' => $employerPosition,
        'employerAddress'   => $employerAddress,
        'companyName'       => $companyName,
        'companyDescription'=> $companydDescription
    );
    echo json_encode($response);
}

if (isset($_POST['getBookmarkData'])) { 
    $employer_id = ($_SESSION['user_id']);
    $tableData = "";

    // Create query to get the employer information
    $query = "SELECT * FROM employer_bookmark WHERE employer_id = '$employer_id'";
    $query = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($query)) {
        $fullname = $row['fullname'];
        $resume = $row['resume'];
        $date = $row['date_applied'];

        $tableData .= "<tr>
        <td  data-title='Applicant Name'><b>{$fullname}</b></td>  
        <td  data-title='Resume'><b><a href='{$resume}' target='_blank'>View Resume</a></b></td>                                
        <td data-title='Job Applied'><b>Blank</b></td>
        <td data-title='Date Applied'><b>{$date}</b></td>
        <td  data-title='Status'><b>Blank</b></td>
        </tr>";
    }
    // Create Assoc array to return to the ajax call
    $response = array(
        'tableData' => $tableData
    );
    echo json_encode($response);
}