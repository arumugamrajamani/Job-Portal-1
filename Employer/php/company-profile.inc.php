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
else  {
    $employerId = ($_SESSION['user_id']);
    $tableData = "";
    //$j = 0;
    // Create query to get the employer information
    $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM jobseeker WHERE bookmarked = 'true'");
    while($row1 = mysqli_fetch_assoc($fetchDetailsQuery)){
        //$i = 0;
        //$j++;
        $Id = $row1['jobseeker_id'];
        $fetch = mysqli_query($conn, "SELECT * FROM applied_jobs WHERE jobseeker_id = '$Id' AND postedby_uid = '$employerId'");
        $resume = GetProfilePicLoc($row1['resume']);
        $fullname= $row1['fullname'];
        $row = mysqli_fetch_assoc($fetch);
            //$i++;
            // Get the employer information needed to edit modal
            $jobApplied = $row['job_title'];
            $dataId = $row['post_iud'];
            $date = $row['date_applied'];
            $status = $row['status'];
            $Id = $row['jobseeker_id'];
            $tableData .= "<tr>
            <td  data-title='Applicant Name'><b>{$fullname}</b></td>  
            <td  data-title='Resume'><b><a href='{$resume}' target='_blank'>View Resume</a></b></td>                                
            <td data-title='Job Applied'><b>{$jobApplied}</b></td>
            <td data-title='Date Applied'><b>{$date}</b></td>
            <td  data-title='Status'><b>{$status}</b></td>
            </tr>";
    }
    // Create Assoc array to return to the ajax call
        $response = array(
            'tableData' => $tableData
        );
    echo json_encode($response);
}