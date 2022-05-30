<?php
    //includes db connection from 2 folders back
    include '../../php/db-connection.php';

    //check if profile pic is not null && if file exists  then returns a string value of the profile picture location
    function getProfilePicLoc($profilePic){
        if($profilePic != NULL && file_exists ("../../storage/".$profilePic )){
            return "../storage/".$profilePic;
        }else{
            return "../storage/noProfilePic.png";
        }
    }

    // Convert old date time into textual format
    function dateTimeConvertion($date){ 
        return date('M d, Y, h:i A', strtotime($date)); 
    }
    
    if(isset($_POST['loadData'])){
        //Variable to hold the querryu result
        $output = "";
        // Check if search is present
        if(isset($_POST['search'])){
            $search = $_POST['search'];
            $statement = "SELECT * FROM jobseeker WHERE fullname LIKE '%$search%' OR mobile_number LIKE '%$search%' OR email LIKE '%$search%'";
        } else {
            $statement = "SELECT * FROM jobseeker";
        }
        //fetch all the jobseeker info from the database
        $checkJobseekerInfo = mysqli_query($conn, $statement);
        while($row = mysqli_fetch_assoc($checkJobseekerInfo)){
            $jobseekerId = $row['jobseeker_id'];
            $profilePicture = getProfilePicLoc($row['profile_picture']);
            $jobseekerId = $row['jobseeker_id'];
            $fullName = $row['fullname'];
            $resume = "../storage".$row['resume'];
            $email = $row['email'];
            $number = $row['mobile_number'];
            $date = dateTimeConvertion($row['date_created']);
            //storing the data into $output.
            $output .=  "
            <tr style='height: 6rem; border: none; box-shadow: none;'>
                <td class='view-pp'><img src='{$profilePicture}' alt='' style='width: 60px; cursor: pointer;' data-bs-toggle='modal' data-bs-target='#profile-picture'></td>
                <td>{$fullName}</td>            
                <td>{$number}</td>            
                <td>{$email}</td>            
                <td>{$date}</td>  
                <td>
                <button  class='btn-success fetch-details' style='width: 40px; border: 0;' type='button' id='btn-info' data-id='{$jobseekerId}' data-bs-toggle='modal' data-bs-target='#modal-editdetails'><i class='fa-solid fa-pen-to-square'></i></button>                                  
                <button class='btn btn-danger delete-Btn' type='button' id='btn-info' data-id='{$jobseekerId}' data-bs-toggle='modal' data-bs-target='#deleteJobseeker'><i class='bi bi-trash3'></i></button></td>
                </td>
            </tr>";
        }
        // Return this output variable to the ajax call
        echo $output;
    }

    // when user delete a jobseeker
    if(isset($_POST['deleteJobseeker'])){
        // Create query delete code here
        //deleting the jobseeker in the database
        $jobseekerId = $_POST['jobseekerId'];        
        mysqli_query($conn,"DELETE FROM jobseeker WHERE jobseeker_id = '$jobseekerId'");
    }

    // When user click edit button return the selected employer information
    if(isset($_POST['fetchDetails'])){
        $jobseekerId = mysqli_real_escape_string($conn, $_POST['jobseekerId']);
        // Create query to get the employer information
        $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM jobseeker WHERE jobseeker_id = '$jobseekerId'");
        $row = mysqli_fetch_assoc($fetchDetailsQuery);
        // Get the employer information needed to edit modal
        $jobseekerName = $row['fullname'];
        $jobseekerNumber = $row['mobile_number'];
        $jobseekerEmail = $row['email'];

        // Create Assoc array to return to the ajax call
        $response = array(
            'jobseekerName' => $jobseekerName,
            'jobseekerNumber' => $jobseekerNumber,
            'jobseekerEmail' => $jobseekerEmail
        );

        echo json_encode($response);
    }


?>