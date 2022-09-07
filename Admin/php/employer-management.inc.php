<?php
// Errors Found:
// - The search bar was not properly functioned.

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
    $pageLimit = 5;
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
        $search = trim($_POST['search']);

        $statement = "SELECT * FROM employer WHERE company_name LIKE '%$search%' OR employer_name LIKE '%$search%' OR employer_position LIKE '%$search%' OR email LIKE '%$search%' LIMIT $start, $pageLimit";
        $paginationStatement = "SELECT * FROM employer WHERE company_name LIKE '%$search%' OR employer_name LIKE '%$search%' OR employer_position LIKE '%$search%' OR email LIKE '%$search%'";
    }

    else {
        $statement = "SELECT * FROM employer LIMIT $start, $pageLimit";
        $paginationStatement = "SELECT * FROM employer";
    }
    
    // Get all employer information from the database
    $EmployerInfoQuery = mysqli_query($conn, $statement);    

    while ($row = mysqli_fetch_assoc($EmployerInfoQuery)) {
        // Get the employer information needed to table
            $employerId = $row['employer_id'];
            $companyLogo = "../storage/" . $row['company_logo_name'];
            $companyName = $row['company_name'];
            $employerName = $row['employer_name'];
            $employerPosition = $row['employer_position'];
            $email = $row['email'];
            $permitName = "../storage/" . $row['permit_new_name'];
            $permitOriginalName = $row['permit_original_name'];
            $status = $row['is_verified'];
            // Append the employer information to the output variable
            $tableData .= "<tr class='tr'>
                            <td class='view-logo'><img src='{$companyLogo}' alt='' class='img-logo' data-bs-toggle='modal' data-bs-target='#companylogo'></td>
                            <td>{$companyName}</td>
                            <td>{$employerName}</td>
                            <td>{$employerPosition}</td>
                            <td>{$email}</td>
                            <td><i class='fa-solid fa-file-lines me-1'></i><a href='{$permitName}' download='{$permitOriginalName}'>{$permitOriginalName}</a></td>
                            <td>" . isVerified($status) . "</td> 
                            <td>
                                <button class='btn-primary more-details' data-id='{$employerId}'  type='button' id='btn-info' data-bs-toggle='modal' data-bs-target='#modal-viewdetails' title='View Details'><i class='fa-solid fa-eye'></i></button>
                                <button class='btn-success fetch-details'  data-id='{$employerId}' type='button' id='btn-info' data-bs-toggle='modal' data-bs-target='#modal-editdetails' title='Edit Details'><i class='fa fa-pen-to-square'></i></button>
                                <button class='btn btn-danger delete-employer' data-id='{$employerId}' type='button' id='btn-info' data-bs-toggle='modal' data-bs-target='#modal-delete' title='Delete'><i class='bi bi-trash3'></i></button>
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
                                <a class='page-link text-dark'>Next</a>
                            </li>";
    }

    // For entries display
    $entries_start = $start + 1;
    $entries_end = ceil($totalRecords / $pageLimit);
    $entries = "<span>Show <b>{$entries_start}</b> to <b>{$entries_end}</b> of {$totalRecords} entries</span>";

    // Stored and return the displays for employer management page
    $response = array(
        'tableData' => $tableData,
        'pagination' => $pagination,
        'entries' => $entries,
    );
    // Return this output variable to the ajax call
    echo json_encode($response);
}

