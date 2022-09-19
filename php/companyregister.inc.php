<?php
// include our database connection file to establish connection
include 'db-connection.php';

// Function for checking in jobseeker table
function isJobseeker($email)
{
    // Query to check if email is existing in jobseeker table
    $checkEmail = mysqli_query($GLOBALS['conn'], "SELECT jobseeker_id ,email, password FROM jobseeker WHERE email = '$email'");
    // Check if email is existing in our database
    if (mysqli_num_rows($checkEmail) > 0) {
        return true;
    } else {
        return false;
    }
}

// Function for checking in employer table
function isEmployer($email)
{
    // Query to check if email is existing in employer table
    $checkEmail = mysqli_query($GLOBALS['conn'], "SELECT employer_id, email, password FROM employer WHERE email = '$email'");
    // Check if email is existing in our database
    if (mysqli_num_rows($checkEmail) > 0) {
        return true;
    } else {
        return false;
    }
}

//  Function for Sanitizing all input data 
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// For generating random string
function generateRandomString()
{
    $rand1 = rand(1111, 9999);   //  generate random number in $var1 variable
    $rand2 = rand(1111, 9999);   //  generate random number in $var2 variable
    $rand3 = $rand1 . $rand2;   //  concatenate $var1 and $var2 in $var3
    return $idImageName = md5($rand3);  //  convert $var3 using md5 function and generate 32 characters hex number
}

// Function for checking if email is already used 
function isEmailExist($email)
{
    $email = mysqli_real_escape_string($GLOBALS['conn'], $email);
    $CheckEmailQuery = mysqli_query($GLOBALS['conn'], "SELECT email FROM employer WHERE email = '$email'");
    if (mysqli_num_rows($CheckEmailQuery) > 0) {
        return true;
    } else {
        return false;
    }
}

// Function for storing files into storage folder for profile pictures
function InsertIntoPicStorage($tmp_name, $filename)
{
    $target_directory = "../storage/profile pictures/employers/";
    $path =  $target_directory . $filename;
    move_uploaded_file($tmp_name, $path);
}

