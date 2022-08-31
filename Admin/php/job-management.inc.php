<?php
    session_start();
    //includes db connection from 2 folders back
    include '../../php/db-connection.php';

    function dateTimeConvertion($date){
        return date('M d, Y, h:i A', strtotime($date));
    }
    if (isset($_POST['fetchData'])) {
         // Variables to store the data
        $page = 0;
        // Set the item limit per page
        $pageLimit = 5;
        //Variable to hold the querryu result
        $tableData = "";

        // Check if the page number is set
        if (isset($_POST['page'])) {
            // Set the page number
            $page = $_POST['page'];
            // Check if search is set
        }
        elseif (isset($_POST['search'])) {
            // Set the page number to 1
            $page = 1;
        } 
        else {
        // Set the page number to 1
        $page = 1;
        }

        // Calculate the starting row
        $start = ($page - 1) * $pageLimit;

        // Check if search is present
        if (isset($_POST['search'])) {
            $search = $_POST['search'];
            $statement = "SELECT * FROM jobpost WHERE company_name LIKE '%$search%' LIMIT $start, $pageLimit";
            $paginationStatement = "SELECT * FROM jobpost WHERE company_name LIKE '%$search%' OR employer_email LIKE '%$search%'";
        }
        else {
            $statement = "SELECT * FROM jobpost LIMIT $start, $pageLimit";
            $paginationStatement = "SELECT * FROM jobpost";
        }
        $tableData = "";
        $getPosts = mysqli_query($conn, $statement);
        while($row = mysqli_fetch_assoc($getPosts)){
            $uid = $row['postedby_uid'];
            $postId = $row['post_iud'];
            $getEmployerName = mysqli_query($conn, "SELECT * FROM `employer` WHERE `employer_id` = '$uid'");
            while($name = mysqli_fetch_assoc($getEmployerName)){
            $employer = $name['employer_name'];}
            $companyName = $row['company_name'];
            $jobCategory = $row['job_category'];
            $date = dateTimeConvertion($row['date_posted']);
            $tableData .=  "<tr class='tr'>
                            <td>{$employer}</td>
                            <td>{$companyName}</td>
                            <td>{$jobCategory}</td>
                            <td>{$date}</td>
                            <td>
                                <button class='btn-success edit-Btn' type='button' id='btn-info' data-id='{$postId}' data-bs-toggle='modal' data-bs-target='#modal-editdetails' title='Edit Details'><i class='fa-solid fa-pen-to-square'></i></button>
                                <button class='btn btn-danger delete-Btn' type='button' id='btn-info' data-id ='{$postId}' data-bs-toggle='modal' data-bs-target='#modal-delete' title='Delete'><i class='bi bi-trash3'></i></button>
                        </td>";
        }
        // Query to get the total number of employers
        $GetRecordsQuery = mysqli_query($conn, $paginationStatement);
        // Query to get the total number of employers
        $totalRecords = mysqli_num_rows($GetRecordsQuery);
    // Calculate the total number of employers. Will pass to 1 if there are no employers
        $totalPages = ($totalRecords == 0) ? 1 : ceil($totalRecords / $pageLimit);
        $pagination = "";

        // check if the page number is greater than 1
        if ($page >= 1) {
            // Set the previous page
            $previous = $page - 1;
            $pagination .=  "<li class='page-item' data-page='{$previous}'>
                                <a class='page-link bg-info text-dark'>Previous</a>
                            </li>";
        }
        else {
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
            $pagination .= "<li class='page-item {$active}' data-page='{$i}'>
                                    <a class='page-link text-dark'>{$i}</a>
                                </li>";
        }

        // Check if there are more than 1 page
        if ($page <= $totalPages) {
            // Set the next page
            $next = $page + 1;
            $pagination .=  "<li class='page-item' data-page='{$next}'>
                                    <a class='page-link bg-info text-dark'>Next</a>
                                </li>";
        } 
        else {
            $pagination .=  "<li class='page-item' data-page='{$next}'>
                                <a class='page-link bg-info text-dark'>Next</a>
                            </li>";
        }

        // For entries display
        $entries_start = $start + 1;
        $entries_end = $start + $pageLimit;

        $entries = "<span>Show <b>{$entries_start}</b> to <b>{$entries_end}</b> of {$totalRecords} entries</span>";

        // Stored and return the displays for employer management page
        $response = array(
            'tableData' => $tableData,
            'pagination' => $pagination,
            'name' => 'Cannot be changed',
            'entries' => $entries);

        echo json_encode($response);
    }

    // This portion will fetch the data and print it into the input bar of the edit modal.
    if (isset($_POST['displayData'])) {
        $postId = mysqli_real_escape_string($conn, $_POST['postId']);
        $fetchDeletedQuery = mysqli_query($conn, "SELECT * FROM `jobpost` WHERE `post_iud` = '$postId'");
        $row = mysqli_fetch_assoc($fetchDeletedQuery);
        $companyName = $row['company_name'];
        $jobCategory = $row['job_category'];

        $response = array(
            'companyName' => $companyName,
            'job_category' => $jobCategory
        );

        echo json_encode($response);
    }
    
    if (isset($_POST['deleteJobPost'])) {
        $postId = mysqli_real_escape_string($conn, $_POST['postId']);
        
        //deleting the jobpost and moving it to recycle bin
        $fetchDeletedQuery = mysqli_query($conn, "SELECT * FROM `jobpost` WHERE `post_iud` = '$postId'");
        $row = mysqli_fetch_assoc($fetchDeletedQuery);
        $companyName = $row['company_name'];
        $jobTitle = $row['job_title'];
        $employment = $row['employment_type'];
        $jobCategory = $row['job_category'];
        $jobDescription = $row['job_description'];
        $salary = $row['salary'];
        $employerEmail = $row['employer_email'];
        $primarySkill = $row['primary_skill'];
        $secondarySkill = $row['secondary_skill'];
        $postedby = $row['postedby_uid'];
        $date = dateTimeConvertion($row['date_posted']);
            
        mysqli_query($conn, "INSERT INTO `jobpost_recycler`(
        `company_name`,
        `job_title`,
        `employment_type`,
        `job_category`,
        `job_description`,
        `salary`,
        `employer_email`,
        `primary_skill`,
        `secondary_skill`,
        `postedby_uid`,
        `date_posted`
        )
        VALUES(
            '$companyName',
            '$jobTitle',
            '$employment',
            '$jobCategory',
            '$jobDescription',
            '$salary',
            '$employerEmail',
            '$primarySkill',
            '$secondarySkill',
            '$postedby',
            '$date'
        )");

        mysqli_query($conn, "DELETE FROM `jobpost` WHERE `post_iud` = '$postId'");
    }
    else if (isset($_POST['edit'])) {
        $postId = $_POST['postId'];
        $company = $_POST['company'];
        $jobcategory = $_POST['jobcategory'];
        mysqli_query($conn, "UPDATE jobpost SET company_name = '$company', job_category = '$jobcategory' WHERE post_iud = '$postId'");

        // Has errors to be fixed soon [Incomplete codes were present]
        $response = array(
            'status' => 'success'
            // 'company' => $company,
            // 'jobcategory' => $jobCategory,
            // 'postId' => $postId
        );
        
        echo json_encode($response);
    }

?>