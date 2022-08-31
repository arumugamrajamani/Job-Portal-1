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
    $employerId = $_SESSION['user_id'];
    $tableData = "";
    // Variables to store the data
    $page = 0;
    // Set the item limit per page
    $pageLimit = 5;
    //Variable to hold the querryu result
    $tableData = "";

    // Check if the page number is set
    if (isset($_POST['page'])) {
        // Set the page number
        $page = $_POST['page'];
        // Check if search is set
    } elseif (isset($_POST['search'])) {
        // Set the page number to 1
        $page = 1;
    } else {
        // Set the page number to 1
        $page = 1;
    }

    // Calculate the starting row
    $start = ($page - 1) * $pageLimit;

    // Check if search is present
    if (isset($_POST['search'])) {
        $search = $_POST['search'];
        $statement = "SELECT * FROM jobseeker WHERE fullname LIKE '%$search%' OR mobile_number LIKE '%$search%' OR email LIKE '%$search%' LIMIT $start, $pageLimit";
        $paginationStatement = "SELECT * FROM jobseeker WHERE fullname LIKE '%$search%' OR mobile_number LIKE '%$search%' OR email LIKE '%$search%'";
    } else {
        $statement = "SELECT * FROM jobseeker LIMIT $start, $pageLimit";
        $paginationStatement = "SELECT * FROM jobseeker";
    }

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
        $date = $date = dateTimeConvertion($row['date_applied']);;
        $status = $row['status'];
        $title = $row['job_title'];
        $Id = $row['jobseeker_id'];
        $tableData .= "<tr class = 'tr'>
                        <td  data-title='Applicant Name'><b>{$fullname}</b></td>  
                        <td  data-title='Resume'><b><a href='{$resume}' target='_blank'>View Resume</a></b></td>                                
                        <td data-title='Job Applied'><b>{$jobApplied}</b></td>
                        <td data-title='Date Applied'><b>{$date}</b></td>
                        <td  data-title='Status'><b>{$status}</b></td>

                        <td data-title='Action'><button  class='btn btn-info edit' type='button' data-id='{$dataId}' id='btn-info' data-bs-toggle='modal' data-bs-target='#exampleModal1'>Edit</button>
                        <button  class='btn btn-info bookmark' type='button' data-id='{$Id}' id='btn-info' data-bs-toggle='modal' data-bs-target='#exampleModal2' >Bookmark</button>
                        <button  class='btn btn-info remove' type='button' data-id='{$Id}' id='btn-info' data-bs-toggle='modal' data-bs-target='#exampleModal3' >Remove Bookmark</button>
                        <button class='btn btn-info delete-btn' type='button' data-id='{$dataId}' id='btn-info' data-bs-toggle='modal' data-bs-target='#exampleModal'>Reject</button></td>
                    </tr>";
    }
    // Query to get the total number of employers
    $GetRecordsQuery = mysqli_query($conn, $paginationStatement);
    // Query to get the total number of employers
    $totalRecords = mysqli_num_rows($GetRecordsQuery);
    // Calculate the total number of employers. Will pass to 1 if there are no employers
    $totalPages = ($totalRecords == 0) ? 1 : ceil($totalRecords / $pageLimit);
    $pagination = "";

    // check if the page number is greater than 1
    if ($page >= 1) {
        // Set the previous page
        $previous = $page - 1;
        $pagination .=  "<li class='page-item' data-page='{$previous}'>
                                <a class='page-link bg-info text-dark'>Previous</a>
                            </li>";
    } else {
        $pagination .=  "<li class='page-item' data-page='{$previous}'>
                                <a class='page-link bg-info text-dark'>Previous</a>
                            </li>";
    }

    // Loop through the pages
    for ($i = 1; $i <= $totalPages; $i++) {
        $active = '';
        if ($page == $i) {
            $active = 'active';
        }
        $pagination .= "<li class='page-item {$active}' data-page='{$i}'>
                                    <a class='page-link text-dark'>{$i}</a>
                                </li>";
    }

    // Check if there are more than 1 page
    if ($page <= $totalPages) {
        // Set the next page
        $next = $page + 1;
        $pagination .=  "<li class='page-item' data-page='{$next}'>
                                    <a class='page-link bg-info text-dark'>Next</a>
                                </li>";
    } else {
        $pagination .=  "<li class='page-item' data-page='{$next}'>
                                <a class='page-link bg-info text-dark'>Next</a>
                            </li>";
    }

    // For entries display
    $entries_start = $start + 1;
    $entries_end = $start + $pageLimit;

    $entries = "<span>Show <b>{$entries_start}</b> to <b>{$entries_end}</b> of {$totalRecords} entries</span>";

    // Stored and return the displays for employer management page
    $response = array(
        'tableData' => $tableData,
        'pagination' => $pagination,
        'entries' => $entries
    );
    // Return this output variable to the ajax call
    echo json_encode($response);
}
else if (isset($_POST['update'])) {
    $status = $_POST['status'];
    $postId = $_POST['postId'];
    $fetchDetailsQuery = mysqli_query($conn, "UPDATE `applied_jobs` SET `status`='$status' WHERE `post_iud` = '$postId'");
}
else if (isset($_POST['bookmark'])) {
    $jobseekerId = $_POST['Num'];
    $fetchDetailsQuery = mysqli_query($conn, "UPDATE `jobseeker` SET `bookmarked`='true' WHERE `jobseeker_id` = '$jobseekerId'");
}
else if (isset($_POST['remove'])) {
    $jobseekerId = $_POST['Num'];
    $fetchDetailsQuery = mysqli_query($conn, "UPDATE `jobseeker` SET `bookmarked`='false' WHERE `jobseeker_id` = '$jobseekerId'");
}
if (isset($_POST['delete'])) {
    $Id = $_POST['postId'];
    $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM `applied_jobs` WHERE post_iud = '$Id'");
    $row = mysqli_fetch_assoc($fetchDetailsQuery);
    $uid = $row['jobseeker_id'];
    mysqli_query($conn, "UPDATE `jobseeker` SET `bookmarked`='false' WHERE `jobseeker_id` = '$uid'");
    mysqli_query($conn, "DELETE FROM `applied_jobs` WHERE post_iud = '$Id'");
}