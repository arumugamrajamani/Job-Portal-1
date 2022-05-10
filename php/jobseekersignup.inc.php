<?php
    // Include the database connection file and establish a connection
    include'db-connection.php';

    // Function for checking if email is existing in the database, return boolean true or false
    function isEmailExist($email) {
        $email = mysqli_real_escape_string($GLOBALS['conn'], $email);
        $CheckEmailQuery = mysqli_query($GLOBALS['conn'], "SELECT email FROM jobseeker WHERE email = '$email'");
        if(mysqli_num_rows($CheckEmailQuery) > 0) {
            return true;
        } else {
            return false;
        }
    }

    if(isset($_POST['submit'])){
        // Get the data from the form
        $fullname = $_POST['fullname'];
        $mobilenumber = $_POST['mobilenumber'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        // Validation for fullname
        if(empty($fullname)) {
            $fullnameRR = array('status' => 'error', 'message' => 'Fullname is required.');
        } else {
            $fullnameRR = array('status' => 'success');
        }

        // Validation for mobilenumber
        if(empty($mobilenumber)) {
            $mobilenumberRR = array('status' => 'error', 'message' => 'Mobile number is required.');
        } elseif(!preg_match('/^[0-9]*$/', $mobilenumber)) {
            $mobilenumberRR = array('status' => 'error', 'message' => 'Mobile number must be numeric.');
        } else {
            $mobilenumberRR = array('status' => 'success');
        }
        
        // Validation for email
        if(empty($email)) {
            $emailRR = array('status' => 'error', 'message' => 'Email is required.');
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailRR = array('status' => 'error', 'message' => 'Email is invalid.');
        } elseif(isEmailExist($email)) {
            $emailRR = array('status' => 'error', 'message' => 'Email is already exist.');
        } else {
            $emailRR = array('status' => 'success');
        }
        
        // Validation for password
        if(empty($password)) {
            $passwordRR = array('status' => 'error', 'message' => 'Password is required.');
        } elseif(strlen($password) < 8 || strlen($password) > 30) {
            $passwordRR = array('status' => 'error', 'message' => 'Password must be between 8 and 30 characters.');
        } else {
            $passwordRR = array('status' => 'success');
        }

        // Validation for confirmpassword
        if(empty($confirmpassword)) {
            $confirmpasswordRR = array('status' => 'error', 'message' => 'Confirm password is required.');
        } elseif($password != $confirmpassword) {
            $confirmpasswordRR = array('status' => 'error', 'message' => 'Confirm password does not match.');
        } else {
            $confirmpasswordRR = array('status' => 'success');
        }

        // Check if all the validation are successful or not
        if($fullnameRR['status'] == 'success' && $mobilenumberRR['status'] == 'success' && $emailRR['status'] == 'success'
            && $passwordRR['status'] == 'success' && $confirmpasswordRR['status'] == 'success') {
            // Escape the data using mysqli_real_escape_string to prevent SQL injection
            $fullname = mysqli_real_escape_string($conn, $fullname);
            $mobilenumber = mysqli_real_escape_string($conn, $mobilenumber);
            $email = mysqli_real_escape_string($conn, $email);
            $hashpassword = mysqli_real_escape_string($conn, password_hash($password, PASSWORD_DEFAULT));

            // Insert the data into the jobseeker table
            mysqli_query($conn, "INSERT INTO jobseeker (fullname, mobile_number, email, password, date_created) 
                    VALUES ('$fullname', '$mobilenumber', '$email', '$hashpassword', now())");

            // Return this as status success response
            $response = array('status' => 'success');          
        } else {
            // If not successful, return the error reponse
            $response = array('status' => 'error', 'fullnameRR' => $fullnameRR, 'mobilenumberRR' => $mobilenumberRR,
            'emailRR' => $emailRR, 'passwordRR' => $passwordRR, 'confirmpasswordRR' => $confirmpasswordRR);
        }
        // Return the response
        echo json_encode($response);
    }
?>
