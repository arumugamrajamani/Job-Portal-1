<?php
session_start();
//includes db connection from 2 folders back
include '../../php/db-connection.php';

function dateTimeConvertion($date){
    return date('M d, Y, h:i A', strtotime($date));
}
function  getProfilePicLoc($profilePic){
    if ($profilePic != NULL && file_exists("../../storage/" . $profilePic)) {
        return "../storage/" . $profilePic;
    } else {
        return "image/comlogo.png";
    }
}

if (isset($_POST['getData'])) {
    $id = $_SESSION['postId'];
    $getPosts = mysqli_query($conn, "SELECT * FROM `jobpost` WHERE `post_iud` = '$id'");
    $row = mysqli_fetch_assoc($getPosts);
    $uid = $row['postedby_uid'];
    $postId = $row['post_iud'];
    $getEmployerName = mysqli_query($conn, "SELECT * FROM `employer` WHERE `employer_id` = '$uid'");
    while($name = mysqli_fetch_assoc($getEmployerName)){
        $companyAddress = $name['company_address'];
        $companyName = $name['company_name'];
        $companyLogo = getProfilePicLoc($name['company_logo_name']);
    }
    $jobCategory = $row['job_category'];
    $employment = $row['employment_type'];
    $jobTitle = $row['job_title'];
    $salary = $row['salary'];
    $description = $row['job_description'];
    $date = dateTimeConvertion($row['date_posted']);
    $data = array('date' => $date, 'employment' => $employment, 'jobCategory' => $jobCategory, 'jobTitle' => $jobTitle, 'companyAddress' => $companyAddress, 'companyName' => $companyName, 'salary' => $salary, 'description' => $description);
    echo json_encode($data);
}
else if(isset($_POST['delete'])) {
     $uid = mysqli_real_escape_string($conn, $_POST['postId']);
     $updatePosts = mysqli_query($conn, "UPDATE `jobpost` SET `bookmark`='false' WHERE `post_iud` = '$uid'");
}
else if(isset($_POST['update'])) {
    $id = ($_SESSION['user_id']);
    $uid = ($_SESSION['postId']);
    $updatePosts = mysqli_query($conn, "UPDATE `jobpost` SET `bookmark`='$id' WHERE `post_iud` = '$uid'");
}
else if(isset($_POST['apply'])) {
    $uid = ($_SESSION['postId']);
    $fetchDeletedQuery = mysqli_query($conn, "SELECT * FROM `jobpost` WHERE `post_iud` = '$uid'");
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
    $id = ($_SESSION['user_id']);
        
    mysqli_query($conn, "INSERT INTO `applied_jobs`(
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
    `date_applied`,
    `status`,
    `jobseeker_id`
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
     NOW(),
    'Pending',
    '$id'
)");
}
else{
    $tableData = "";
    $id = ($_SESSION['user_id']);
    $getPosts = mysqli_query($conn, "SELECT * FROM `jobpost` WHERE `bookmark` = '$id'");
    while($row = mysqli_fetch_assoc($getPosts)){
        $postId = $row['post_iud'];
        $jobTitle = $row['job_title'];
        $description = $row['job_description'];
        $tableData .= "<tr class='tr1'>
        <td data-title='Job Title'>{$jobTitle}</td>
        <td data-title='Job Description' class='descript'>{$description}</td>
        <td data-title='Action' class='action'><button class='btn btn-info shadow' type='button' id='btn-info'>APPLY</button>
        <button id='delete' class='btn btn-dark btn-sm rounded-circle' type='button' data-bs-toggle='modal' data-bs-target='#modal-delete' data-id='{$postId}' data-placement='top' title='Delete'><i class='fa fa-trash'></i></button>
        </td>
        </tr>";
    }
  $data = array('tableData' => $tableData);
  echo json_encode($data);
}