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
    $employerId = $_SESSION['user_id'];
    $tableData = "";
    // Create query to get the employer information
    $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM applied_jobs WHERE postedby_uid = '$employerId'");
    while($row = mysqli_fetch_assoc($fetchDetailsQuery)){
        $jobseekerId= $row['jobseeker_id'];
        $fetch = mysqli_query($conn, "SELECT * FROM jobseeker WHERE jobseeker_id = '$jobseekerId'");
        while($row1 = mysqli_fetch_assoc($fetch)){
            // Get the employer information needed to edit modal
            $resume = GetProfilePicLoc($row1['resume']);
            $fullname= $row1['fullname'];
        }
        $jobApplied = $row['job_title'];
        $dataId = $row['post_iud'];
        $date = $row['date_applied'];
        $status = $row['status'];
        $title = $row['job_title'];
        $tableData .= "<tr>
        <td  data-title='Applicant Name'><b>{$fullname}</b></td>  
        <td  data-title='Resume'><b><a href='{$resume}' target='_blank'>View Resume</a></b></td>                                
        <td data-title='Job Applied'><b>{$jobApplied}</b></td>
        <td data-title='Date Applied'><b>{$date}</b></td>
        <td  data-title='Status'><b>{$status}</b></td>
        <td data-title='Action'><button  class='btn btn-info edit' type='button' data-id='{$dataId}' id='btn-info' data-bs-toggle='modal' data-bs-target='#exampleModal1'>Edit</button>
        <button class='btn btn-info delete-btn' type='button' data-id='{$dataId}' id='btn-info' data-bs-toggle='modal' data-bs-target='#exampleModal'>Reject</button></td>
    </tr>";
    }
    // Create Assoc array to return to the ajax call
        $response = array(
            'tableData' => $tableData
        );
    echo json_encode($response);
}
else if (isset($_POST['update'])) {
    $status = $_POST['status'];
    $postId = $_POST['postId'];
    $fetchDetailsQuery = mysqli_query($conn, "UPDATE `applied_jobs` SET `status`='$status' WHERE `post_iud` = '$postId'");
}

if (isset($_POST['delete'])) {
    $Id = $_POST['postId'];
    $fetchDetailsQuery = mysqli_query($conn, "DELETE FROM `applied_jobs` WHERE post_iud = '$Id'");
}