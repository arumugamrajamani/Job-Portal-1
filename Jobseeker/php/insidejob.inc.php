<?php
    session_start();
    //includes db connection from 2 folders back
    include '../../php/db-connection.php';

    function dateTimeConvertion($date_posted){
        return date('M d, Y, h:i A', strtotime($date_posted));
    }
    function getProfilePicLoc($profilePic) {
        if ($profilePic != NULL && file_exists("../../storage/" . $profilePic)) {
            return "../storage/" . $profilePic;
        } 
        else 
        {
            return "image/comlogo.png";
        }
    }

    if (isset($_POST['fetchData'])) {
        $postId = $_POST['postId'];
        $jobseeker_id = $_SESSION['user_id'];
        // $postId = $_POST['postId']
        $getPosts = mysqli_query($conn, "SELECT * FROM `jobpost` WHERE `post_id` = '$postId'");
        $row = mysqli_fetch_assoc($getPosts);
        // $post_id = $row['postedby_uid'];
        $postedby_uid = $row['postedby_uid'];
        // $postId = $row['post_id'];
        $post_id = $row['post_id'];

        $getEmployerName = mysqli_query($conn, "SELECT * FROM `employer` WHERE `employer_id` = '$postedby_uid'");
        while($name = mysqli_fetch_assoc($getEmployerName)){
            $company_address = $name['company_address'];
            $company_name = $name['company_name'];
            $company_logo_name = getProfilePicLoc($name['company_logo_name']); // Not being used
        }
        $job_category = $row['job_category'];
        $employment_type = $row['employment_type'];
        $job_title = $row['job_title'];
        $salary = $row['salary'];
        $job_description = $row['job_description'];
        $date_posted = dateTimeConvertion($row['date_posted']);
        
        // The website will check if the user has already applied in this jobpost
        $checkPost = mysqli_query($conn, "SELECT * FROM applied_jobs WHERE post_id='$post_id' AND jobseeker_id='$jobseeker_id'");
        $isApplied = (mysqli_num_rows($checkPost) != 0) ? true : false; 

        $response = array(
            'date' => $date_posted, 
            'employment' => $employment_type, 
            'jobCategory' => $job_category, 
            'jobTitle' => $job_title, 
            'companyAddress' => $company_address, 
            'companyName' => $company_name, 
            'salary' => $salary, 
            'description' => $job_description,
            'isApplied' => $isApplied
        );
        echo json_encode($response);
    }

    // Delete?? In insidejob?
    if(isset($_POST['delete'])) {
        $postId = mysqli_real_escape_string($conn, $_POST['postId']);
        $updatePosts = mysqli_query($conn, "UPDATE `jobpost` SET `bookmark`='false' WHERE `post_id` = '$postId'");
    }

    // if(isset($_POST['update'])) {
    //     $id = ($_SESSION['user_id']);
    //     $post_id = ($_SESSION['postId']);
    //     $updatePosts = mysqli_query($conn, "UPDATE `jobpost` SET `bookmark`='$id' WHERE `post_id` = '$post_id'");
    // }

    // check if the person was applied in this jobpost
    // SELECT * FROM applied_jobs WHERE post_id='$post_id' AND jobseeker_id=''id';
    // if(mysqli_num_row() != 0)
    // {
    //        $isApplied = true
    // }
    
    if(isset($_POST['apply'])) {
        $postId = ($_POST['postId']);
        $query = mysqli_query($conn, "SELECT * FROM `jobpost` WHERE `post_id` = '$postId'");
        $row = mysqli_fetch_assoc($query);
        $company_name = $row['company_name'];
        $job_title = $row['job_title'];
        $employment_type = $row['employment_type'];
        $job_category = $row['job_category'];
        $jobDescription = $row['job_description'];
        $salary = $row['salary'];
        $employerEmail = $row['employer_email'];
        $primarySkill = $row['primary_skill'];
        $secondarySkill = $row['secondary_skill'];
        $postedby = $row['postedby_uid'];
        $date_posted = dateTimeConvertion($row['date_posted']);
        $id = ($_SESSION['user_id']);
        
        $test = array(5,10,15,20);
        
        mysqli_query($conn, "INSERT INTO `applied_jobs`(
        `post_id`,
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
            '$postId',
            '$company_name',
            '$job_title',
            '$employment_type',
            '$job_category',
            '$jobDescription',
            '$salary',
            '$employerEmail',
            '(5, 10, 15)',
            '$secondarySkill',
            '$postedby',
            NOW(),
            'Pending',
            '$id'
        )");

        $data = array('status' => 'success');
        echo json_encode($data);
    }
    else {
        // $tableData = "";
        // $id = ($_SESSION['user_id']);
        // $getPosts = mysqli_query($conn, "SELECT * FROM `jobpost` WHERE `bookmark` = '$id'");
        // while($row = mysqli_fetch_assoc($getPosts)){
        //     $postId = $row['post_id'];
        //     $job_title = $row['job_title'];
        //     $job_description = $row['job_description'];
        //     $tableData .= "<tr class='tr1'>
        //     <td data-title='Job Title'>{$job_title}</td>
        //     <td data-title='Job Description' class='descript'>{$job_description}</td>
        //     <td data-title='Action' class='action'><button id = 'apply' class='btn btn-info shadow' type='button' id='btn-info' data-id='{$postId}' data-bs-toggle='modal' data-bs-target='#modal-apply'>APPLY</button>
        //     <button id='delete' class='btn btn-dark btn-sm rounded-circle' type='button' data-bs-toggle='modal' data-bs-target='#modal-delete' data-id='{$postId}' data-placement='top' title='Delete'><i class='fa fa-trash'></i></button>
        //     </td>
        //     </tr>";
        // }
        // $data = array('tableData' => $tableData);
        // echo json_encode($data);
    }

    if(isset($_POST['bookmark'])) {
        $post_id = ($_POST['postId']);

        // Check if the user already bookmarked the jobpost
        // Put code here
        // ----------------------------------------
        $count = "SELECT COUNT(jobpost_id) as total FROM jobpost_bookmark WHERE jobpost_id='$post_id'";
        $count = mysqli_query($conn, $count);
        $count = mysqli_fetch_assoc($count);

        if ($count['total'] == 0)
        {
            $query = "SELECT * FROM `jobpost` WHERE `post_id` = '$post_id'";
            $query = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($query);
    
            $company_name = $row['company_name'];
            $job_title = $row['job_title'];
            $jobseeker_id = $_SESSION['user_id'];
    
            $test = "INSERT INTO `jobpost_bookmark`(
                `jobpost_id`, 
                `jobseeker_id`, 
                `job_title`, 
                `company_name`,
                `date_bookmarked`
            ) 
            VALUES ( 
                '$post_id',
                '$jobseeker_id',
                '$job_title',
                '$company_name',
                NOW()
            )";
            mysqli_query($conn, $test);

            $string = "Bookmark Complete";
        }
        else
        {
            $string = "Already Bookmarked";
        }

        $data = array('status' => 'success',
                      'string' => $string);
        echo json_encode($data);
        
    }

    if(isset($_POST['testing'])) {
        $postId = ($_POST['postId']);
        $query = mysqli_query($conn, "SELECT * FROM `applied_jobs` WHERE `post_id` = '$postId'");    
        $row = mysqli_fetch_assoc($query);

        $json = $row['primary_skill'];

        $json = json_decode($json, true);
        
        $test = '(' . join(",", $json) . ')';
        // $test = json_encode($json);
        

        // var_dump(json_decode($json));
        // var_dump(json_decode($json, true));
    
        // $primarySkill = $row['primary_skill'];
        $data = array (  
            'status' => 'success',
            'test' => $test
        );
        echo json_encode($data);
    }
?>