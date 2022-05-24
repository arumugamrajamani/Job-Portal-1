<?php
    //includes db connection from 2 folders back
    include '../../php/db-connection.php';

    //check if profile pic is null then returns a string value
    function isProfilePicNull($profilePic){
        if($profilePic != NULL){
            return "../storage/".$profilePic;
        }else{
            return "../storage/noProfilePic.png";
        }
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
            $profilePicture = isProfilePicNull($row['profile_picture']);
            $jobseekerId = $row['jobseeker_id'];
            $fullName = $row['fullname'];
            // $profilePicture = "../storage/".$row['profile_picture'];
            $resume = "../storage".$row['resume'];
            $email = $row['email'];
            $number = $row['mobile_number'];
            $date = $row['date_created'];
            //storing the data into $output.
            $output .=  "
            <tr style='height: 6rem; border: none; box-shadow: none;'>
                <td class='view-pp'><img src='{$profilePicture}' alt='' style='width: 60px; cursor: pointer;' data-bs-toggle='modal' data-bs-target='#profile-picture'></td>
                <td>{$fullName}</td>            
                <td>{$number}</td>            
                <td>{$email}</td>            
                <td>{$date}</td>  
                <td>
                <button style='width: 40px; border: 0;' class='btn-success' type='button' id='btn-info' data-bs-toggle='modal' data-bs-target='#modal-editdetails'><i class='fa-solid fa-pen-to-square'></i></button>                                  
                <button class='btn btn-danger' type='button' id='btn-info' data-bs-toggle='modal' data-bs-target='#exampleModal'><i class='bi bi-trash3'></i></button></td>
                </td>       
            </tr>"                                
;
        }
        // Return this output variable to the ajax call
        echo $output;

    }
?>