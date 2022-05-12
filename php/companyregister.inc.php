<?php
    // Include the database connection file and establish a connection
    include'db-connection.php';


    if(isset($_POST['submit'])){
        // Get the values from the form
        $employerFullName = $_POST['employerFullName'];
        $employerposition = $_POST['employerposition'];
        $companyname = $_POST['companyname'];
        $companyaddress = $_POST['companyaddress'];
        $companyceoname = $_POST['companyceoname'];
        $companysize = $_POST['companysize'];
        $companyrevenue = $_POST['companyrevenue'];
        $industry = $_POST['industry'];
        $companydescription = $_POST['companydescription'];
        $contactnumber = $_POST['contactnumber'];
        $companyemail = $_POST['companyemail'];
        $companyLogo = $_POST['companyLogo'];
        $dtipermit = $_POST['dtipermit'];
        $emailaddress = $_POST['emailaddress'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];


        //<!------------------------ Start of validation ------------------------------------->
        
        // Validation for fullname
        if(empty($employerFullName)) {
            $employerFullName = array('status' => 'error', 'message' => 'Employer Fullname is required.');
        } else {
            $employerFullName = array('status' => 'success');
        }


        //<!------------------------ End of validation ------------------------------------->
        echo json_encode($response);
    }
?>