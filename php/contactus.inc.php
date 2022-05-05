<?php
    // Check if submit is pressed
    if(isset($_POST['submit'])){
        // Get the values from the form
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $concern = $_POST['concern'];

        //<!------------------------ Start of validation ------------------------------------->

        // Check if the name is empty
        if(empty($fullname)){
            $fullnameRR = array('status' => 'error', 'message' => 'Fullname is required!');
        } else {
            $fullnameRR = array('status' => 'success');
        }

        // Check if the email is empty
        if(empty($email)){
            $emailRR = array('status' => 'error', 'message' => 'Email is required!');
        // Check if email is valid
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){ 
            $emailRR = array('status' => 'error', 'message' => 'Email is not valid!');
        } else {
            $emailRR = array('status' => 'success');
        }

        // Check if concern is empty
        if(empty($concern)){
            $concernRR = array('status' => 'error', 'message' => 'Concern is required!');
        } else {
            $concernRR = array('status' => 'success');
        }

        // Check if there is no error, then send the email
        if($fullnameRR['status'] == 'success' && $emailRR['status'] == 'success' && $concernRR['status'] == 'success'){
            // 1 dimention array as response
            $response = array('status' => 'success');
        } else {
            // 2 dimentional associative array as response 
            $response = array('status' => 'error', 'fullnameRR' => $fullnameRR, 'emailRR' => $emailRR, 'concernRR' => $concernRR);
        }

        //<!------------------------ End of validation ------------------------------------->
        echo json_encode($response);
    }
?>