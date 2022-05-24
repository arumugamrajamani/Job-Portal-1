<?php
    //includes db connection from 2 folders back
    include '../../php/db-connection.php';
    
    if(isset($_POST['loadData'])){
        //Variable to hold the querryu result
        $output = "";
        //fetch all the jobseeker info from the database
        $checkJobseekerInfo = mysqli_query($conn, "SELECT * FROM jobseeker");
        while($row = mysqli_fetch_assoc($checkJobseekerInfo)){
            $jobseekerId = $row['jobseeker_id'];
            $fullName = $row['fullname'];
            $profilePicture = "../storage/".$row['profile_picture'];
            $resume = "../storage".$row['resume'];
            $email = $row['email'];
            $number = $row['mobile_number'];
            $date = $row['date_created'];
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