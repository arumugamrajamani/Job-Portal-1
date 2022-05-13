<?php
    // Function for validating if input is valid fullname
    function isValidFullname($fullname){
        if(preg_match("/^[a-zA-Z .]*$/", $fullname)){
            return true;
        } else {
            return false;
        }
    }

    if(isset($_POST['submit'])){
        // Get the values from the form
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $concern = $_POST['concern'];

        //<!------------------------ Start of validation ------------------------------------->

        // Check if the name is empty
        if(empty($fullname)){
            $fullnameRR = array('status' => 'error', 'message' => 'Fullname is required.');
        } else if(!isValidFullname($fullname)){
            $fullnameRR = array('status' => 'error', 'message' => 'Only characters are allowed.');
        } else {
            $fullnameRR = array('status' => 'success');
        }

        // Check if the email is empty
        if(empty($email)){
            $emailRR = array('status' => 'error', 'message' => 'Email is required.');
        // Check if email is valid
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){ 
            $emailRR = array('status' => 'error', 'message' => 'Email is not valid.');
        } else {
            $emailRR = array('status' => 'success');
        }

        // Check if concern is empty
        if(empty($concern)){
            $concernRR = array('status' => 'error', 'message' => 'Concern is required.');
        } else {
            $concernRR = array('status' => 'success');
        }

        // Check if there is no error, then send the email
        if($fullnameRR['status'] == 'success' && $emailRR['status'] == 'success' && $concernRR['status'] == 'success'){
            // 1 dimention array as response
            include'mail.php';
            //Enable HTML
            $mail->isHTML(true);
            //Set sender email
            $mail->setFrom(EMAIL,'Techployment PH');
            //Add recipient
            $mail->addAddress('marcjohncastillo24@gmail.com');
            //Email subject
            $mail->Subject = "Concern from ".$fullname;
            //Email body
            $mail->Body = "Name: $fullname <br>Email: $email <br>Concern: $concern";
            //Attachment
            //$mail->addAttachment('img/attachment.png');

            //Finally send email
            if($mail->send()) {
                $response = array('status' => 'success');
            }else{
                $response = array('status' => 'notsent', 'message' => 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo);
            }
            //Closing smtp connection
            $mail->smtpClose();            
        } else {
            // 2 dimentional associative array as response 
            $response = array('status' => 'error', 'fullnameRR' => $fullnameRR, 'emailRR' => $emailRR, 'concernRR' => $concernRR);
        }

        //<!------------------------ End of validation ------------------------------------->
        echo json_encode($response);
    }
?>