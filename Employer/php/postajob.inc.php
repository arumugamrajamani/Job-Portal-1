<?php
    session_start();
    // Include the database connection file and establish a connection
    include '../../php/db-connection.php';
    if(isset($_POST['submit'])){
        if(empty($_POST['companyName'])) {
            $companyNameInfo = array('status' => 'error', 'message' => 'Company name is required.');
        }
        else {
            $companyNameInfo = array('status' => 'success');
            $companyName =($_POST['companyName']);
            $employment = ($_POST['employment']);
            $primarySkill = ($_POST['primarySkill']);
            $secondarySkill = ($_POST['secondarySkill']);
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
            $uid = ($_SESSION['user_id']);
        }
        if (!empty($companyName) && !empty($jobTitle) && !empty($jobCategory) && !empty($jobDescription) && !empty($salaryWage) && !empty($employerEmail)) {
            $companyName = mysqli_real_escape_string($conn, $companyName);
            $jobTitle = mysqli_real_escape_string($conn, $jobTitle);
            $employment = mysqli_real_escape_string($conn, $employment);
            $jobCatergory = mysqli_real_escape_string($conn, $jobCatergory);
            $jobDescription = mysqli_real_escape_string($conn, $jobDescription);
            $salaryWage = mysqli_real_escape_string($conn, $salaryWage);
            $employerEmail = mysqli_real_escape_string($conn, $employerEmail);
            $primarySkill = mysqli_real_escape_string($conn, $primarySkill);
            $secondarySkill = mysqli_real_escape_string($conn, $secondarySkill);
            $uid = mysqli_real_escape_string($conn, $_SESSION['user_id']);
            mysqli_query($conn,"INSERT INTO `jobpost`(`company_name`, `job_title`, `employment_type`, `job_category`, `job_description`, `salary`, `employer_email`, `primary_skill`, `secondary_skill`, `postedby_uid`, `date_posted`) VALUES ('$companyName', '$jobTitle', '$employment', '$jobCatergory', '$jobDescription', '$salaryWage', '$employerEmail','$primarySkill', '$secondarySkill','$uid',NOW())");

            $response = array('status' => 'success');
        }
        else{
            $response = array('status' => 'error', 'companyName' => $companyNameInfo, 'jobTitle' => $jobTitleInfo,'jobCategory' => $jobCategoryInfo, 'jobDescription' => $jobDescriptionInfo, 'salaryWage' => $salaryWageInfo, 'employerEmail' => $employerEmailInfo);

        }
         echo json_encode($response);
    }

?>