// When user click more details button
if (isset($_POST['moreDetails'])) {
    $employerId = mysqli_real_escape_string($conn, $_POST['employerId']);
    // Create query to get the employer information
    $moreDetailsQuery = mysqli_query($conn, "SELECT * FROM employer WHERE employer_id = '$employerId'");
    $row = mysqli_fetch_assoc($moreDetailsQuery);
    // Get the employer information needed to more details modal
    $companyAddress = $row['company_address'];
    $companyCEO = $row['company_ceo'];
    $companySize = $row['company_size'];
    $companyRevenue = $row['company_revenue'];
    $industry = $row['industry'];
    $contactNumber = $row['contact_number'];
    $companyEmail = $row['company_email'];
    $companyDescription = nl2br($row['company_description']);
    $dateCreated = dateTimeConvertion($row['date_created']);

    // Create Assoc array to return to the ajax call
    $response = array(
        'companyAddress' => $companyAddress,
        'companyCEO' => $companyCEO,
        'companySize' => $companySize,
        'companyRevenue' => $companyRevenue,
        'industry' => $industry,
        'contactNumber' => $contactNumber,
        'companyEmail' => $companyEmail,
        'companyDescription' => $companyDescription,
        'dateCreated' => $dateCreated
    );

    echo json_encode($response);
}

