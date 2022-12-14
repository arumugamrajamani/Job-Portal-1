<?php
//includes db connection from 2 folders back
include '../../php/db-connection.php';
session_start();

 //  Function for Sanitizing all input data 
 function sanitize_input($data){
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

// Function for storing files into storage folder
function InsertIntoStorage($tmp_name, $filename)
{
    //$target_directory = "../storage/";
    $path =  "../../storage/" . $filename;
    move_uploaded_file($tmp_name, $path);
}

// Function for validating if input is valid fullname
function isValidFullname($fullname){
    if(preg_match("/^[a-zA-Z .]*$/", $fullname)){
        return true;
    } else {
        return false;
    }
}

// Function for validating if input is valid address
function isValidAddress($company_address){
    if(preg_match("/^[a-zA-Z0-9\s,.'-]*$/", $company_address)){
        return true;
    } else {
        return false;
    }
}

// Function for validating if inout is valid number
function isValidNumber($number){
    if(preg_match("/^[0-9]*$/", $number)){
        return true;
    } else {
        return false;
    }
}

// check if profile pic is not null && if file exists  then returns a string value of the profile picture location
function getCompanyLogoLoc($companyLogo)
{
    if ($companyLogo != NULL && file_exists("../../storage/" . $companyLogo)) {
        return "../storage/" . $companyLogo;
    } else {
        return "../storage/nocompany_logo_new.png";
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
    $companyDescription = $row['company_description'];
    $logoPic = getCompanyLogoLoc($row['company_logo_name']);
    $companyCeoName = $row['company_ceo'];
    $companySize = $row['company_size'];
    $companyRevenue = $row['company_revenue'];
    $industry = $row['industry'];
    $permitOriginalName = $row['permit_original_name'];

    // Create Assoc array to return to the ajax call
    $response = array(
        'employer_name' => $employerName,
        'email' => $employerEmail,
        'contact_number' => $employerNumber,
        'company_logo_name' => $logoPic,
        'employer_position' => $employerPosition,
        'employerAddress'   => $employerAddress,
        'companyName'       => $companyName,
        'companyDescription'=> $companyDescription,
        'companyCeoName'    => $companyCeoName,
        'companySize'   => $companySize,
        'companyRevenue' => $companyRevenue,
        'industry'         => $industry,
        'permit_original_name'  => $permitOriginalName
        
    );
    echo json_encode($response);
}


    // When user click on the save button
    if(isset($_POST['saveNow'])){
        
        // Validation for fullname
        if(empty($_POST['employer_name'])) {
            $employer_nameRR = array('status' => 'error');
        } else if(!isValidFullname($_POST['employer_name'])) {
            $employer_nameRR = array('status' => 'error');
        } else {
            $employer_nameRR = array('status' => 'success');
            $employer_name = sanitize_input($_POST['employer_name']);
        }


        // Validation for employer position
        if(empty($_POST['employer_position'])) {
            $employer_positionRR = array('status' => 'error');
        } elseif(!IsValidFullname($_POST['employer_position'])) {
            $employer_positionRR = array('status' => 'error');
        } else {
            $employer_positionRR = array('status' => 'success');
            $employer_position = sanitize_input($_POST['employer_position']);
        }


        // Validation for company name
        if(empty($_POST['company_name'])) {
            $company_nameRR = array('status' => 'error');
        } elseif(!IsValidFullname($_POST['company_name'])) {
            $company_nameRR = array('status' => 'error');
        } else {
            $company_nameRR = array('status' => 'success');
            $company_name = sanitize_input($_POST['company_name']);
        }


        // Validation for employer address
        if(empty($_POST['company_address'])) {
            $company_addressRR = array('status' => 'error');
        } elseif(!isValidAddress($_POST['company_address'])) {
            $company_addressRR = array('status' => 'error');
        } else {
            $company_addressRR = array('status' => 'success');
            $company_address = sanitize_input($_POST['company_address']);
        }

        // Validation for company ceo
        if(empty($_POST['company_ceo'])) {
            $company_ceoRR = array('status' => 'error');
        } elseif(!IsValidFullname($_POST['company_ceo'])) {
            $company_ceoRR = array('status' => 'error');
        } else {
            $company_ceoRR = array('status' => 'success');
            $company_ceo = sanitize_input($_POST['company_ceo']);
        }

        // Validation for company size
        if(empty($_POST['company_size'])) {
            $company_sizeRR = array('status' => 'error');
        } elseif(!isValidNumber($_POST['company_size'])) {
            $company_sizeRR = array('status' => 'error');
        } else {
            $company_sizeRR = array('status' => 'success');
            $company_size = sanitize_input($_POST['company_size']);
        }

        // Validation for company revenue
        if(empty($_POST['company_revenue'])) {
            $company_revenueRR = array('status' => 'error');
        } elseif(!isValidNumber($_POST['company_revenue'])) {
            $company_revenueRR = array('status' => 'error');
        } else {
            $company_revenueRR = array('status' => 'success');
            $company_revenue = sanitize_input($_POST['company_revenue']);
        }

        // Validation for industry
        if(empty($_POST['industry'])) {
            $industryRR = array('status' => 'error');
        } elseif(!IsValidFullname($_POST['industry'])) {
            $industryRR = array('status' => 'error');
        } else {
            $industryRR = array('status' => 'success');
            $industry = sanitize_input($_POST['industry']);
        }

        // Validation for company description
        if(empty($_POST['company_description'])) {
            $company_descriptionRR = array('status' => 'error');
        } elseif(!isValidAddress($_POST['company_description'])) {
            $company_descriptionRR = array('status' => 'error');
        } else {
            $company_descriptionRR = array('status' => 'success');
            $company_description = sanitize_input($_POST['company_description']);
        }

        // Validation for contact number
        if(empty($_POST['contact_number'])) {
            $contact_numberRR = array('status' => 'error');
        } elseif(!isValidNumber($_POST['contact_number'])) {
            $contact_numberRR = array('status' => 'error');
        } else {
            $contact_numberRR = array('status' => 'success');
            $contact_number = sanitize_input($_POST['contact_number']);
        }

        // Create array for checking of valid extension for Permit
    $allowed_permit_new_name_extension = array("pdf");
    // Create array for checking of valid extension for logo
    $allowed_logo_extension = array("png", "jpg", "jpeg");
    $allowed_qr_code_newextension = array("png", "jpg", "jpeg");
	

	if (!isset($_FILES["company_logo_new"])) {
        $company_logo_newrr = array('status' => 'error', 'message' => 'Company Logo is required.');
    } elseif (!in_array(pathinfo($_FILES["company_logo_new"]["name"], PATHINFO_EXTENSION), $allowed_logo_extension)) {
        $company_logo_newrr = array('status' => 'error', 'message' => 'Only png, jpg, jpeg are allowed.');
    } elseif ($_FILES["company_logo_new"]["size"] > 15000000) {
        $company_logo_newrr = array('status' => 'error', 'message' => 'Must be less than 15mb.');
    } else {
        $company_logo_newrr = array('status' => 'success');
        $company_logo_newExtension = pathinfo($_FILES["company_logo_new"]["name"], PATHINFO_EXTENSION);
    }

    if (!isset($_FILES["permit_new_name"])) {
        $permit_new_namerr = array('status' => 'error', 'message' => 'Permit is required.');
    } elseif (!in_array(pathinfo($_FILES["permit_new_name"]["name"], PATHINFO_EXTENSION), $allowed_permit_new_name_extension)) {
        $permit_new_namerr = array('status' => 'error', 'message' => 'Only pdf are allowed.');
    } elseif ($_FILES["permit_new_name"]["size"] > 5000000) {
        $permit_new_namerr = array('status' => 'error', 'message' => 'Must be less than 5mb.');
    } else {
        $permit_new_namerr = array('status' => 'success');
        $permit_new_nameExtension = pathinfo($_FILES["permit_new_name"]["name"], PATHINFO_EXTENSION);
    }

   
    if (!isset($_FILES["qr_code_new"])) {
        $qr_code_newrr = array('status' => 'error', 'message' => 'QR Code is required.');
    } elseif (!in_array(pathinfo($_FILES["qr_code_new"]["name"], PATHINFO_EXTENSION), $allowed_qr_code_newextension)) {
        $qr_code_newrr = array('status' => 'error', 'message' => 'Only png, jpg, jpeg are allowed.');
    } elseif ($_FILES["qr_code_new"]["size"] > 15000000) {
        $qr_code_newrr = array('status' => 'error', 'message' => 'Must be less than 15mb.');
    } else {
        $qr_code_newrr = array('status' => 'success');
        $qr_code_newExtension = pathinfo($_FILES["qr_code_new"]["name"], PATHINFO_EXTENSION);
    }


    
        // Check if all the validation is successful
        if($employer_nameRR['status'] == 'success' && $employer_positionRR['status'] == 'success' && $permit_new_namerr['status'] == 'success' && $company_logo_newrr['status'] == 'success')  {
            // Escape all the inputs to prevent SQL injection
            $employer_name = mysqli_real_escape_string($conn, $employer_name);
            $employer_position = mysqli_real_escape_string($conn, $employer_position);
            $company_name = mysqli_real_escape_string($conn, $company_name);
            $company_address = mysqli_real_escape_string($conn, $company_address);
            $company_ceo = mysqli_real_escape_string($conn, $company_ceo);
            $company_size = mysqli_real_escape_string($conn, $company_size);
            $company_revenue = mysqli_real_escape_string($conn, $company_revenue);
            $industry = mysqli_real_escape_string($conn, $industry);
            $company_description = mysqli_real_escape_string($conn, $company_description);
            $contact_number = mysqli_real_escape_string($conn, $contact_number);
            $company_logo_new = generateRandomString() . '.' . $company_logo_newExtension;
            $qr_code_new = generateRandomString() . '.' . $qr_code_newExtension;
			$permit_new_name = generateRandomString() . '.' . $permit_new_nameExtension;
            $permit_original_name = $_FILES["permit_new_name"]["name"];
            // Create query to update the admin's details
            $updateEmployerDetailsQuery = mysqli_query($conn, "UPDATE employer SET employer_name = '$employer_name', employer_position = '$employer_position',
            company_name = '$company_name', company_address = '$company_address', company_ceo = '$company_ceo', company_size = '$company_size', 
            company_revenue = '$company_revenue', industry = '$industry', company_description = '$company_description', contact_number = '$contact_number',
            company_logo_name = '$company_logo_new', permit_new_name = '$permit_new_name', permit_original_name = '$permit_original_name', qr_code = '$qr_code_new'
             WHERE employer_id = '{$_SESSION['user_id']}'");
             InsertIntoStorage($_FILES["company_logo_new"]["tmp_name"], $company_logo_new);
             InsertIntoStorage($_FILES["qr_code_new"]["tmp_name"], $qr_code_new);
             InsertIntoStorage($_FILES["permit_new_name"]["tmp_name"], $permit_new_name);
             if($updateEmployerDetailsQuery){
                $response = array('status' => 'success', 'message' => "Updated Successfully.",'dd' => $permit_new_name, 'd' => $company_logo_new );
                } else {
                $response = array('status' => 'error', 'message' => "Problem while updating.");
                }
            // $response = array('status' => 'success', 'message' => "Successfully updated.");
        } else {
            $response = array('status' => 'error', 'message' => "Please fill up all the fields.", 'permitRR' => $permit_new_namerr, 'companyRR' => $company_logo_newrr, 'qrRR' => $qr_code_newrr);
        }
        // return this as a json object and exit
        echo json_encode($response);
    
    }
?>
 

