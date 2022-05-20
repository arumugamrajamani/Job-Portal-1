<?php
    // Include the database connection file and establish a connection
    include'db-connection.php';
    session_start();
    $email = $_SESSION["OTPemail"];

    if(isset($_POST['submit'])){        
        // Get the data from the form
        $otp = $_POST['otp'];
        // Validation for email

    //this function checks if the otp and the email matches in the database
    function isOtpCorrect($otp, $email){
        if ($_SESSION["emailType"] == "jobseeker"){// if its an jobseeker it will look for the email and otp code in the jobseeker table
            $checkOtpQuery = mysqli_query($GLOBALS['conn'], "SELECT * FROM jobseeker WHERE otp_code = '$otp' AND email = '$email'");
       
        }else if ($_SESSION["emailType"] == "employer"){ // if its an employer it will look for the email and otp code in the emp table
            $checkOtpQuery = mysqli_query($GLOBALS['conn'], "SELECT * FROM employer WHERE otp_code = '$otp' AND email = '$email'");
        }else{
            $checkOtpQuery = mysqli_query($GLOBALS['conn'], "SELECT * FROM admin WHERE otp_code = '$otp' AND email = '$email'");
        }
        
        if(mysqli_num_rows($checkOtpQuery) > 0) {
            return true;
        } else {
            return false;
        }
    } 

    //check if the email is valid and if it exist
    if(isOtpCorrect($otp, $email)){
        $response = array('status' => 'success'); 
        //sets the email as the OTP email in session

    }else{
        // If not successful, return the error reponse
        $response = array('status' => 'error');
    }
    // Return the response
    echo json_encode($response);
    }

?>