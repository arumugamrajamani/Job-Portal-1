<?php
//includes db connection from 2 folders back
include '../../php/db-connection.php';
session_start();


//check if profile pic is not null && if file exists  then returns a string value of the profile picture location
function getProfilePicLoc($profilePic)
{
    if ($profilePic != NULL && file_exists("../../storage/" . $profilePic)) {
        return "../storage/" . $profilePic;
    } else {
        return "../storage/noProfilePic.png";
    }
}

// When the page is loaded the js will call for this then this will get the admin's data from the DB
if (isset($_POST['fetchData'])) {
    $adminId = $_SESSION['user_id'];
    // Create query to get the employer information
    $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM admin WHERE admin_id = '$adminId'");
    $row = mysqli_fetch_assoc($fetchDetailsQuery);
    // Get the employer information needed to edit modal
    $adminName = $row['fullname'];
    $adminEmail = $row['email'];
    $adminNumber = $row['mobile_number'];
    $profilePicture = getProfilePicLoc($row['profile_pic']);

    // Create Assoc array to return to the ajax call
    $response = array(
        'fullName' => $adminName,
        'email' => $adminEmail,
        'number' => $adminNumber,
        'profilePic' => $profilePicture
    );

    echo json_encode($response);
}
