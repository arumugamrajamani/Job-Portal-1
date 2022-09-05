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
        $pageLimit = 2;
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
            $statement = "SELECT * FROM jobpost_recycler WHERE company_name LIKE '%$search%' LIMIT $start, $pageLimit";
            $paginationStatement = "SELECT * FROM jobpost_recycler WHERE company_name LIKE '%$search%' OR employer_email LIKE '%$search%'";
        }
        else {
            $statement = "SELECT * FROM jobpost_recycler LIMIT $start, $pageLimit";
            $paginationStatement = "SELECT * FROM jobpost_recycler";
        }
        $tableData = "";
        $getPosts = mysqli_query($conn, $statement);
        while($row = mysqli_fetch_assoc($getPosts)){
            $uid = $row['postedby_uid'];
            $postId = $row['post_id'];
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
                                <button data-id='{$postId}' class='btn text-white btn-success restore-Btn' title='Restore' type='button' id='btn-info'><i class='fa-solid fa-clock-rotate-left'></i></button>
                                <button class='btn btn-danger delete-Btn' type='button' id='btn-info' data-id ='{$postId}' data-bs-toggle='modal' data-bs-target='#exampleModal' title='Delete'><i class='bi bi-trash3'></i></button>
                        </td>";
        }
        // Query to get the total number of employers
        $GetRecordsQuery = mysqli_query($conn, $paginationStatement);
        // Query to get the total number of employers
        $totalRecords = mysqli_num_rows($GetRecordsQuery);
        // Calculate the total number of employers
        $totalPages = ceil($totalRecords / $pageLimit);
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
            'entries' => $entries);
    echo json_encode($response);
    }
    
  // when user deleted in jobpost recycler
if (isset($_POST['deleteJobPost'])) {
    $postId = mysqli_real_escape_string($conn, $_POST['postId']);
    mysqli_query($conn, "DELETE FROM `jobpost_recycler` WHERE post_id = '$postId'");
}
  
  
  // when user restore a job
if (isset($_POST['restoreJobPost'])) {
    $postId = mysqli_real_escape_string($conn, $_POST['postId']);
    
    //restoring the deleted job
    $fetchDeletedQuery = mysqli_query($conn, "SELECT * FROM `jobpost_recycler` WHERE post_id = '$postId'");
    $row = mysqli_fetch_assoc($fetchDeletedQuery);
    $postId = $row['post_id'];
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

    mysqli_query($conn, "INSERT INTO jobpost (post_id, company_name, job_title, employment_type, job_category, job_description, salary, employer_email, primary_skill, secondary_skill, postedby_uid, date_posted)
                            VALUES ('$postId', '$companyName', '$jobTitle', '$employment', '$jobCategory', '$jobDescription', '$salary', '$employerEmail', '$primarySkill', '$secondarySkill', '$postedby', '$date')");
    
    mysqli_query($conn, "DELETE FROM jobpost_recycler WHERE post_id = '$postId'");
}
  
 ?>