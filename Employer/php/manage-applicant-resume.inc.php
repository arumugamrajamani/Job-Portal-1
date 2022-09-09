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
// Convert old date time into textual format
function dateTimeConvertion($date)
{
    return date('M d, Y, h:i A', strtotime($date));
}
// Function for validating if input is valid fullname
function isValidFullname($fullname){
    if(preg_match("/^[a-zA-Z .]*$/", $fullname)){
            return true;
    } else {
        return false;
    }
}
// Function for getting the jobseeker profile picture
function getFiles($jobseekerId)
{
    $GetFileQuery = mysqli_query($GLOBALS['conn'], "SELECT profile_picture FROM jobseeker WHERE jobseeker_id = '$jobseekerId'");
    $row = mysqli_fetch_assoc($GetFileQuery);
    // Create assoc array
    $files = array(
        'profile_picture' => $row['profile_picture']
    );
    // Return assoc array
    return $files;
}

// When the page is loaded the js will call for this then this will get the admin's data from the DB
if (isset($_POST['getData'])) {
    $employer_id = $_SESSION['user_id'];
    $tableData = "";
    
    // Create query to get the employer information
    $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM applied_jobs WHERE postedby_uid = '$employer_id'");
    while($row = mysqli_fetch_assoc($fetchDetailsQuery)){
        $jobseekerId= $row['jobseeker_id'];
        $fetch = mysqli_query($conn, "SELECT * FROM jobseeker WHERE jobseeker_id = '$jobseekerId'");
        while($row1 = mysqli_fetch_assoc($fetch)){
            // Get the employer information needed to edit modal
            $resume = GetProfilePicLoc($row1['resume']);
            $fullname= $row1['fullname'];
        }
        $jobApplied = $row['job_title'];

        $apply_id = $row['apply_id'];
        $dataId = $row['post_id'];

        $date = $date = dateTimeConvertion($row['date_applied']);;
        $status = $row['status'];
        $title = $row['job_title'];
        $jobseeker_id = $row['jobseeker_id'];

        // Fetching the data will exclude the 'Rejected' status from applied_jobs
        if ($status != 'Rejected') {
            $tableData .= "
            <tr class = 'tr'>
                <td  data-title='Applicant Name'><b>{$fullname}</b></td>  
                <td  data-title='Resume'><b><a href='{$resume}' target='_blank'>View Resume</a></b></td>                                
                <td data-title='Job Applied'><b>{$jobApplied}</b></td>
                <td data-title='Date Applied'><b>{$date}</b></td>
                <td  data-title='Status'><b>{$status}</b></td>

                <td data-title='Action'>
                <button  class='btn btn-info edit-btn' type='button' data-id='{$apply_id}' data-bs-toggle='modal' data-bs-target='#edit-modal'>Edit</button>
            ";
        }

        $count = "SELECT COUNT(*) as total FROM employer_bookmark WHERE employer_id='$employer_id' AND jobseeker_id='$jobseeker_id'";
        $count = mysqli_query($conn, $count);
        $count = mysqli_fetch_assoc($count);

        // Will detect if the fetched applicant was already bookmarked by the employer
        if ($count['total'] == 0) {
            $tableData .= "
                <button  class='btn btn-info bookmark-btn' type='button' data-id='{$jobseeker_id}' data-bs-toggle='modal' data-bs-target='#bookmark-modal' >Bookmark</button>
            ";
        }
        else {
            $tableData .= "
                <button  class='btn btn-info bookmark-btn' type='button' data-id='{$jobseeker_id}' data-bs-toggle='modal' data-bs-target='#bookmark-modal' disabled>Bookmarked</button>
            ";
        }
        $tableData .= "
                <button  class='btn btn-info remove-btn' type='button' data-id='{$jobseeker_id}' data-bs-toggle='modal' data-bs-target='#exampleModal3' >Remove Bookmark</button>
                <button class='btn btn-info reject-btn' type='button' data-id='{$apply_id}' data-bs-toggle='modal' data-bs-target='#reject-modal'>Reject</button></td>
            </tr>
        ";
    }
    
    mysqli_close($conn);

    // Stored and return the displays for employer management page
    $response = array(
        'tableData' => $tableData,
    );

    // Return this output variable to the ajax call
    echo json_encode($response);
}

// When the "Edit" button was able to send the data from AJAX in js
if (isset($_POST['edit'])) {
    $status = $_POST['status'];
    $apply_id = $_POST['apply_id'];
    $employer_id = $_SESSION['user_id'];

    $query = "UPDATE `applied_jobs` SET `status`='$status' WHERE `apply_id` = '$apply_id'";
    $query = mysqli_query($conn, $query);
    mysqli_close($conn);
    
    $response = array(
        // Blank
    );
    echo json_encode($response);
}

// When the "Bookmark" button was able to send the data from AJAX in js
if (isset($_POST['bookmark'])) {
    $jobseeker_id = $_POST['jobseeker_id'];
    $employer_id = $_SESSION['user_id'];

    $query = "SELECT * FROM `jobseeker` WHERE `jobseeker_id`='$jobseeker_id'";
    $query = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($query);
    $fullname = $row['fullname'];
    $resume = $row['resume'];

    $query = "SELECT * FROM `applied_jobs` WHERE `jobseeker_id`='$jobseeker_id'";
    $query = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($query);
    $date_applied = $row['date_applied'];
 
    $date_applied = $row['date_applied'];

    $query = "INSERT INTO `employer_bookmark` (
        `jobseeker_id`,
        `employer_id`,
        `fullname`,
        `resume`,
        `date_applied`,
        `date_bookmarked`
    ) VALUES (
        '$jobseeker_id',
        '$employer_id',
        '$fullname',
        '$resume',
        '$date_applied',
        NOW()
    )";

    $query = mysqli_query($conn, $query);
    mysqli_close($conn);

    $response = array(
        // Blank
    );

    echo json_encode($response);
}

// When the "Reject" button was able to send the data from AJAX in js
if (isset($_POST['reject'])) {
    $apply_id = $_POST['apply_id'];
    $employer_id = $_SESSION['user_id'];

    // Check if the rejected applicant was included in the employer's bookmark
    // -----------------------------------------------------

    // $query = "SELECT * FROM `applied_jobs` WHERE `apply_id`='$apply_id' AND `employer_id`='$employer_id'";
    // $query = mysqli_query($conn, $query);
    // $row = mysqli_fetch_assoc($query);

    // $jobseeker_id = $row['jobseeker_id'];
    // $employer_id = $row['employer_id'];

    // Update the application status of the jobseeker
    $query = "UPDATE `applied_jobs` SET `status` = 'Rejected' WHERE `apply_id`='$apply_id'";
    $query = mysqli_query($conn, $query);

    // // Delete them in bookmarks
    // $query = "DELETE FROM `employer_bookmark` WHERE `jobseeker_id`='$jobseeker_id' AND `employer_id`='$employer_id'";
    // $query = mysqli_query($conn, $query);
    
    mysqli_close($conn);

    $response = array(
        // Blank
    );

    echo json_encode($response);
}

// if (isset($_POST['remove'])) {
//     $jobseekerId = $_POST['Num'];
//     $fetchDetailsQuery = mysqli_query($conn, "UPDATE `jobseeker` SET `bookmarked`='false' WHERE `jobseeker_id` = '$jobseekerId'");

//     $response = array(

//     );
// }