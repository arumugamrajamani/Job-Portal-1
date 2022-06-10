<?php
// Include the database connection file and establish a connection
include '../../php/db-connection.php';
session_start();
if (isset($_POST['confirm'])) {
    $currentpassword = password_hash($_POST['currentpassword'], PASSWORD_DEFAULT);
    $newpassword = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];
    $adminId = $_SESSION['user_id'];
    $oldpw = mysqli_query($conn, "SELECT password FROM admin WHERE admin_id = '$adminId'");
    echo $adminId;
    // Validation for password
    if (empty($newpassword)) {
        $newpasswordRR = array('status' => 'error', 'message' => 'Password is required.');
    } elseif (strlen($newpassword) < 8 || strlen($newpassword) > 30) {
        $newpasswordRR = array('status' => 'error', 'message' => 'Password must be between 8 and 30 characters.');
    } else {
        $newpasswordRR = array('status' => 'success');
    }

    // Validation for confirmpassword
    if (empty($confirmpassword)) {
        $confirmpasswordRR = array('status' => 'error', 'message' => 'Confirm password is required.');
    } elseif ($newpassword != $confirmpassword) {
        $confirmpasswordRR = array('status' => 'error', 'message' => 'Confirm password does not match.');
    } else {
        $confirmpasswordRR = array('status' => 'success');
    }
    //compare current password to the password from database
    if ($oldpw != $currentpassword) {
        $currentpasswordRR = array('status' => 'error', 'message' => 'Current password does not match.');
    } else {
        $currentpasswordRR = array('status' => 'success');
    }
    // Check if all the validation are successful or not
    if ($newpasswordRR['status'] == 'success' && $confirmpasswordRR['status'] == 'success' && $currentpasswordRR['status'] == 'success') {
        $newpwHash = password_hash($newpassword, PASSWORD_DEFAULT);
        // Return this as status success response
        $response = array('status' => 'success');
    } else {
        // If not successful, return the error reponse
        $response = array('status' => 'error', 'newpasswordRR' => $newpasswordRR, 'confirmpasswordRR' => $confirmpasswordRR, 'currentpasswordRR' => $currentpasswordRR);
    }

    echo json_encode($response);
}
