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

// Function for checking if verified or not
function isVerified($status)
{
    if ($status == 1) {
        return "Verified";
    } else {
        return "Not Verified";
    }
}

// Function for getting the company logo file name and dti file name
function getFiles($employerId)
{
    $GetFileQuery = mysqli_query($GLOBALS['conn'], "SELECT company_logo_name, permit_new_name FROM employer WHERE employer_id = '$employerId'");
    $row = mysqli_fetch_assoc($GetFileQuery);
    // Create assoc array
    $files = array(
        'company_logo_name' => $row['company_logo_name'],
        'permit_new_name' => $row['permit_new_name']
    );
    // Return assoc array
    return $files;
}

//check if profile pic is not null && if file exists  then returns a string value of the profile picture location
function getCompanyLogoLoc($company_logo_name)
{
    if ($company_logo_name != NULL && file_exists("../../storage/" . $company_logo_name)) {
        return "../storage/" . $company_logo_name;
    } else {
        return "../storage/noProfilePic.png";
    }
}

// Function for unlinking the files
function unlinkFiles($companyLogoName, $permitName)
{
    // Unlink the files
    unlink("../../storage/" . $companyLogoName);
    unlink("../../storage/" . $permitName);
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

// For loading of the employer management information
if (isset($_POST['loadData'])) {

    // Variables to store the data
    $page = 0;
    // Set the item limit per page
    $pageLimit = 2;
    // Variable for holding the loop result of the query
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
        $statement = "SELECT * FROM employer_recycle WHERE company_name LIKE '%$search%' OR employer_name LIKE '%$search%' OR employer_position LIKE '%$search%' OR email LIKE '%$search%' LIMIT $start, $pageLimit";
        $paginationStatement = "SELECT * FROM employer_recycle WHERE company_name LIKE '%$search%' OR employer_name LIKE '%$search%' OR employer_position LIKE '%$search%' OR email LIKE '%$search%'";
    } else {
        $statement = "SELECT * FROM employer_recycle LIMIT $start, $pageLimit";
        $paginationStatement = "SELECT * FROM employer_recycle";
    }

     //fetch all the employer info from the database
     $checkEmployerInfo = mysqli_query($conn, $statement);
     while ($row = mysqli_fetch_assoc($checkEmployerInfo)) {
        $employer_id = $row['employer_id'];
        $employer_name = $row['employer_name'];
        $employer_position = $row['employer_position'];
        $company_name = $row['company_name'];
        $company_address = $row['company_address'];
        $company_ceo = $row['company_ceo'];
        $company_size = $row['company_size'];
        $company_revenue = $row['company_revenue'];
        $industry = $row['industry'];
        $company_description = $row['company_description'];
        $contact_number = $row['contact_number'];
        $company_email = $row['company_email'];
        $company_logo_name = getCompanyLogoLoc($row['company_logo_name']);
        $permit_new_name = $row['permit_new_name'];
        $permit_original_name = $row['permit_original_name'];
        $email = $row['email'];
        $password = $row['password'];
        $otp_code = $row['otp_code'];
        $is_verified = $row['is_verified'];
        $date_created = dateTimeConvertion($row['date_created']);

         //storing the data into $output.
         $tableData .=  "<tr class='tr'>
                             <td class='view-pp'><img src='{$company_logo_name}' class='image' alt='' data-bs-toggle='modal' data-bs-target='#profile'></td>
                             <td>{$company_name}</td>
                             <td>{$employer_name}</td>
                             <td>{$employer_position}</td>
                             <td>{$email}</td>
                             <td>{$permit_original_name}</td>
                             <td>{$is_verified}</td>
                             <td>
                             <button data-id='{$employer_id}' class='btn text-white btn-success restore-Btn' title='Restore' type='button' id='btn-info'><i class='fa-solid fa-clock-rotate-left'></i></button>
                             <button data-id='{$employer_id}' class='btn btn-danger delete-Btn' title='Delete' type='button' id='btn-info' data-bs-toggle='modal' data-bs-target='#exampleModal'><i class='bi bi-trash3'></i></button>
                             </td>
                         </tr>";
     }
     // Query to get the total number of employers
    $GetRecordsQuery = mysqli_query($conn, $paginationStatement);
    // Query to get the total number of employers
    $totalRecords = mysqli_num_rows($GetRecordsQuery);
    // Calculate the total number of employers
    $totalPages = ceil($totalRecords / $pageLimit);
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

// when user delete a employer
if (isset($_POST['deleteemployer'])) {
    $employerId = mysqli_real_escape_string($conn, $_POST['employerId']);
    $employerDP = getFiles($employerId)['company_logo_name'];
    
// deleting the employer in the database
    mysqli_query($conn, "DELETE FROM employer_recycle WHERE employer_id = '$employerId'");
}

//when user restore employer from recycle bin and moving it to back to employer
if (isset($_POST['restoreemployer'])) {
    $employerId = mysqli_real_escape_string($conn, $_POST['employerId']);
    $companyLogoName = getFiles($employerId)['company_logo_name'];
    $permitName = getFiles($employerId)['permit_new_name'];

    $fetchDeletedQuery = mysqli_query($conn, "SELECT * FROM employer_recycle WHERE employer_id = '$employerId'");
    $row = mysqli_fetch_assoc($fetchDeletedQuery);

    $employer_id = $row['employer_id'];
    $employer_name = $row['employer_name'];
    $employer_position = $row['employer_position'];
    $company_name = $row['company_name'];
    $company_address = $row['company_address'];
    $company_ceo = $row['company_ceo'];
    $company_size = $row['company_size'];
    $company_revenue = $row['company_revenue'];
    $industry = $row['industry'];
    $company_description = $row['company_description'];
    $contact_number = $row['contact_number'];
    $company_email = $row['company_email'];
    $company_logo_name = $row['company_logo_name'];
    $permit_new_name = $row['permit_new_name'];
    $permit_original_name = $row['permit_original_name'];
    $email = $row['email'];
    $password = $row['password'];
    $otp_code = $row['otp_code'];
    $is_verified = $row['is_verified'];
    $date_created = $row['date_created'];



    mysqli_query($conn, "INSERT INTO employer (employer_id, employer_name, employer_position, company_name, company_address, company_ceo, company_size, company_revenue, industry, company_description, contact_number, company_email, company_logo_name, permit_new_name, permit_original_name, email, password, otp_code, is_verified, date_created)
                        VALUES ('$employer_id', '$employer_name', '$employer_position', '$company_name', '$company_address', ' $company_ceo', '$company_size', '$company_revenue', '$industry', '$company_description','$contact_number', '$company_email', '$company_logo_name', '$permit_new_name', '$permit_original_name', '$email', '$password', '$otp_code', '$is_verified', '$date_created')");

    mysqli_query($conn, "DELETE FROM employer_recycle WHERE employer_id = '$employerId'");                     
}