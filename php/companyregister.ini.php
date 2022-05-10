<?php
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
        $emailaddress = $_POST['emailaddress'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];


        //<!------------------------ Start of validation ------------------------------------->
        


        //<!------------------------ End of validation ------------------------------------->
        echo json_encode($response);
    }
?>