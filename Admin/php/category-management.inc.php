<?php
//includes db connection from 2 folders back
include '../../php/db-connection.php';

//  Function for Sanitizing all input data 
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Convert old date time into textual format
function dateTimeConvertion($date)
{
    return date('M d, Y, h:i A', strtotime($date));
}

// Function for checking if Job Category is existing in the database, return boolean true or false
function isCategoryExist($jobcategory)
{
    $jobcategory = mysqli_real_escape_string($GLOBALS['conn'], $jobcategory);
    $CheckCategoryQuery = mysqli_query($GLOBALS['conn'], "SELECT * FROM category WHERE job_title = '$jobcategory'");
    if (mysqli_num_rows($CheckCategoryQuery) > 0) {
        return true;
    } else {
        return false;
    }
}

// Function for validating if input is valid 
function isValidCategory($category)
{
    if (preg_match("/^[a-zA-Z0-9 .]+$/", $category)) {
        return true;
    } else {
        return false;
    }
}



if (isset($_POST['loadData'])) {
    // Variables to store the data
    $page = 0;
    // Set the item limit per page
    $pageLimit = 4;
    //Variable to hold the querryu result
    $tableData = "";

    // Check if the page number is set
    if (isset($_POST['page'])) {
        // Set the page number
        $page = $_POST['page'];
        // Check if search is set
    } elseif (isset($_POST['search'])) {
        // Set the page number to 1
        $page = 1;
    } else {
        // Set the page number to 1
        $page = 1;
    }

    // Calculate the starting row
    $start = ($page - 1) * $pageLimit;

    // Check if search is present
    if (isset($_POST['search'])) {
        $search = trim($_POST['search']);
        $statement = "SELECT * FROM category WHERE job_title LIKE '%$search%' OR date_created LIKE '%$search%' LIMIT $start, $pageLimit";
        $paginationStatement = "SELECT * FROM category WHERE job_title LIKE '%$search%' OR date_created LIKE '%$search%'";
    } else {
        $statement = "SELECT * FROM category LIMIT $start, $pageLimit";
        $paginationStatement = "SELECT * FROM category";
    }
    //fetch all the job category from the database
    $checkCategoryInfo = mysqli_query($conn, $statement);
    while ($row = mysqli_fetch_assoc($checkCategoryInfo)) {
        $categoryId = $row['category_id'];
        $jobcategory = $row['job_title'];

        $date = dateTimeConvertion($row['date_created']);
        //storing the data into $output.
        $tableData .=  "<tr class='tr'>
                            <td>{$jobcategory}</td>
                            <td>{$date}</td>
                            <td>              
                                <button class='edit btn-success fetch-details' type='button' id='btn-info' data-id='{$categoryId}' data-bs-toggle='modal' data-bs-target='#modal-editdetails' title='Edit Details'><i class='fa-solid fa-pen-to-square'></i></button>                                  
                                <button class='btn btn-danger delete-Btn' type='button' id='btn-info'  data-id='{$categoryId}' data-bs-toggle='modal' data-bs-target='#modal-delete' title='Delete'><i class='bi bi-trash3'></i></button>
                            </td>
                        </tr>";
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
    } else {
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
        'entries' => $entries
    );
    // Return this output variable to the ajax call
    echo json_encode($response);
}

// when user delete a jobseeker
if (isset($_POST['deleteCategory'])) {
    $categoryId = mysqli_real_escape_string($conn, $_POST['categoryId']);
    // deleting the jobseeker in the database
    mysqli_query($conn, "DELETE FROM category WHERE category_id = '$categoryId'");
    // Return nothing to the ajax call
}

// When user click edit button return the selected employer information
if (isset($_POST['fetchDetails'])) {
    $categoryId = mysqli_real_escape_string($conn, $_POST['categoryId']);
    // Create query to get the employer information
    $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM category WHERE category_id = '$categoryId'");
    $row = mysqli_fetch_assoc($fetchDetailsQuery);
    // Get the employer information needed to edit modal
    echo $jobcategory = $row['job_title'];
}

// When user click save details button in edit modal
if (isset($_POST['saveDetails'])) {

    // Validation for Job Category
    if (empty($_POST['jobcategory'])) {
        $jobcategoryRR = array('status' => 'error', 'message' => 'Job Category is required.');
    } else if (!isValidCategory($_POST['jobcategory'])) {
        $jobcategoryRR = array('status' => 'error', 'message' => 'Only characters and numbers are allowed.');
    } else {
        $jobcategoryRR = array('status' => 'success');
    }

    if ($jobcategoryRR['status'] == 'success') {
        // Assigned the post data to new variable, escape the data to prevent sql injection, and sanitize the data
        $categoryId = mysqli_real_escape_string($conn, sanitize_input($_POST['categoryId']));
        $jobcategory = mysqli_real_escape_string($conn, sanitize_input($_POST['jobcategory']));
        // Create query to update the jobseeker information
        mysqli_query($conn, "UPDATE category SET job_title = '$jobcategory' WHERE category_id = '$categoryId'");

        // Return this as status success response
        $response = array('status' => 'success');
    } else {
        $response = array('status' => 'error', 'jobcategoryRR' => $jobcategoryRR);
    }
    // Return the response
    echo json_encode($response);
}

// When user click add button modal
if (isset($_POST['addCategory'])) {
    // Validation for Job Category
    if (empty($_POST['jobcategory'])) {
        $jobcategoryRR = array('status' => 'error', 'message' => 'Job Category is required.');
    } else if (!isValidCategory($_POST['jobcategory'])) {
        $jobcategoryRR = array('status' => 'error', 'message' => 'Only characters and numbers are allowed.');
    } else {
        $jobcategoryRR = array('status' => 'success');
        $jobcategory = sanitize_input($_POST['jobcategory']);
    }

    if ($jobcategoryRR['status'] == 'success') {

        $jobcategory = mysqli_real_escape_string($conn, $_POST['jobcategory']);
        // Create query to Insert the Job Category
        mysqli_query($conn, "INSERT INTO category (job_title, date_created) VALUES ('$jobcategory' , NOW())");
        // Return this as status success response
        $response = array('status' => 'success');
    } else {
        $response = array('status' => 'error', 'jobcategoryRR' => $jobcategoryRR);
    }
    // Return the response
    echo json_encode($response);
}
