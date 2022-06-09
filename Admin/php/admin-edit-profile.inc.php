<?php
    //includes db connection from 2 folders back
    include '../../php/db-connection.php';
    session_start();

     // For generating random string for image name
    function generateRandomString(){
        $rand1 = rand(1111,9999);   //  generate random number in $var1 variable
        $rand2 = rand(1111,9999);   //  generate random number in $var2 variable
        $rand3 = $rand1 . $rand2;   //  concatenate $var1 and $var2 in $var3
        return md5($rand3);  //  convert $var3 using md5 function and generate 32 characters hex number
    }

    // Function for getting the profile picture name
    function getProfilePicture(){
        $GetProfilePicQuery = mysqli_query($GLOBALS['conn'], "SELECT profile_pic FROM admin WHERE admin_id = '{$_SESSION['user_id']}'");
        $row = mysqli_fetch_assoc($GetProfilePicQuery);
        $profilePic = $row['profile_pic'];
        return $profilePic; 
    }

    // Function for unlinking old profile pic to insert the new one
    function unlinkOldProfilePic(){
        $oldProfilePic = getProfilePicture();
        if($oldProfilePic != NULL && file_exists("../../storage/" . $oldProfilePic)){
            unlink("../../storage/" . $oldProfilePic);
        }
    }

    // check if profile pic is not null && if file exists  then returns a string value of the profile picture location
    function getProfilePicLoc($profilePic){
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

    if(isset($_POST['changeprofile'])){
        //  Array containing valid image extension
        $allowed_image_extension = array("png", "jpeg", "jpg"); 
        //  Get profile picture file extension
        $file_extension = pathinfo($_FILES["profilePic"]["name"], PATHINFO_EXTENSION);  

         // Validate uploaded image
        if(($_FILES["profilePic"]["size"] > 5000000)) {
            $response = array('status' => 'error', 'message' => "Image size exceeds 5MB.") ;
        } elseif(!in_array($file_extension, $allowed_image_extension)) {
            $response = array('status' => 'error', 'message' => "Upload valid images. Only PNG, JPG, JPEG are allowed.");
        } else {
            // Call this function to remove the old profile pic in the file system
            unlinkOldProfilePic();
            $filename = generateRandomString() . "." . $file_extension; 
            $query_update_profile = mysqli_query($conn, "UPDATE admin SET profile_pic = '$filename' WHERE admin_id = '{$_SESSION['user_id']}'");
            // Check if query success
            if($query_update_profile){
                $target_directory = "../../storage/";
                $path =  $target_directory . $filename;
                move_uploaded_file($_FILES["profilePic"]["tmp_name"], $path);
                $response = array('status' => 'success');
            } else {
                $response = array('status' => 'error', 'message' => "Problem while uploading.");
            }
        }
        echo json_encode($response);
    }
