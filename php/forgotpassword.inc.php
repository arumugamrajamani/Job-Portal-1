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
        //generate otp code
        $otp_code = rand(999999, 111111);
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
            $email = mysqli_real_escape_string($conn, $email);


            
            // Return this as status success response
            $response = array('status' => 'success'); 
        }else{
            // If not successful, return the error reponse
            $response = array('status' => 'error', 'emailRR' => $emailRR);
        }
        
        // Return the response
        echo json_encode($response);
    }

?>