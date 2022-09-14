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

if (isset($_POST['fetchData'])) {
    $jobseeker_id = $_SESSION['user_id'];
    
    $query = "SELECT * FROM jobpost_bookmark WHERE jobseeker_id='$jobseeker_id'";
    $query = mysqli_query($conn, $query);
    
    $tableData = "";
    while ($row = mysqli_fetch_assoc($query)) {
        $jobpost_id = $row['jobpost_id'];
        $job_title = $row['job_title'];
        $job_description = $row['job_description'];

        $tableData .= "
        <tbody class='bg-light text-dark text-center'>
            <tr class='tr1'>
            <td data-title='Job Tittle'>{$job_title}</td>
            <td data-title='Job Description' class='descript'>{$job_description}</td>
            <td data-title='Action' class='action'>
        ";

        $checkPost = mysqli_query($conn, "SELECT * FROM applied_jobs WHERE post_id='$jobpost_id' AND jobseeker_id='$jobseeker_id'");
        $isApplied = (mysqli_num_rows($checkPost) != 0) ? true : false; 

        if ($isApplied) {
            $tableData .= "<button class='btn btn-info shadow btn-apply' data-bs-toggle='modal' data-bs-target='#modal-apply' type='button' data-id='{$jobpost_id}' id='btn-info' disabled>APPLIED</button>";
        }
        else {
            $tableData .= "<button class='btn btn-info shadow btn-apply' data-bs-toggle='modal' data-bs-target='#modal-apply' type='button' data-id='{$jobpost_id}' id='btn-info'>APPLY</button>";
        }

        $tableData .= "
            <button class='btn btn-dark btn-sm rounded-circle btn-delete' data-bs-toggle='modal' data-bs-target='#modal-delete' type='button' data-id='{$jobpost_id}' data-toggle='tooltip'
                data-placement='top' title='Delete'>
                <i class='fa fa-trash'></i>
            </button>
            </td>
            </tr>
        </tbody>
        ";
    }

    // $row = mysqli_fetch_assoc($query);
    $response = array (
        'tableData' => $tableData
    ); 

    echo json_encode($response);
}

if (isset($_POST['delete'])) {
    $jobseeker_id = $_SESSION['user_id'];
    $jobpost_id = $_POST['postId'];

    $query = "DELETE FROM `jobpost_bookmark` WHERE jobseeker_id='$jobseeker_id' AND jobpost_id='$jobpost_id'";
    $query = mysqli_query($conn, $query);

    $response = array (
        // Blank
    );

    echo json_encode($response);
}

if (isset($_POST['apply'])) {
    $postId = ($_POST['postId']);
    $jobseeker_id = ($_SESSION['user_id']);

    $query = "SELECT * FROM jobpost WHERE post_id = '$postId'";
    $query = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($query);

    $job_title = $row['job_title'];
    $postedby = $row['postedby_uid'];

    $query = "SELECT * FROM jobseeker WHERE jobseeker_id = '$jobseeker_id'";
    $query = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($query);

    $fullname = $row['fullname'];
    $resume = $row['resume'];

    mysqli_query($conn, "INSERT INTO `applied_jobs`(
        `post_id`,
        `employer_id`,
        `jobseeker_id`,
        `job_title`,
        `fullname`,
        `resume`,
        `status`,
        `date_applied`
    )
    VALUES(
        '$postId',
        '$postedby',
        '$jobseeker_id',
        '$job_title',
        '$fullname',
        '$resume',
        'Pending',
        NOW()
    )");

    $response = array(
        // Blank
    );
    echo json_encode($response);
}