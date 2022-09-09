<?php
    session_start();
    // Include the database connection file and establish a connection
    include '../../php/db-connection.php';

    function dateTimeConvertion($date){
        return date('M d, Y, h:i A', strtotime($date));
    }

    // Function for checking if Job Category is existing in the database, return boolean true or false
    function isCategoryExist($jobcategory) {
        $jobcategory = mysqli_real_escape_string($GLOBALS['conn'], $jobcategory);
        $CheckCategoryQuery = mysqli_query($GLOBALS['conn'], "SELECT * FROM category WHERE job_title = '$jobcategory'");
        if (mysqli_num_rows($CheckCategoryQuery) > 0) {
            return true;
        } else {
            return false;
        }
    }

    function returnTable($id, $jobTitle) {

        $statement = "
        SELECT *, COUNT(applied_jobs.jobseeker_id) as count
        FROM jobpost 
        LEFT JOIN applied_jobs
        ON jobpost.post_id = applied_jobs.post_id
        WHERE jobpost.post_id = $id 
        GROUP BY jobpost.post_id
        ";

        $getPosts = mysqli_query($GLOBALS['conn'], $statement);

        $row = mysqli_fetch_assoc($getPosts);
        $count=$row['count'];
        $status = "";
        if ($count == 0) {
            $status = "Inactive";
        } else {
            $status = "Active";
        }

        return "<tr>
            <td  data-title='Job Title'>{$jobTitle}</td>
            <td data-title='Number applicant'>$count</td>
            <td data-title='status'>$status</td>
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
        $pagination = "";
        $page = 0;
        $pageLimit = 4;

        // Check if the page number is set
        if (isset($_POST['page'])) {
            // Set the page number
            $page = $_POST['page'];
        } else if (isset($_POST['search'])) {
            $page = 1;  
        } else {
            // Set the page number to 1
            $page = 1;
        }

        $uid = $_SESSION['user_id'];

        // Calculate the starting row
        $start = ($page - 1) * $pageLimit;

        if (isset($_POST['search'])) {
            $search = trim($_POST['search']);
            $statement = "SELECT * FROM jobpost WHERE job_title LIKE '%$search%' LIMIT $start, $pageLimit";
            $paginationStatement = "SELECT * FROM jobpost WHERE job_title LIKE '%$search%'";
        }
        else {
            $statement = "SELECT * FROM jobpost WHERE postedby_uid = '$uid' LIMIT $start, $pageLimit";
            $paginationStatement = "SELECT * FROM jobpost WHERE postedby_uid = '$uid'";
        }

        $getPosts = mysqli_query($conn, $statement);

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
        // $paginationStatement = "SELECT * FROM jobpost";
        
         // Query to get the total number of employers
        $GetRecordsQuery = mysqli_query($conn, $paginationStatement);
        // Query to get the total number of employers
        $totalRecords = mysqli_num_rows($GetRecordsQuery);
        // Calculate the total number of employers. Will pass to 1 if there are no employers
        $totalPages = ($totalRecords == 0) ? 1 : ceil($totalRecords / $pageLimit);

        // check if the page number is greater than 1
        if ($page >= 1) {
            // Set the previous page
            $previous = $page - 1;
            $pagination .=  "<li class='page-item' data-page='{$previous}'>
                                    <a class='page-link bg-info text-dark'>Previous</a>
                                </li>";
        } else {
            $pagination .=  "<li class='page-item' data-page='{$previous}'>
                                <a class='page-link bg-info text-dark'>Previous</a>
                            </li>";
        }

        // Loop through the pages
        for ($i = 1; $i <= $totalPages; $i++) {
            $active = '';
            if ($page == $i) {
                $active = 'active';
            }
            
            $pagination .= "
                <li class='page-item {$active}' data-page='{$i}'>
                    <a class='page-link text-dark'>{$i}</a>
                </li>
            ";
        }

        // Check if there are more than 1 page
        if ($page <= $totalPages) {
            // Set the next page
            $next = $page + 1;
            $pagination .=  "
                <li class='page-item' data-page='{$next}'>
                    <a class='page-link bg-info text-dark'>Next</a>
                </li>
            ";
        } else {
            $pagination .=  "
                <li class='page-item' data-page='{$next}'>
                    <a class='page-link bg-info text-dark'>Next</a>
                </li>
            ";
        }

        // For entries display
        $entries_start = $start + 1;
        $entries_end = $start + $pageLimit;

        $entries = "<span>Show <b>{$entries_start}</b> to <b>{$entries_end}</b> of {$totalRecords} entries</span>";

        // Stored and return the displays for employer management page
        $response = array(
            'tableData' => $tableData,
            'pagination' => $pagination,
            'entries' => $entries
        );

        echo json_encode($response);
    }

    if (isset($_POST['fetchDetails'])) {
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

        $statCompanyName = $statJobTitle = $statEmployment = $statJobCategory = '';
        $statJobDescription = $statSalary = $statEmployerEmail = $statPrimarySkill = $statSecondarySkill = '';

        if (empty($_POST['companyName'])) {
            $statCompanyName = array('status' => 'error', 'message' => 'Company name cannot be empty.');
        }
        
        if (!empty($_POST['companyName']) && !empty($_POST['jobTitle']) && !empty($_POST['employment']) && 
        !empty($_POST['jobCategory']) && !empty($_POST['jobDescription']) && !empty($_POST['salaryWage']) && 
        !empty($_POST['employerEmail']) && !empty($_POST['primarySkill']) && !empty($_POST['secondarySkill'])) {
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

            $updateApplication = "UPDATE applied_jobs SET `company_name`='$companyName', `job_title`='$jobTitle', 
            `employment_type`='$employment', `job_category`='$jobCategory', `job_description`='$jobDescription', 
            `salary`='$salaryWage', `employer_email`='$employerEmail', `primary_skill`='$primarySkill', 
            `secondary_skill`='$secondarySkill' WHERE `post_id`='$postId'";

            mysqli_query($conn, $updateApplication);
            
            $response = array('status'=>'success');
        } else {
            $response = array('status'=>'error');
        }

        echo json_encode($response);
    }
 
?>