<?php
    // Include the database connection file and establish a connection
    include '../../php/db-connection.php';
    if(isset($_POST['submit'])){
        // Validation for jobTitle
        if(empty($_POST['companyName'])) {
            $companyNameInfo = array('status' => 'error', 'message' => 'Company name is required.');
        }
        else {
            $companyNameInfo = array('status' => 'success');
            $companyName =($_POST['companyName']);
         }
        if(empty($_POST['jobTitle'])) {
            $jobTitleInfo = array('status' => 'error', 'message' => 'Job Title is required.');
        }
         else {
            $jobTitleInfo = array('status' => 'success');
            $jobTitle = ($_POST['jobTitle']);
        }
        if(empty($_POST['jobCategory'])) {
            $jobCategoryInfo = array('status' => 'error', 'message' => 'Job Category is required.');
        }
         else {
            $jobCategoryInfo = array('status' => 'success');
            $jobCategory = ($_POST['jobCategory']);
        }
        if(empty($_POST['jobDescription'])) {
            $jobDescriptionInfo = array('status' => 'error', 'message' => 'Job Description is required.');
        }
         else {
            $jobDescriptionInfo = array('status' => 'success');
            $jobDescription = ($_POST['jobDescription']);
        }
        if(empty($_POST['salaryWage'])) {
            $salaryWageInfo = array('status' => 'error', 'message' => 'Salary is required.');
        }
         else {
            $salaryWageInfo = array('status' => 'success');
            $salaryWage = ($_POST['salaryWage']);
        }
        if(empty($_POST['employerEmail'])) {
            $employerEmailInfo = array('status' => 'error', 'message' => 'Employer Email is required.');
        }
         else {
            $employerEmailInfo = array('status' => 'success');
            $employerEmail = ($_POST['employerEmail']);
        }
        if (!empty($companyName) && !empty($jobTitle) && !empty($jobCategory) && !empty($jobDescription) && !empty($salaryWage) && !empty($employerEmail)) {
            
            $response = array('status' => 'success', 'companyName' => $companyName, 'jobTitle' => $jobTitle,'jobCategory' => $jobCategory, 'jobDescription' => $jobDescription, 'salaryWage' => $salaryWage, 'employerEmail' => $employerEmail);
        }
        else{
            $response = array('status' => 'error', 'companyName' => $companyNameInfo, 'jobTitle' => $jobTitleInfo,'jobCategory' => $jobCategoryInfo, 'jobDescription' => $jobDescriptionInfo, 'salaryWage' => $salaryWageInfo, 'employerEmail' => $employerEmailInfo);

        }
         echo json_encode($response);
    }

?>