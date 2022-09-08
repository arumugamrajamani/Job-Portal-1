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

    // The website will initially fetch the data from the sql to display the specific jobpost
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
    
    if(isset($_POST['apply'])) {
        $postId = ($_POST['postId']);
        $id = ($_SESSION['user_id']);

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
            '$primarySkill',
            '$secondarySkill',
            '$postedby',
            NOW(),
            'Pending',
            '$id'
        )");

        $data = array('status' => 'success');
        echo json_encode($data);
    }

    if(isset($_POST['bookmark'])) {
        $post_id = ($_POST['postId']);
        $jobseeker_id = $_SESSION['user_id'];

        // The website will check if the user has already bookmarked the post
        $count = "SELECT COUNT(jobpost_id) as total FROM jobpost_bookmark WHERE jobpost_id='$post_id' AND jobseeker_id='$jobseeker_id'";
        $count = mysqli_query($conn, $count);
        $count = mysqli_fetch_assoc($count);

        if ($count['total'] == 0)
        {
            $query = "SELECT * FROM `jobpost` WHERE `post_id` = '$post_id'";
            $query = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($query);
    
            $company_name = $row['company_name'];
            $job_title = $row['job_title'];
            $employer_id = $row['postedby_uid'];
            $job_description = $row['job_description'];

            
    
            $insert = "INSERT INTO `jobpost_bookmark`(
                `jobpost_id`, 
                `jobseeker_id`, 
                `employer_id`,
                `job_title`, 
                `company_name`,
                `job_description`,
                `date_bookmarked`
            ) 
            VALUES ( 
                '$post_id',
                '$jobseeker_id',
                '$employer_id',
                '$job_title',
                '$company_name',
                '$job_description',
                NOW()
            )";
            
            mysqli_query($conn, $insert);

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
?>