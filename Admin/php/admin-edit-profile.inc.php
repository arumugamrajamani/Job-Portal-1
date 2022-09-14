<?php
//includes db connection from 2 folders back
include '../../php/db-connection.php';
session_start();

//  Function for Sanitizing all input data 
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function for validating if input is valid fullname
function isValidFullname($fullname)
{
    if (preg_match("/^[a-zA-Z .]*$/", $fullname)) {
        return true;
    } else {
        return false;
    }
}

// Function for validating if inout is valid number
function isValidNumber($number)
{
    if (preg_match("/^[0-9]*$/", $number)) {
        return true;
    } else {
        return false;
    }
}

// For generating random string for image name
function generateRandomString()
{
    $rand1 = rand(1111, 9999);   //  generate random number in $var1 variable
    $rand2 = rand(1111, 9999);   //  generate random number in $var2 variable
    $rand3 = $rand1 . $rand2;   //  concatenate $var1 and $var2 in $var3
    return md5($rand3);  //  convert $var3 using md5 function and generate 32 characters hex number
}

// Function for getting the profile picture name
function getProfilePicture()
{
    $GetProfilePicQuery = mysqli_query($GLOBALS['conn'], "SELECT profile_pic FROM admin WHERE admin_id = '{$_SESSION['user_id']}'");
    $row = mysqli_fetch_assoc($GetProfilePicQuery);
    $profilePic = $row['profile_pic'];
    return $profilePic;
}

// Function for unlinking old profile pic to insert the new one
function unlinkOldProfilePic()
{
    $oldProfilePic = getProfilePicture();
    if ($oldProfilePic != NULL && file_exists("../../storage/profile pictures/admin/" . $oldProfilePic)) {
        unlink("../../storage/profile pictures/admin/" . $oldProfilePic);
    }
}

// check if profile pic is not null && if file exists  then returns a string value of the profile picture location
function getProfilePicLoc($profilePic)
{
    if ($profilePic != NULL && file_exists("../../storage/profile pictures/admin/" . $profilePic)) {
        return "../storage/profile pictures/admin/" . $profilePic;
    } else {
        return "../storage/placeholder/noProfilePic.png";
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

// When the user upload a new profile picture
if (isset($_POST['changeprofile'])) {
    //  Array containing valid image extension
    $allowed_image_extension = array("png", "jpeg", "jpg");
    //  Get profile picture file extension
    $file_extension = pathinfo($_FILES["profilePic"]["name"], PATHINFO_EXTENSION);

    // Validate uploaded image
    if (($_FILES["profilePic"]["size"] > 5000000)) {
        $response = array('status' => 'error', 'message' => "Image size exceeds 5MB.");
    } elseif (!in_array($file_extension, $allowed_image_extension)) {
        $response = array('status' => 'error', 'message' => "Upload valid images. Only PNG, JPG, JPEG are allowed.");
    } else {
        // Call this function to remove the old profile pic in the file system
        unlinkOldProfilePic();
        $filename = generateRandomString() . "." . $file_extension;
        $query_update_profile = mysqli_query($conn, "UPDATE admin SET profile_pic = '$filename' WHERE admin_id = '{$_SESSION['user_id']}'");
        // Check if query success
        if ($query_update_profile) {
            $target_directory = "../../storage/profile pictures/admin/";
            $path =  $target_directory . $filename;
            move_uploaded_file($_FILES["profilePic"]["tmp_name"], $path);
            $response = array('status' => 'success');
        } else {
            $response = array('status' => 'error', 'message' => "Problem while uploading.");
        }
    }
    ///
    echo json_encode($response);
}

// When user click on the save button
if (isset($_POST['saveNow'])) {
    // Validation for fullname
    if (empty($_POST['fullname'])) {
        $fullnameRR = array('status' => 'error');
    } else if (!isValidFullname($_POST['fullname'])) {
        $fullnameRR = array('status' => 'error');
    } else {
        $fullnameRR = array('status' => 'success');
        $fullname = sanitize_input($_POST['fullname']);
    }

    // Validation for mobilenumber
    if (empty($_POST['contactnumber'])) {
        $contactnumberRR = array('status' => 'error');
    } elseif (!isValidNumber($_POST['contactnumber'])) {
        $contactnumberRR = array('status' => 'error');
    } else {
        $contactnumberRR = array('status' => 'success');
        $contactnumber = sanitize_input($_POST['contactnumber']);
    }

    // Check if all the validation is successful
    if ($fullnameRR['status'] == 'success' && $contactnumberRR['status'] == 'success') {
        // Escape all the inputs to prevent SQL injection
        $fullname = mysqli_real_escape_string($conn, $fullname);
        $contactnumber = mysqli_real_escape_string($conn, $contactnumber);
        // Create query to update the admin's details
        $updateAdminDetailsQuery = mysqli_query($conn, "UPDATE admin SET fullname = '$fullname', mobile_number = '$contactnumber' WHERE admin_id = '{$_SESSION['user_id']}'");
        if ($updateAdminDetailsQuery) {
            $response = array('status' => 'success', 'message' => "Updated Successfully.");
        } else {
            $response = array('status' => 'error', 'message' => "Problem while updating.");
        }
        // $response = array('status' => 'success', 'message' => "Successfully updated.");
    } else {
        $response = array('status' => 'error', 'message' => "Please fill up all the fields.");
    }
    // return this as a json object and exit
    echo json_encode($response);
}
