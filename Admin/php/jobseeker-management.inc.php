<?php
//includes db connection from 2 folders back
include '../../php/db-connection.php';

//  Function for Sanitizing all input data 
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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

//check if profile pic is not null && if file exists  then returns a string value of the profile picture location
function getProfilePicLoc($profilePic)
{
    if ($profilePic != NULL && file_exists("../../storage/profile pictures/jobseeker/" . $profilePic)) {
        return "../storage/profile pictures/jobseeker/" . $profilePic;
    } else {
        return "../storage/placeholder/noProfilePic.png";
    }
}

// Convert old date time into textual format
function dateTimeConvertion($date)
{
    return date('M d, Y, h:i A', strtotime($date));
}

// Function for validating if input is valid fullname
function isValidFullname($fullname)
{
    if (preg_match("/^[a-zA-Z .]*$/", $fullname)) {
        return true;
    } else {
        return false;
    }
}

// Function for validating if inout is valid number
function isValidNumber($number)
{
    if (preg_match("/^[0-9]*$/", $number)) {
        return true;
    } else {
        return false;
    }
}


if (isset($_POST['loadData'])) {
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
        $search = trim($_POST['search']);
        $statement = "SELECT * FROM jobseeker WHERE fullname LIKE '%$search%' OR mobile_number LIKE '%$search%' OR email LIKE '%$search%' LIMIT $start, $pageLimit";
        $paginationStatement = "SELECT * FROM jobseeker WHERE fullname LIKE '%$search%' OR mobile_number LIKE '%$search%' OR email LIKE '%$search%'";
    } else {
        $statement = "SELECT * FROM jobseeker LIMIT $start, $pageLimit";
        $paginationStatement = "SELECT * FROM jobseeker";
    }
    //fetch all the jobseeker info from the database
    $checkJobseekerInfo = mysqli_query($conn, $statement);
    while ($row = mysqli_fetch_assoc($checkJobseekerInfo)) {
        $jobseekerId = $row['jobseeker_id'];
        $profilePicture = getProfilePicLoc($row['profile_picture']);
        $jobseekerId = $row['jobseeker_id'];
        $fullName = $row['fullname'];
        $resume = "../storage" . $row['resume'];
        $email = $row['email'];
        $number = $row['mobile_number'];
        $date = dateTimeConvertion($row['date_created']);
        //storing the data into $output.
        $tableData .=  "<tr class='tr'>
                            <td class='view-pp'><img src='{$profilePicture}' class='image' alt='' data-bs-toggle='modal' data-bs-target='#profile'></td>
                            <td>{$fullName}</td>
                            <td>{$number}</td>
                            <td>{$email}</td>
                            <td>{$date}</td>
                            <td>              
                                <button class='edit btn-success fetch-details' type='button' id='btn-info' data-id='{$jobseekerId}' data-bs-toggle='modal' data-bs-target='#modal-editdetails' title='Edit Details'><i class='fa-solid fa-pen-to-square'></i></button>                                  
                                <button class='btn btn-danger delete-Btn' type='button' id='btn-info'  data-id='{$jobseekerId}' data-bs-toggle='modal' data-bs-target='#modal-delete' title='Delete'><i class='bi bi-trash3'></i></button>
                            </td>
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

// when user delete a jobseeker
if (isset($_POST['deleteJobseeker'])) {
    $jobseekerId = mysqli_real_escape_string($conn, $_POST['jobseekerId']);
    $jobseekerDP = getFiles($jobseekerId)['profile_picture'];

    //deleting the jobseeker and moving it to recycle bin
    $fetchDeletedQuery = mysqli_query($conn, "SELECT * FROM jobseeker WHERE jobseeker_id = '$jobseekerId'");
    $row = mysqli_fetch_assoc($fetchDeletedQuery);
    $jobseeker_id = $row['jobseeker_id'];
    $fullname = $row['fullname'];
    $mobile_number = $row['mobile_number'];
    $profile_picture = $row['profile_picture'];
    $resume = $row['resume'];
    $otp_code = $row['otp_code'];
    $email = $row['email'];
    $password = $row['password'];
    $date_created = $row['date_created'];

    mysqli_query($conn, "INSERT INTO jobseeker_recyclebin (jobseeker_id, fullname, mobile_number, profile_picture, resume, otp_code, email, password, date_created)
                        VALUES ('$jobseeker_id', '$fullname', '$mobile_number', '$profile_picture', '$resume', '$otp_code', '$email', '$password', '$date_created')");

    mysqli_query($conn, "DELETE FROM jobseeker WHERE jobseeker_id = '$jobseekerId'");
}


// When user click edit button return the selected employer information
if (isset($_POST['fetchDetails'])) {
    $jobseekerId = mysqli_real_escape_string($conn, $_POST['jobseekerId']);
    // Create query to get the employer information
    $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM jobseeker WHERE jobseeker_id = '$jobseekerId'");
    $row = mysqli_fetch_assoc($fetchDetailsQuery);
    // Get the employer information needed to edit modal
    $jobseekerName = $row['fullname'];
    $jobseekerNumber = $row['mobile_number'];
    $jobseekerEmail = $row['email'];

    // Create Assoc array to return to the ajax call    
    $response = array(
        'jobseekerName' => $jobseekerName,
        'jobseekerNumber' => $jobseekerNumber,
        'jobseekerEmail' => $jobseekerEmail
    );

    echo json_encode($response);
}

// When user click save details button in edit modal
if (isset($_POST['saveDetails'])) {

    // Validation for Fullname
    if (empty($_POST['jobseekerName'])) {
        $fullnameRR = array('status' => 'error', 'message' => 'Fullname is required.');
    } else if (!isValidFullname($_POST['jobseekerName'])) {
        $fullnameRR = array('status' => 'error', 'message' => 'Only characters are allowed.');
    } else {
        $fullnameRR = array('status' => 'success');
    }

    // Validation for mobilenumber
    if (empty($_POST['jobseekerNumber'])) {
        $mobilenumberRR = array('status' => 'error', 'message' => 'Mobile number is required.');
    } elseif (!isValidNumber($_POST['jobseekerNumber'])) {
        $mobilenumberRR = array('status' => 'error', 'message' => 'Mobile number must be numeric.');
    } else {
        $mobilenumberRR = array('status' => 'success');
    }

    // Check if all the validation are successful or not
    if ($fullnameRR['status'] == 'success' && $mobilenumberRR['status'] == 'success') {
        // Assigned the post data to new variable, escape the data to prevent sql injection, and sanitize the data
        $jobseekerId = mysqli_real_escape_string($conn, sanitize_input($_POST['jobseekerId']));
        $jobseekerName = mysqli_real_escape_string($conn, sanitize_input($_POST['jobseekerName']));
        $jobseekerNumber = mysqli_real_escape_string($conn, sanitize_input($_POST['jobseekerNumber']));
        // Create query to update the jobseeker information
        mysqli_query($conn, "UPDATE jobseeker SET fullname = '$jobseekerName', mobile_number = '$jobseekerNumber' WHERE jobseeker_id = '$jobseekerId'");

        // Return this as status success response
        $response = array('status' => 'success');
    } else {
        $response = array('status' => 'error', 'fullnameRR' => $fullnameRR, 'mobilenumberRR' => $mobilenumberRR);
    }

    // Return the response
    echo json_encode($response);
}