// Function for storing files into storage folder for the DTI FILES
function InsertIntoDTIStorage($tmp_name, $filename)
{
    $target_directory = "../storage/DTI/";
    $path =  $target_directory . $filename;
    move_uploaded_file($tmp_name, $path);
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

// If Signup button is clicked it goes here
if (isset($_POST['submit'])) {
    // Create array for checking of valid extension for Permit
    $allowed_permit_extension = array("pdf");
    // Create array for checking of valid extension for logo
    $allowed_logo_extension = array("png", "jpg", "jpeg");

    // <---------------------------------------Employers Details Validation---------------------------------------------------->
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

    // <---------------------------------------Company Details Validation------------------------------------------------------->
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
    if (empty($_POST['companyCEO'])) {
        $companyCEORR = array('status' => 'error', 'message' => 'Company CEO name is required.');
    } elseif (!isValidFullname($_POST['companyCEO'])) {
        $companyCEORR = array('status' => 'error', 'message' => 'Only characters are allowed.');
    } else {
        $companyCEORR = array('status' => 'success');
        $companyCEO = sanitize_input($_POST['companyCEO']);
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

    // Validation for company description
    if (empty($_POST['companyDescription'])) {
        $companyDescriptionRR = array('status' => 'error', 'message' => 'Company Description is required.');
    } elseif (strlen($_POST['companyDescription']) < 50) {
        $companyDescriptionRR = array('status' => 'error', 'message' => 'Atleast 50 characters are required.');
    } else {
        $companyDescriptionRR = array('status' => 'success');
        $companyDescription = sanitize_input($_POST['companyDescription']);
    }

    // Validation for contact number
    if (empty($_POST['contactNumber'])) {
        $contactNumberRR = array('status' => 'error', 'message' => 'Contact Number is required.');
    } elseif (!preg_match('/^[0-9]*$/', $_POST['contactNumber'])) {
        $contactNumberRR = array('status' => 'error', 'message' => 'Only numbers are allowed.');
    } else {
        $contactNumberRR = array('status' => 'success');
        $contactNumber = sanitize_input($_POST['contactNumber']);
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

    if (!isset($_FILES["companyLogo"])) {
        $companyLogoRR = array('status' => 'error', 'message' => 'Company Logo is required.');
    } elseif (!in_array(pathinfo($_FILES["companyLogo"]["name"], PATHINFO_EXTENSION), $allowed_logo_extension)) {
        $companyLogoRR = array('status' => 'error', 'message' => 'Only PNG, JPG, JPEG are allowed.');
    } elseif (($_FILES["companyLogo"]["size"] > 15000000)) {
        $companyLogoRR = array('status' => 'error', 'message' => 'Must be less than 15MB.');
    } else {
        $companyLogoRR = array('status' => 'success');
        $companyLogoExtension = pathinfo($_FILES["companyLogo"]["name"], PATHINFO_EXTENSION);
    }

    if (!isset($_FILES["permit"])) {
        $permitRR = array('status' => 'error', 'message' => 'DTI Permit is required.');
    } elseif (!in_array(pathinfo($_FILES["permit"]["name"], PATHINFO_EXTENSION), $allowed_permit_extension)) {
        $permitRR = array('status' => 'error', 'message' => 'Only PDF are allowed.');
    } elseif (($_FILES["permit"]["size"] > 5000000)) {
        $permitRR = array('status' => 'error', 'message' => 'Must be less than 5MB.');
    } else {
        $permitRR = array('status' => 'success');
        $permitExtension = pathinfo($_FILES["permit"]["name"], PATHINFO_EXTENSION);
    }

    // <---------------------------------------Login Details Validation------------------------------------------------------->

    // Validation for email 
    if (empty($_POST['email'])) {
        $emailRR = array('status' => 'error', 'message' => 'Email Address is required.');
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $emailRR = array('status' => 'error', 'message' => 'Email is invalid.');
    } elseif (isEmployer($_POST['email']) || isJobseeker($_POST['email'])) {
        $emailRR = array('status' => 'error', 'message' => 'Email is already used.');
    } else {
        $emailRR = array('status' => 'success');
        $email = sanitize_input($_POST['email']);
    }

    // Validation for password
    if (empty($_POST['password'])) {
        $passwordRR = array('status' => 'error', 'message' => 'Password is required.');
    } elseif (strlen($_POST['password']) < 8 || strlen($_POST['password']) > 30) {
        $passwordRR = array('status' => 'error', 'message' => 'Password must be between 8 and 30 characters.');
    } else {
        $passwordRR = array('status' => 'success');
        $password = $_POST['password'];
    }


    // Validation for confirmpassword
    if (empty($_POST['confirmPassword'])) {
        $confirmPasswordRR = array('status' => 'error', 'message' => 'Confirm Password is required.');
    } elseif ($_POST['password'] != $_POST['confirmPassword']) {
        $confirmPasswordRR = array('status' => 'error', 'message' => 'Confirm Password does not match.');
    } else {
        $confirmPasswordRR = array('status' => 'success');
    }

    // <--------------------------------------- END OF VALIDATIONS ------------------------------------------------------->

    // Check if all the inputs are successfully validated
    if (
        $employerNameRR['status'] == 'success' && $employerPositionRR['status'] == 'success' && $companyNameRR['status'] == 'success'
        && $companyAddressRR['status'] == 'success' && $companyCEORR['status'] == 'success'  && $companySizeRR['status'] == 'success'
        && $companyRevenueRR['status'] == 'success' && $industryRR['status'] == 'success' && $companyDescriptionRR['status'] == 'success'
        && $contactNumberRR['status'] == 'success' && $companyEmailRR['status'] == 'success' && $emailRR['status'] == 'success'
        && $passwordRR['status'] == 'success' && $confirmPasswordRR['status'] == 'success' && $companyLogoRR['status'] == 'success'
        && $permitRR['status'] == 'success'
    ) {

        // Escape all the inputs and store them in the same variable
        $employerName = mysqli_real_escape_string($conn, $employerName);
        $employerPosition = mysqli_real_escape_string($conn, $employerPosition);
        $companyName = mysqli_real_escape_string($conn, $companyName);
        $companyAddress = mysqli_real_escape_string($conn, $companyAddress);
        $companyCEO = mysqli_real_escape_string($conn, $companyCEO);
        $companySize = mysqli_real_escape_string($conn, $companySize);
        $companyRevenue = mysqli_real_escape_string($conn, $companyRevenue);
        $industry = mysqli_real_escape_string($conn, $industry);
        $companyDescription = mysqli_real_escape_string($conn, $companyDescription);
        $contactNumber = mysqli_real_escape_string($conn, $contactNumber);
        $companyEmail = mysqli_real_escape_string($conn, $companyEmail);
        $companyLogoNewName = generateRandomString() . '.' . $companyLogoExtension;
        $permitNewName = generateRandomString() . '.' . $permitExtension;
        $permitOriginalName = $_FILES["permit"]["name"];
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, password_hash($password, PASSWORD_DEFAULT));

        // Insert the query to the database
        mysqli_query($conn, "INSERT INTO employer (employer_name, employer_position, company_name, company_address, company_ceo, 
                company_size, company_revenue, industry, company_description, contact_number, company_email, company_logo_name, permit_new_name, 
                permit_original_name, email, password, is_verified, date_created) VALUES ('$employerName', '$employerPosition', '$companyName', 
                '$companyAddress', '$companyCEO', '$companySize', '$companyRevenue', '$industry', '$companyDescription', '$contactNumber',
                '$companyEmail', '$companyLogoNewName', '$permitNewName', '$permitOriginalName', '$email', '$password', '0', NOW())");
        InsertIntoPicStorage($_FILES["companyLogo"]["tmp_name"], $companyLogoNewName);
        InsertIntoDTIStorage($_FILES["permit"]["tmp_name"], $permitNewName);

        // Return success status
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
            'emailRR' => $emailRR,
            'passwordRR' => $passwordRR,
            'confirmPasswordRR' => $confirmPasswordRR,
            'companyLogoRR' => $companyLogoRR,
            'permitRR' => $permitRR
        );
    }

    // Return the JSON response
    echo json_encode($response);
}