// When user click yes in delete employer modal confirmation
if (isset($_POST['deleteEmployer'])) {
    $employerId = mysqli_real_escape_string($conn, $_POST['employerId']);
    $companyLogoName = getFiles($employerId)['company_logo_name'];
    $permitName = getFiles($employerId)['permit_new_name'];

    $fetchDeletedQuery = mysqli_query($conn, "SELECT * FROM employer WHERE employer_id = '$employerId'");
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

    mysqli_query($conn, "INSERT INTO employer_recycle (employer_id, employer_name, employer_position, company_name, company_address, company_ceo, company_size, company_revenue, industry, company_description, contact_number, company_email, company_logo_name, permit_new_name, permit_original_name, email, password, otp_code, is_verified, date_created)
                        VALUES ('$employer_id', '$employer_name', '$employer_position', '$company_name', '$company_address', ' $company_ceo', '$company_size', '$company_revenue', '$industry', '$company_description','$contact_number', '$company_email', '$company_logo_name', '$permit_new_name', '$permit_original_name', '$email', '$password', '$otp_code', '$is_verified', '$date_created')");
    
    // Create query to delete the employer
    mysqli_query($conn, "DELETE FROM employer WHERE employer_id = '$employerId'");
   
    // Return nothing
}

// When user click edit button return the selected employer information
if (isset($_POST['fetchDetails'])) {
    $employerId = mysqli_real_escape_string($conn, $_POST['employerId']);
    // Create query to get the employer information
    $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM employer WHERE employer_id = '$employerId'");
    $row = mysqli_fetch_assoc($fetchDetailsQuery);
    // Get the employer information needed to edit modal
    $employerName = $row['employer_name'];
    $employerPosition = $row['employer_position'];
    $companyName = $row['company_name'];
    $companyAddress = $row['company_address'];
    $CEOname = $row['company_ceo'];
    $companySize = $row['company_size'];
    $companyRevenue = $row['company_revenue'];
    $industry = $row['industry'];
    $companyNumber = $row['contact_number'];
    $companyEmail = $row['company_email'];
    $companyDescription = $row['company_description'];
    $verificationStatus = $row['is_verified'];

    // Create Assoc array to return to the ajax call
    $response = array(
        'status' => "success",
        'employerName' => $employerName,
        'employerPosition' => $employerPosition,
        'companyName' => $companyName,
        'companyAddress' => $companyAddress,
        'CEOname' => $CEOname,
        'companySize' => $companySize,
        'companyRevenue' => $companyRevenue,
        'industry' => $industry,
        'companyNumber' => $companyNumber,
        'companyEmail' => $companyEmail,
        'companyDescription' => $companyDescription,
        'verificationStatus' => $verificationStatus
    );

    echo json_encode($response);
}

// When user click save details button in edit modal
if (isset($_POST['saveDetails'])) {

    // <--------------------------------------- VALIDATIONS ------------------------------------------------------->
    // Validation for employee name
    if (empty($_POST['employerName'])) {
        $employerNameRR = array('status' => 'error', 'message' => 'Employer Fullname is required.');
    } elseif (!isValidFullname($_POST['employerName'])) {
        $employerNameRR = array('status' => 'error', 'message' => 'Only characters are allowed.');
    } else {
        $employerNameRR = array('status' => 'success');
        $employerName = sanitize_input($_POST['employerName']);
    }

    // Validation for employer position
    if (empty($_POST['employerPosition'])) {
        $employerPositionRR = array('status' => 'error', 'message' => 'Employer Position is required.');
    } else {
        $employerPositionRR = array('status' => 'success');
        $employerPosition = sanitize_input($_POST['employerPosition']);
    }

    // Validation for company name
    if (empty($_POST['companyName'])) {
        $companyNameRR = array('status' => 'error', 'message' => 'Company Name is required.');
    } else {
        $companyNameRR = array('status' => 'success');
        $companyName = sanitize_input($_POST['companyName']);
    }

    // Validation for company address
    if (empty($_POST['companyAddress'])) {
        $companyAddressRR = array('status' => 'error', 'message' => 'Company Address is required.');
    } else {
        $companyAddressRR = array('status' => 'success');
        $companyAddress = sanitize_input($_POST['companyAddress']);
    }

    // Validation for company address
    if (empty($_POST['CEOname'])) {
        $companyCEORR = array('status' => 'error', 'message' => 'Company CEO name is required.');
    } elseif (!isValidFullname($_POST['CEOname'])) {
        $companyCEORR = array('status' => 'error', 'message' => 'Only characters are allowed.');
    } else {
        $companyCEORR = array('status' => 'success');
        $companyCEO = sanitize_input($_POST['CEOname']);
    }

    // Validation for company size
    if (empty($_POST['companySize'])) {
        $companySizeRR = array('status' => 'error', 'message' => 'Company Size is required.');
    } elseif (!isValidNumber($_POST['companySize'])) {
        $companySizeRR = array('status' => 'error', 'message' => 'Only numbers are allowed.');
    } else {
        $companySizeRR = array('status' => 'success');
        $companySize = sanitize_input($_POST['companySize']);
    }

    // Validation for company revenue
    if (empty($_POST['companyRevenue'])) {
        $companyRevenueRR = array('status' => 'error', 'message' => 'Company Revenue is required.');
    } elseif (!isValidNumber($_POST['companyRevenue'])) {
        $companyRevenueRR = array('status' => 'error', 'message' => 'Only numbers are allowed.');
    } else {
        $companyRevenueRR = array('status' => 'success');
        $companyRevenue = sanitize_input($_POST['companyRevenue']);
    }

    // Validation for industry
    if (empty($_POST['industry'])) {
        $industryRR = array('status' => 'error', 'message' => 'Industry is required.');
    } else {
        $industryRR = array('status' => 'success');
        $industry = sanitize_input($_POST['industry']);
    }

    // Validation for contact number
    if (empty($_POST['companyNumber'])) {
        $contactNumberRR = array('status' => 'error', 'message' => 'Contact Number is required.');
    } elseif (!preg_match('/^[0-9]*$/', $_POST['companyNumber'])) {
        $contactNumberRR = array('status' => 'error', 'message' => 'Only numbers are allowed.');
    } else {
        $contactNumberRR = array('status' => 'success');
        $contactNumber = sanitize_input($_POST['companyNumber']);
    }

    // Validation for company email 
    if (empty($_POST['companyEmail'])) {
        $companyEmailRR = array('status' => 'error', 'message' => 'Company Email is required.');
    } elseif (!filter_var($_POST['companyEmail'], FILTER_VALIDATE_EMAIL)) {
        $companyEmailRR = array('status' => 'error', 'message' => 'Email is invalid.');
    } else {
        $companyEmailRR = array('status' => 'success');
        $companyEmail = sanitize_input($_POST['companyEmail']);
    }

    // Validation for company description
    if (empty($_POST['companyDescription'])) {
        $companyDescriptionRR = array('status' => 'error', 'message' => 'Company Description is required.');
    } elseif (strlen($_POST['companyDescription']) < 50) {
        $companyDescriptionRR = array('status' => 'error', 'message' => 'Atleast 50 characters are required.');
    } else {
        $companyDescriptionRR = array('status' => 'success');
        $companyDescription = sanitize_input($_POST['companyDescription']);
    }

    // Validation for industry
    // used to protect db  users that will inspect element the value="0"or"1"
    if ($_POST['verificationStatus'] == "0" || $_POST['verificationStatus'] == "1") {
        $verificationStatusRR = array('status' => 'success');
    } else {
        $verificationStatusRR = array('status' => 'error', 'message' => 'Invalid Verification Status');
    }

    // <---------------------------------------END OF VALIDATIONS ------------------------------------------------------->

    if (
        $employerNameRR['status'] == 'success' && $employerPositionRR['status'] == 'success' && $companyNameRR['status'] == 'success'
        && $companyNameRR['status'] == 'success' && $companyAddressRR['status'] == 'success' && $companyCEORR['status'] == 'success'
        && $companySizeRR['status'] == 'success' && $companyRevenueRR['status'] == 'success' && $industryRR['status'] == 'success'
        && $contactNumberRR['status'] == 'success' && $companyEmailRR['status'] == 'success' && $companyDescriptionRR['status'] == 'success'
        && $verificationStatusRR['status'] == 'success'
    ) {

        // Assigned the post data to new variable, escape the data to prevent sql injection, and sanitize the data
        $employerId = mysqli_real_escape_string($conn, sanitize_input($_POST['employerId']));
        $employerName = mysqli_real_escape_string($conn, $employerName);
        $employerPosition = mysqli_real_escape_string($conn, $employerPosition);
        $companyName = mysqli_real_escape_string($conn, $companyName);
        $companyAddress = mysqli_real_escape_string($conn, $companyAddress);
        $companyCEO = mysqli_real_escape_string($conn, $companyCEO);
        $companySize = mysqli_real_escape_string($conn, $companySize);
        $companyRevenue = mysqli_real_escape_string($conn, $companyRevenue);
        $industry = mysqli_real_escape_string($conn, $industry);
        $companyNumber = mysqli_real_escape_string($conn, $contactNumber);
        $companyEmail = mysqli_real_escape_string($conn, $companyEmail);
        $companyDescription = mysqli_real_escape_string($conn, $companyDescription);
        $verificationStatus = mysqli_real_escape_string($conn, sanitize_input($_POST['verificationStatus']));


        // Create query to update the employer information
        mysqli_query($conn, "UPDATE employer SET
                    employer_name = '$employerName', 
                    employer_position = '$employerPosition', 
                    company_name = '$companyName', 
                    company_address = '$companyAddress', 
                    company_ceo = '$companyCEO', 
                    company_size = '$companySize', 
                    company_revenue = '$companyRevenue', 
                    industry = '$industry', 
                    contact_number = '$companyNumber', 
                    company_email = '$companyEmail', 
                    company_description = '$companyDescription', 
                    is_verified = '$verificationStatus' 
                    WHERE employer_id = '$employerId'");

        $response = array('status' => 'success');
    } else {
        // Return error status
        $response = array(
            'status' => 'error',
            'employerNameRR' => $employerNameRR,
            'employerPositionRR' => $employerPositionRR,
            'companyNameRR' => $companyNameRR,
            'companyAddressRR' => $companyAddressRR,
            'companyCEORR' => $companyCEORR,
            'companySizeRR' => $companySizeRR,
            'companyRevenueRR' => $companyRevenueRR,
            'industryRR' => $industryRR,
            'companyDescriptionRR' => $companyDescriptionRR,
            'contactNumberRR' => $contactNumberRR,
            'companyEmailRR' => $companyEmailRR,
            'verificationStatusRR' => $verificationStatusRR
        );
    }

    // Return the JSON response
    echo json_encode($response);
}
