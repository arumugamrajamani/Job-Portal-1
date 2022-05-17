<?php
    session_start();
    // Include the database connection file and establish a connection
    include'db-connection.php';

    // Function for checking in jobseeker table
    function isJobseeker($email){
        // Query to check if email is existing in jobseeker table
        $checkEmail = mysqli_query($GLOBALS['conn'], "SELECT jobseeker_id ,email, password FROM jobseeker WHERE email = '$email'");
        // Check if email is existing in our database
        if(mysqli_num_rows($checkEmail) > 0) {
            return true;
        } else {
            return false;
        }
    }

    // Function for checking in employer table
    function isEmployer($email){
        // Query to check if email is existing in employer table
        $checkEmail = mysqli_query($GLOBALS['conn'], "SELECT employer_id, email, password FROM employer WHERE email = '$email'");
        // Check if email is existing in our database
        if(mysqli_num_rows($checkEmail) > 0) {
            return true;
        }else {
            return false;
        }
    }
    
    if(isset($_POST['submit'])){        
        // Get the data from the form
        $email = $_POST['email'];
        // Validation for email
        if(isEmployer($email)) {
            $emailRR = array('status' => 'success');
            //sets session emailType if employer
            $_SESSION["emailType"] = "employer";
        }else if(isJobseeker($email)){
            $emailRR = array('status' => 'success');
            //sets session emailType if employer
            $_SESSION["emailType"] = "jobseeker";
        } else {
            $emailRR = array('status' => 'error');
        }

        //check if the email is valid and if it exist
        if($emailRR['status'] == 'success'){
            //sets the email as the OTP email in session
            $_SESSION["OTPemail"] = $email;
            //generate otp code
            $otp_code = rand(999999, 111111);
            include'mail.php';
            //Enable HTML
            $mail->isHTML(true);
            //Set sender email
            $mail->setFrom(EMAIL,'Techployment PH OTP');
            //Add recipient
            $mail->addAddress($email);//email that was inputed
            //Email subject
            $mail->Subject = "Techployment PH OTP";
            //Email body
            $mail->Body = "<center><h1>Here is your otp Code</h1> <br><h2>OTP: {$otp_code}</h2></center>";

            $email = mysqli_real_escape_string($conn, $email);
            
            if ($_SESSION["emailType"] == "jobseeker"){// if its an jobseeker it will look for the email and otp code in the jobseeker table
                mysqli_query($GLOBALS['conn'], "UPDATE jobseeker SET otp_code = '$otp_code' WHERE jobseeker.email = '$email'");
            
            }else if ($_SESSION["emailType"] == "employer"){ // if its an employer it will look for the email and otp code in the emp table
                mysqli_query($GLOBALS['conn'], "UPDATE employer SET otp_code = '$otp_code' WHERE employer.email = '$email'");
                
            }

            //Finally send email
            if($mail->send()) {
                $response = array('status' => 'success');
            }else{
                $response = array('status' => 'notsent', 'message' => 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo);
            }
            //Closing smtp connection
            $mail->smtpClose();

        }else{
            // If not successful, return the error reponse
            $response = array('status' => 'error', 'emailRR' => $emailRR);
        }
        
        // Return the response
        echo json_encode($response);
    }

?>