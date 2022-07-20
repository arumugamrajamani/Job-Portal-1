<?php
//includes db connection from 2 folders back
include '../../php/db-connection.php';
session_start();

// Function for validating if input is valid fullname
function isValidFullname($fullname) {
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

// When the page is loaded the js will call for this then this will get the admin's data from the DB
if (isset($_POST['fetchData'])) {
    $jobseekerId = $_SESSION['user_id'];
    // Create query to get the employer information
    $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM jobseeker WHERE jobseeker_id = '$jobseekerId'");
    $row = mysqli_fetch_assoc($fetchDetailsQuery);
    // Get the employer information needed
    $jobseekerName = $row['fullname'];
    $jobseekerEmail = $row['email'];
    $jobseekerNumber = $row['mobile_number'];
    
    // Create Assoc array to return to the ajax call
    $response = array(
        'fullname' => $jobseekerName,
        'email' => $jobseekerEmail,
        'mobile_number' => $jobseekerNumber,
        
    );
    echo json_encode($response);
}
if (isset($_POST['updateData'])){
    $jobseekerId = $_SESSION['user_id'];
    $fullname = $_POST['fullname'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $mobileNumber = $_POST['mobileNumber'];
    //Validation for fullname
    if (empty($fullname)) {
        $fullnameInfo = array('status' => 'error', 'message' => 'Fullname is required.');
    }
    elseif (!isValidFullname($fullname)) {
        $fullnameInfo = array('status' => 'error', 'message' => 'Only characters are allowed.');
    }
    else {
        $fullnameInfo = array('status' => 'success');
    }
    // Validation for address
    if (empty($address)) {
        $addressInfo = array('status' => 'error', 'message' => 'Address is required.');
    }
    else {
        $addressInfo = array('status' => 'success');
    }

    if (empty($birthday)) {
        $birthdayInfo = array('status' => 'error', 'message' => 'Date is required.');
    }
    else {
        $birthdayInfo = array('status' => 'success');
    }
    // Validation for email 
    if (empty($email)) {
        $emailInfo = array('status' => 'error', 'message' => 'Email Address is required.');
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailInfo = array('status' => 'error', 'message' => 'Email is invalid.');
    }
    else {
        $emailInfo = array('status' => 'success');
    }
    // Validation for company size
     if (empty($mobileNumber)) {
         $mobileNumberInfo = array('status' => 'error', 'message' => 'Mobile Number is required.');
        } elseif (!isValidNumber($mobileNumber)) {
            $mobileNumberInfo = array('status' => 'error', 'message' => 'Only numbers are allowed.');
    } else {
        $mobileNumberInfo = array('status' => 'success');
    }
    
    if ($fullnameInfo['status'] == 'error' || empty($birthday) || empty($address) || $emailInfo['status'] == 'error' || $mobileNumberInfo['status'] == 'error'){
        $response = array('status' => 'error', 'fullname' => $fullnameInfo, 'birthday' => $birthdayInfo, 'address' => $addressInfo, 'email' => $emailInfo, 'mobile' => $mobileNumberInfo);
    }
    else{ 
        $jobseekerId = $_SESSION['user_id'];
        $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
        $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $mobileNumber = mysqli_real_escape_string($conn, $_POST['mobileNumber']);
        $fetchDetailsQuery = mysqli_query($conn, "UPDATE `jobseeker` SET `fullname`='$fullname',`mobile_number`='$mobileNumber',`email`='$email' WHERE jobseeker_id = $jobseekerId");
        $response = array('status' => 'success');
    }
    echo json_encode($response);
}