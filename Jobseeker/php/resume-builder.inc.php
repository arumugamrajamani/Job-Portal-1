<?php 
    //includes db connection from 2 folders back
    include '../../php/db-connection.php';
    session_start();

    // get the location of the profile picture from the storage
    function  getProfilePicLoc($profilePic) {
        if ($profilePic != NULL && file_exists("../../storage/" . $profilePic)) {
            return "../../storage/" . $profilePic;
        } else {
            return "../../storage/noProfilePic.png";
        }
    }

    if (isset($_POST['fetchData'])) {
        $jobseekerId = $_SESSION['user_id'];
        // Create query to get the employer information
        $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM jobseeker WHERE jobseeker_id = '$jobseekerId'");
        $row = mysqli_fetch_assoc($fetchDetailsQuery);
        // Get the employer information needed to edit modal
        $profilePic = getProfilePicLoc($row['profile_picture']);
        $name = $row['fullname'];
    
        // Create Assoc array to return to the ajax call
        $response = array(
            'pfp' => $profilePic,
            'name' => $name
        );
        echo json_encode($response);
    }
    
?>