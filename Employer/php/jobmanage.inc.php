<?php
    session_start();
    // Include the database connection file and establish a connection
    include '../../php/db-connection.php';

    function dateTimeConvertion($date){
        return date('M d, Y, h:i A', strtotime($date));
    }

    function returnTable($id, $jobTitle) {
        return "<tr>
            <td  data-title='Job Title'>{$jobTitle}</td>
            <td data-title='Number applicant'>Sample</td>
            <td data-title='status'>Active</td>
            <td data-title='drive'>sample.com</td>
            <td data-title='action'>
            <button class='btn-success fetch-details' type='button' 
                id='btn-info' data-id='{$id}' data-bs-toggle='modal' 
                data-bs-target='#modal-editdetails'>Edit</button>
            <button class='btn delete-Btn' data-id='{$id}' type='button' 
                id='btn-info'  data-bs-toggle='modal' data-bs-target='#exampleModal'>Delete</button>
            </td>
        </tr>";
    }
    if (isset($_POST['fetchData'])){
        $tableData = "";
        $uid = $_SESSION['user_id'];
        $getPosts = mysqli_query($conn, "SELECT * FROM `jobpost` WHERE `postedby_uid` = '$uid'");

        while($row = mysqli_fetch_assoc($getPosts)){
            $id = $row['post_id'];
            $companyName = $row['company_name'];
            $jobTitle = $row['job_title'];
            $employment = $row['employment_type'];
            $jobCategory = $row['job_category'];
            $jobDescription = $row['job_description'];
            $salaryWage = $row['salary'];
            $employerEmail = $row['employer_email'];
            $primarySkill = $row['primary_skill'];
            $secondarySkill = $row['secondary_skill'];
            $tableData .=  returnTable($id, $jobTitle);
        }
                            
        $response = array('tableData' => $tableData);
        echo json_encode($response);
    }

    if (isset($_POST['fetchDetails'])) {
        // $categoryId = mysqli_real_escape_string($conn, $_POST['postId']);
        // $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM jobpost WHERE post_id = '$postId");
        // $row = mysqli_fetch_assoc($fetchDetailsQuery);
        // echo $companyName = $row['post_id'];
        $postId = mysqli_real_escape_string($conn, $_POST['postId']);
        $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM jobpost WHERE post_id = '$postId'");
        $row = mysqli_fetch_assoc($fetchDetailsQuery);

        $companyName = $row['company_name'];
        $jobTitle = $row['job_title'];
        $employment = $row['employment_type'];
        $jobCategory = $row['job_category'];
        $jobDescription = $row['job_description'];
        $salaryWage = $row['salary'];
        $employerEmail = $row['employer_email'];
        $primarySkill = $row['primary_skill'];
        $secondarySkill = $row['secondary_skill'];

        // Create Assoc array to return to the ajax call    
        $response = array(
            'companyName' => $companyName,
            'jobTitle' => $jobTitle,
            'employment' => $employment,
            'jobCategory' => $jobCategory,
            'jobDescription' => $jobDescription,
            'salaryWage' => $salaryWage,
            'employerEmail' => $employerEmail,
            'primarySkill' => $primarySkill,
            'secondarySkill' => $secondarySkill
        );

        echo json_encode($response);
    }
    
    if (isset($_POST['deleteJobPost'])) {
        $postId = mysqli_real_escape_string($conn, $_POST['postId']);
        // deleting the jobseeker in the database
        mysqli_query($conn, "DELETE FROM jobpost WHERE post_id = '$postId'");
        // Return nothing to the ajax call
    }
    
    if (isset($_POST['saveDetails'])) {

        if (!empty($_POST['postId'])) {
            $postId = mysqli_real_escape_string($conn, $_POST['postId']);
            $companyName = mysqli_real_escape_string($conn, $_POST['companyName']);
            $jobTitle = mysqli_real_escape_string($conn, $_POST['jobTitle']);
            $employment = mysqli_real_escape_string($conn, $_POST['employment']);
            $jobCategory = mysqli_real_escape_string($conn, $_POST['jobCategory']);
            $jobDescription = mysqli_real_escape_string($conn, $_POST['jobDescription']);
            $salaryWage = mysqli_real_escape_string($conn, $_POST['salaryWage']);
            $employerEmail = mysqli_real_escape_string($conn, $_POST['employerEmail']);
            $primarySkill = mysqli_real_escape_string($conn, $_POST['primarySkill']);
            $secondarySkill = mysqli_real_escape_string($conn, $_POST['secondarySkill']);
    
    
            $updateQuery = "UPDATE `jobpost` SET `company_name`='$companyName', `job_title`='$jobTitle', 
                `employment_type`='$employment', `job_category`='$jobCategory', `job_description`='$jobDescription', 
                `salary`='$salaryWage', `employer_email`='$employerEmail', `primary_skill`='$primarySkill', 
                `secondary_skill`='$secondarySkill' WHERE `post_id`='$postId'";
            mysqli_query($conn, $updateQuery);

            $response = array('status'=>'success');
        } else {
            $response = array('status'=>'error');
        }

        echo json_encode($respone);
    }
 
?>