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
    // Get the employer_id based on the login session
    $employer_id = $_SESSION['user_id'];
    // Variable for holding the loop result of the query
    $tableData = "";

    // Pagination and Search Feature:
    // Variables to store the data
    $page = 0;
    // Set the item limit per page
    $pageLimit = 5;

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
        $search = trim($_POST['search']);

        // It search on the database to get the similar data based on the data that has been placed in the search bar
        $fetchDetailsQuery = "SELECT * FROM applied_jobs WHERE fullname LIKE '%$search%' LIMIT $start, $pageLimit";
        // Pagination  is the process of dividing a document into discrete pages, either electronic pages or printed pages.
        $paginationQuery = "SELECT * FROM applied_jobs WHERE employer_id = '$employer_id' AND fullname LIKE '%$search%'";
    }
    else {
        // Create query to get the employer information
        $fetchDetailsQuery = "SELECT * FROM applied_jobs WHERE employer_id = '$employer_id' LIMIT $start, $pageLimit";
        $paginationQuery = "SELECT * FROM applied_jobs WHERE employer_id = '$employer_id'";
    }

    $fetchDetailsQuery = mysqli_query($conn, $fetchDetailsQuery);
    
    while($row = mysqli_fetch_assoc($fetchDetailsQuery)) {
        $apply_id = $row['apply_id'];
        $jobseeker_id = $row['jobseeker_id'];

        $job_title = $row['job_title'];
        $status = $row['status'];
        $date_applied = dateTimeConvertion($row['date_applied']);

        $query = "SELECT * FROM jobseeker WHERE jobseeker_id = '$jobseeker_id'";
        $query = mysqli_query($conn, $query);
        while($row1 = mysqli_fetch_assoc($query)) {
            // Get the employer information needed to edit modal
            $resume = GetProfilePicLoc($row1['resume']);
            $fullname= $row1['fullname'];
        }

        // Fetching the data will exclude the 'Rejected' status from applied_jobs
        if ($status != 'Rejected') {
            // Increment the $tableData
            $tableData .= "
            <tr class = 'tr'>
                <td  data-title='Applicant Name'><b>{$fullname}</b></td>  
                <td  data-title='Resume'><b><a href='{$resume}' target='_blank'>View Resume</a></b></td>                                
                <td data-title='Job Applied'><b>{$job_title}</b></td>
                <td data-title='Date Applied'><b>{$date_applied}</b></td>
                <td  data-title='Status'><b>{$status}</b></td>

                <td data-title='Action'>
                <button  class='btn btn-info edit-btn' type='button' data-id='{$apply_id}' data-bs-toggle='modal' data-bs-target='#edit-modal'>Edit</button>
            ";

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
                    <button  class='btn btn-info bookmark-btn' type='button' data-id='{$jobseeker_id}' data-bs-toggle='modal' data-bs-target='#bookmark-modal'>Unbookmark</button>
                ";
            }
            $tableData .= "
                    
                    <button class='btn btn-info reject-btn' type='button' data-id='{$apply_id}' data-bs-toggle='modal' data-bs-target='#reject-modal'>Reject</button></td>
                </tr>
            ";
        }   
    }
    
    // Query to get the total number of employers
    $GetRecordsQuery = mysqli_query($conn, $paginationQuery);
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
                                <a class='page-link text-dark'>Next</a>
                            </li>";
    }

    // For entries display
    $entries_start = $start + 1;
    $entries_end = ceil($totalRecords / $pageLimit);
    $entries = "<span>Show <b>{$entries_start}</b> to <b>{$entries_end}</b> of {$totalRecords} entries</span>";

    mysqli_close($conn);

    // Stored and return the displays for employer management page
    $response = array(
        'tableData' => $tableData,
        'pagination' => $pagination,
        'entries' => $entries
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

    // Query 1
    $query = "SELECT * FROM `jobseeker` WHERE `jobseeker_id`='$jobseeker_id'";
    $query = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($query);
    $fullname = $row['fullname'];
    $resume = $row['resume'];

    // Query 2
    $query = "SELECT * FROM `applied_jobs` WHERE `jobseeker_id`='$jobseeker_id'";
    $query = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($query);
    $date_applied = $row['date_applied'];
 
    $date_applied = $row['date_applied'];

    // Check if the data was already bookmarked. If true delete the data.
    $count = "SELECT COUNT(*) as total FROM employer_bookmark WHERE jobseeker_id='$jobseeker_id' AND employer_id='$employer_id'";
    $count = mysqli_query($conn, $count);
    $count = mysqli_fetch_assoc($count);

    if ($count['total'] == 0) {
        // Delete them in bookmarks
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
    }
    else {
        $query = "DELETE FROM employer_bookmark WHERE jobseeker_id='$jobseeker_id' AND employer_id='$employer_id'";
    }

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

    $query = "SELECT * FROM employer_bookmark WHERE $apply_id";
    $query = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($query);

    $employer_id = $row['employer_id'];
    $jobseeker_id = $row['jobseeker_id'];

    // Check if the rejected applicant was included in the employer's bookmark
    $count = "SELECT COUNT(*) as total FROM employer_bookmark WHERE jobseeker_id='$jobseeker_id' AND employer_id='$employer_id'";
    $count = mysqli_query($conn, $count);
    $count = mysqli_fetch_assoc($count);

    if ($count['total'] != 0) {
        // Delete them in bookmarks
        $query = "DELETE FROM employer_bookmark WHERE jobseeker_id='$jobseeker_id' AND employer_id='$employer_id'";
        $query = mysqli_query($conn, $query);
    }

    // Update the application status of the jobseeker
    $query = "UPDATE `applied_jobs` SET `status` = 'Rejected' WHERE `apply_id`='$apply_id'";
    $query = mysqli_query($conn, $query);

    mysqli_close($conn);

    $response = array(
        // Blank
    );

    echo json_encode($response);
}