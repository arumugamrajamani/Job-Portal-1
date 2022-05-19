<?php
    // Include the database connection file and establish a connection
    include'db-connection.php';
    session_start();
    if(isset($_POST['submit'])){
        // Get the data from the form
        $email = $_SESSION['OTPemail'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['repassword'];
        
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
        if($passwordRR['status'] == 'success' && $confirmpasswordRR['status'] == 'success') {
            $pwHash = password_hash($password, PASSWORD_DEFAULT);

            if ($_SESSION["emailType"] == "jobseeker"){// if its an jobseeker it will look for the email and otp code in the jobseeker table
                //change the password of the email in the database
                mysqli_query($conn,"UPDATE jobseeker SET password = '$pwHash' WHERE email = '$email'");
                //change the OTP to null
                mysqli_query($conn,"UPDATE jobseeker SET otp_code = NULL WHERE email = '$email'");
            }else if ($_SESSION["emailType"] == "employer"){ // if its an employer it will look for the email and otp code in the emp table
                //change the password of the email in the database
                mysqli_query($conn,"UPDATE employer SET password = '$pwHash' WHERE email = '$email'");
                //change the OTP to null
                mysqli_query($conn,"UPDATE employer SET otp_code = NULL WHERE email = '$email'");
            }
            
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

//password_hash($password, PASSWORD_DEFAULT)
?>