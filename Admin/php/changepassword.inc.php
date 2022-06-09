<?php
    // Include the database connection file and establish a connection
    include'../../php/db-connection.php';
    session_start();
    if (isset($_POST['confirm'])){
        $currentpassword = $_POST['currentpassword'];
        $newpassword = $_POST['newpassword'];
        $confirmpassword = $_POST['confirmpassword'];
        $adminId = $_SESSION['user_id'];
        echo $adminId;
        // Validation for password
        if(empty($newpassword)) {
            $passwordRR = array('status' => 'error', 'message' => 'Password is required.');
        } elseif(strlen($newpassword) < 8 || strlen($newpassword) > 30) {
            $passwordRR = array('status' => 'error', 'message' => 'Password must be between 8 and 30 characters.');
        } else {
            $passwordRR = array('status' => 'success');
        }

        // Validation for confirmpassword
        if(empty($confirmpassword)) {
            $confirmpasswordRR = array('status' => 'error', 'message' => 'Confirm password is required.');
        } elseif($newpassword != $confirmpassword) {
            $confirmpasswordRR = array('status' => 'error', 'message' => 'Confirm password does not match.');
        } else {
            $confirmpasswordRR = array('status' => 'success');
        }
        // Check if all the validation are successful or not
        if($passwordRR['status'] == 'success' && $confirmpasswordRR['status'] == 'success') {
            $pwHash = password_hash($newpassword, PASSWORD_DEFAULT);
            // Return this as status success response
            $response = array('status' => 'success');  
            // Return the response
            session_destroy();        
        } else {
            // If not successful, return the error reponse
            $response = array('status' => 'error', 'passwordRR' => $passwordRR, 'confirmpasswordRR' => $confirmpasswordRR);
        }

        echo json_encode($response);
    }
?>