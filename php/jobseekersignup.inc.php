<?php
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
    
    //  Function for Sanitizing all input data 
    function sanitize_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

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

    // Function for validating if input is valid fullname
    function isValidFullname($fullname){
        if(preg_match("/^[a-zA-Z .]*$/", $fullname)){
            return true;
        } else {
            return false;
        }
    }

    // Function for validating if inout is valid number
    function isValidNumber($number){
        if(preg_match("/^[0-9]*$/", $number)){
            return true;
        } else {
            return false;
        }
    }

    if(isset($_POST['submit'])){
        // Validation for fullname
        if(empty($_POST['fullname'])) {
            $fullnameRR = array('status' => 'error', 'message' => 'Fullname is required.');
        } else if(!isValidFullname($_POST['fullname'])) {
            $fullnameRR = array('status' => 'error', 'message' => 'Only characters are allowed.');
        } else {
            $fullnameRR = array('status' => 'success');
            $fullname = sanitize_input($_POST['fullname']);
        }

        // Validation for mobilenumber
        if(empty($_POST['mobilenumber'])) {
            $mobilenumberRR = array('status' => 'error', 'message' => 'Mobile number is required.');
        } elseif(!isValidNumber($_POST['mobilenumber'])) {
            $mobilenumberRR = array('status' => 'error', 'message' => 'Mobile number must be numeric.');
        } else {
            $mobilenumberRR = array('status' => 'success');
            $mobilenumber = sanitize_input($_POST['mobilenumber']);
        }
        
        // Validation for email
        if(empty($_POST['email'])) {
            $emailRR = array('status' => 'error', 'message' => 'Email is required.');
        } elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $emailRR = array('status' => 'error', 'message' => 'Email is invalid.');
        } elseif(isEmployer($_POST['email']) || isJobseeker($_POST['email'])) {
            $emailRR = array('status' => 'error', 'message' => 'Email is already used.');
        } else {
            $emailRR = array('status' => 'success');
            $email = $_POST['email'];
        }
        
        // Validation for password
        if(empty($_POST['password'])) {
            $passwordRR = array('status' => 'error', 'message' => 'Password is required.');
        } elseif(strlen($_POST['password']) < 8 || strlen($_POST['password']) > 30) {
            $passwordRR = array('status' => 'error', 'message' => 'Password must be between 8 and 30 characters.');
        } else {
            $passwordRR = array('status' => 'success');
            $password = $_POST['password'];
        }

        // Validation for confirmpassword
        if(empty($_POST['confirmpassword'])) {
            $confirmpasswordRR = array('status' => 'error', 'message' => 'Confirm password is required.');
        } elseif($_POST['password'] != $_POST['confirmpassword']) {
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