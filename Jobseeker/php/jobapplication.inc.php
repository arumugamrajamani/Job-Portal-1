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

// When the page is loaded the js will call for this then this will get the admin's data from the DB
if (isset($_POST['getData'])) {
    $jobseekerId = $_SESSION['user_id'];
    // Create query to get the employer information
    $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM jobseeker WHERE jobseeker_id = '$jobseekerId'");
    $row = mysqli_fetch_assoc($fetchDetailsQuery);
    // Get the employer information needed to edit modal
    $profilePic = GetProfilePicLoc($row['profile_picture']);
    $fullName = strtoupper($row['fullname']);
    $email = $row['email'];
    $number = $row['mobile_number'];

    // Create Assoc array to return to the ajax call
    $response = array(
        'profile_picture' => $profilePic,
        'fullname' => $fullName,
        'email' => $email,
        'mobile_number' => $number

        
    );
    echo json_encode($response);
}

if (isset($_POST['delete'])) {
    $Id = $_POST['postId'];
    $jobseeker_id = $_SESSION['user_id'];
    $fetchDetailsQuery = mysqli_query($conn, "DELETE FROM `applied_jobs` WHERE post_id = '$Id' AND jobseeker_id='$jobseeker_id'");
}

// When the page is loaded the js will call for this then this will get the admin's data from the DB
if (isset($_POST['getTableData'])) {
    $jobseekerId = $_SESSION['user_id'];
    $tableData = "";
    // Create query to get the employer information
    $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM applied_jobs WHERE jobseeker_id = '$jobseekerId'");
    while($row = mysqli_fetch_assoc($fetchDetailsQuery)){
        $employerId= $row['employer_id'];
        $fetch = mysqli_query($conn, "SELECT * FROM employer WHERE employer_id = '$employerId'");
        while($row1 = mysqli_fetch_assoc($fetch)){
            // Get the employer information needed to edit modal
            $profilePic = GetProfilePicLoc($row1['company_logo_name']);
            $employerName= $row1['employer_name'];
        }

        $job_title = $row['job_title'];
        // $desc = $row['job_description'];
        $date_applied = $row['date_applied'];
        $status = $row['status'];
        $post_id = $row['post_id'];
        
        $tableData .= "<tr class='tr1'>
        <td data-title='Employer' class='employ'><img src='{$profilePic}' width='20' height='20' style='border-radius: 100px; object-fit: cover;'></img> {$employerName}
        </td>
        <td data-title='Job Title'>{$job_title}</td>
        <td data-title='Job Description'>{}</td>
        <td data-title='Date Applied'>{$date_applied}</td>
        <td data-title='Status'>{$status}</td>
        <td data-title='Interview Schedule'>{}</td>
        <td data-title='Action'>
            <button class='btn btn-info delete-btn' type='button' data-id='{$post_id}' id='btn-info'
            data-bs-toggle='modal' data-bs-target='#exampleModal'>Withdraw Application</button></td>
      </tr>";
    }
    // Create Assoc array to return to the ajax call
        $response = array(
            'tableData' => $tableData
        );
    echo json_encode($response);
}