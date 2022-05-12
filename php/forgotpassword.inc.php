<?php
    session_start();
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
        $email = $_POST['email'];
        // Validation for email
        if(isEmailExist($email)) {
            $emailRR = array('status' => 'success');
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
            mysqli_query($GLOBALS['conn'], "UPDATE jobseeker SET otp_code = '$otp_code' WHERE jobseeker.email = '$email'");

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