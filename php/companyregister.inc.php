<?php
    //  Function for Sanitizing all input data 
    function sanitize_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // If Signup button is clicked it goes here
    if(isset($_POST['submit'])) {
        // Validation for employee name
        if(empty($_POST['employerName'])) {
            $employerNameRR = array('status' => 'error', 'message' => 'Fullname is required.');
        } else {
            $employerNameRR = array('status' => 'success');
            $employerName = sanitize_input($_POST['employerName']);
        }
        // Validation for employer position
        if(empty($_POST['employerPosition'])) {
            $employerPositionRR = array('status' => 'error', 'message' => 'Employer Position is required.');
        } else {
            $employerPositionRR = array('status' => 'success');
            $employerPosition = sanitize_input($_POST['employerPosition']);
        }
        // Validation for company name
        if(empty($_POST['companyName'])) {
            $companyNameRR = array('status' => 'error', 'message' => 'Company Name is required.');
        } else {
            $companyNameRR = array('status' => 'success');
            $companyName = sanitize_input($_POST['companyName']);
        }
        // Validation for company address
        if(empty($_POST['companyAddress'])) {
            $companyAddressRR = array('status' => 'error', 'message' => 'Company Address is required.');
        } else {
            $companyAddressRR = array('status' => 'success');
            $companyAddress = sanitize_input($_POST['companyAddress']);
        }
        // Validation for company address
        if(empty($_POST['companyCEO'])) {
            $companyCEORR = array('status' => 'error', 'message' => 'Company CEP name is required.');
        } else {
            $companyCEORR = array('status' => 'success');
            $companyCEO = sanitize_input($_POST['companyCEO']);
        }
        // Validation for company size
        if(empty($_POST['companySize'])) {
            $companySizeRR = array('status' => 'error', 'message' => 'Company Size is required.');
        } elseif(!preg_match('/^[0-9]*$/', $_POST['companySize'])) {
            $companySizeRR = array('status' => 'error', 'message' => 'Numbers only. ex. 100000 or 100');
        } else {
            $companySizeRR = array('status' => 'success');
            $companySize = sanitize_input($_POST['companySize']);
        }
        // Validation for company revenue
        if(empty($_POST['companyRevenue'])) {
            $companyRevenueRR = array('status' => 'error', 'message' => 'Company Revenue is required.');
        } elseif(!preg_match('/^[0-9]*$/', $_POST['companyRevenue'])) {
            $companyRevenueRR = array('status' => 'error', 'message' => 'Numbers only. ex. 100000 or 100');
        } else {
            $companyRevenueRR = array('status' => 'success');
            $companyRevenue = sanitize_input($_POST['companyRevenue']);
        }
        // Validation for industry
        if(empty($_POST['industry'])) {
            $industryRR = array('status' => 'error', 'message' => 'Industry is required.');
        } else {
            $industryRR = array('status' => 'success');
            $industry = sanitize_input($_POST['industry']);
        }

        // Check if all the inputs are successfully validated
        if($employerNameRR['status'] == 'success' && $employerPositionRR['status'] == 'success' && $companyNameRR['status'] == 'success' 
            && $companyAddressRR['status'] == 'success' && $companyCEORR['status'] == 'success' && $companySizeRR['status'] == 'success'
            && $companyRevenueRR['status'] == 'success' && $industryRR['status'] == 'success') {
            // Response for success
            $response = array(
                'status' => 'success',
                'message' => 'Successfully registered.'
            );
        } else {
            // Response for error
            $response = array(
                'status' => 'error',
                'employerNameRR' => $employerNameRR,
                'employerPositionRR' => $employerPositionRR,
                'companyNameRR' => $companyNameRR,
                'companyAddressRR' => $companyAddressRR,
                'companyCEORR' => $companyCEORR,
                'companySizeRR' => $companySizeRR,
                'companyRevenueRR' => $companyRevenueRR,
                'industryRR' => $industryRR
            );
        }

        // Return the JSON response
        echo json_encode($response);
    }
?>