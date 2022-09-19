<?php
    // Start session here to get the session variables
    session_start();
    // Include the database connection file and establish a connection
    include '../../php/db-connection.php';

    // Check if employer password matches the one in the database
    function isEmployerPasswordMatch($currentpassword) {
        $getDBpassword = mysqli_query($GLOBALS['conn'], "SELECT password FROM employer WHERE employer_id = {$_SESSION['user_id']}");
        $row = mysqli_fetch_array($getDBpassword);
        $dbpassword = $row['password'];
        // Check if the password matches
        if(password_verify($currentpassword, $dbpassword)) {
            return true;
        } else {
            return false;
        }
    }

    // When user click on the save button in the modal
    if(isset($_POST['confirm'])) {
        // $currentpassword = password_hash($_POST['currentpassword'], PASSWORD_DEFAULT);
        $currentpassword = $_POST['currentpassword'];
        $newpassword = $_POST['newpassword'];
        $confirmpassword = $_POST['confirmpassword'];

        // validation current password to the password from database
        if(empty($currentpassword)) {
            $currentpasswordRR = array('status' => 'error', 'message' => 'Current Password is required.');
        } elseif(!isEmployerPasswordMatch($currentpassword)) {
            $currentpasswordRR = array('status' => 'error', 'message' => 'Current password does not match.');
        } else {
            $currentpasswordRR = array('status' => 'success');
        }

        // Validation for new password
        if(empty($newpassword)) {
            $newpasswordRR = array('status' => 'error', 'message' => 'New Password is required.');
        } elseif(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,30}$/', $newpassword)) {
            $newpasswordRR = array('status' => 'error', 'message' => 'New Password must contain a combination of one uppercase letter, numbers, and special characters.');
        } else {
            $newpasswordRR = array('status' => 'success');
        }

        // Validation for confirm new password
        if (empty($confirmpassword)) {
            $confirmpasswordRR = array('status' => 'error', 'message' => 'Confirm New Password is required.');
        } elseif ($newpassword != $confirmpassword) {
            $confirmpasswordRR = array('status' => 'error', 'message' => 'Confirm New Password does not match.');
        } else {
            $confirmpasswordRR = array('status' => 'success');
        }

        // Check if all the validation are successful or not
        if($currentpasswordRR['status'] == 'success' && $newpasswordRR['status'] == 'success' && $confirmpasswordRR['status'] == 'success') {
            // Convert the password to hash
            $newHashPassword = password_hash($newpassword, PASSWORD_DEFAULT);
            // Update the password in the database
            mysqli_query($conn, "UPDATE employer SET password = '$newHashPassword' WHERE employer_id = {$_SESSION['user_id']}");
            // Return this as status success response
            $response = array('status' => 'success');
        } else {
            // If not successful, return the error reponse
            $response = array(
                'status' => 'error', 
                'currentpasswordRR' => $currentpasswordRR,
                'newpasswordRR' => $newpasswordRR,
                'confirmpasswordRR' => $confirmpasswordRR
            );
        }

        mysqli_close($conn);
        echo json_encode($response);
}
