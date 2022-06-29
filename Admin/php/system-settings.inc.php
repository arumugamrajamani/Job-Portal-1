<?php
//includes db connection from 2 folders back
include '../../php/db-connection.php';
session_start();


// Function for getting the profile picture name
function getProfilePicture()
{
    $GetProfilePicQuery = mysqli_query($GLOBALS['conn'], "SELECT system_picture FROM system_settings WHERE id = '1'");
    $row = mysqli_fetch_assoc($GetProfilePicQuery);
    $profilePic = $row['profile_pic'];
    return $profilePic;
}

// Function for unlinking old profile pic to insert the new one
function unlinkOldProfilePic()
{
    $oldProfilePic = getProfilePicture();
    if ($oldProfilePic != NULL && file_exists("../../image/" . $oldProfilePic)) {
        unlink("../../image/" . $oldProfilePic);
    }
}

//  Function for Sanitizing all input data 
function sanitizeInput($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//  Function for Sanitizing all input data 
function sanitizeInputNoHTML($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    return $data;
}

function isEmail($email)
{
    if (preg_match("/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/", $email)) {
        return true;
    } else {
        return false;
    }
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



// When the page is loaded the js will call for this then this will get the admin's data from the DB
if (isset($_POST['fetchData'])) {
    // Create query to get the employer information
    $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM system_settings WHERE id = '1'");
    $row = mysqli_fetch_assoc($fetchDetailsQuery);
    // Get the employer information needed to edit modal
    $systemPicture = $row['system_picture'];
    $systemName = $row['system_name'];
    $systemTagline = $row['system_tagline'];
    $conatactNumber = $row['contact_number'];
    $email = $row['email'];
    $systemDescription = $row['system_description'];


    // Create Assoc array to return to the ajax call
    $response = array(
        'systemPicture' => $systemPicture,
        'systemName' => $systemName,
        'systemTagline' => $systemTagline,
        'conatactNumber' => $conatactNumber,
        'email' => $email,
        'systemDescription' => $systemDescription
    );
    echo json_encode($response);
}

if (isset($_POST['saveNow'])) {

    //<------------------------------------------- VALIDATE FOR SAVE ---------------------------------------->
    // Validation for systemName
    if (empty($_POST['systemName'])) {
        $systemNameRR = array('status' => 'error');
    } else {
        $systemNameRR = array('status' => 'success');
        $systemName = sanitizeInput($_POST['systemName']);
    }

    // Validation for systemTagline
    if (empty($_POST['systemTagline'])) {
        $systemTaglineRR = array('status' => 'error');
    } else {
        $systemTaglineRR = array('status' => 'success');
        $systemTagline = sanitizeInput($_POST['systemTagline']);
    }

    // Validation for contact number
    if (empty($_POST['conatactNumber'])) {
        $conatactNumberRR = array('status' => 'error');
    } else {
        $conatactNumberRR = array('status' => 'success');
        $conatactNumber = sanitizeInput($_POST['conatactNumber']);
    }

    // Validation for email
    if (empty($_POST['email'])) {
        $emailRR = array('status' => 'error');
    } elseif (!isEmail($_POST['email'])) {
        $emailRR = array('status' => 'error', 'message' => "Invalid email");
    } else {
        $emailRR = array('status' => 'success');
        $email = sanitizeInput($_POST['email']);
    }

    // Validation for fullname
    if (empty($_POST['systemDescription'])) {
        $systemDescriptionRR = array('status' => 'error');
    } else {
        $systemDescriptionRR = array('status' => 'success');
        $systemDescription = sanitizeInputNoHTML($_POST['systemDescription']);
    }


    //<--------------------------------------- --END OF VALIDATE FOR SAVE ---------------------------------------->

    // Check if all the validation is successful
    if (
        $systemNameRR['status'] == 'success' &&
        $systemTaglineRR['status'] == 'success' &&
        $conatactNumberRR['status'] == 'success' &&
        $emailRR['status'] == 'success' &&
        $systemDescriptionRR['status'] == 'success'
    ) {
        // Escape all the inputs to prevent SQL injection
        $systemName = mysqli_real_escape_string($conn, $systemName);
        $systemTagline = mysqli_real_escape_string($conn, $systemTagline);
        $conatactNumber = mysqli_real_escape_string($conn, $conatactNumber);
        $email = mysqli_real_escape_string($conn, $email);
        $systemDescription = mysqli_real_escape_string($conn, $systemDescription);

        // Create query to update the admin's details
        $query = mysqli_query($conn, "UPDATE system_settings SET 
        system_name = '$systemName', 
        system_tagline = '$systemTagline',
        contact_number = '$conatactNumber',
        email = '$email',
        system_description = '$systemDescription'
         WHERE id = '1'");

        if ($query) {
            $response = array('status' => 'success', 'message' => "Updated Successfully.");
        } else {
            $response = array('status' => 'error', 'message' => "Problem while updating.");
        }
    } else {
        $response = array('status' => 'error', 'message' => "Please fill up all the fields.");
    }
    // return this as a json object and exit
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
        $query_update_profile = mysqli_query($conn, "UPDATE system_settings SET system_picture = '$filename' WHERE id = '1'");
        // Check if query success
        if ($query_update_profile) {
            $target_directory = "../../image/";
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
