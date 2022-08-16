<?php
//includes db connection from 2 folders back
include '../../php/db-connection.php';
session_start();

function generateRandomString()
{
    $rand1 = rand(1111, 9999);   //  generate random number in $var1 variable
    $rand2 = rand(1111, 9999);   //  generate random number in $var2 variable
    $rand3 = $rand1 . $rand2;   //  concatenate $var1 and $var2 in $var3
    return $idImageName = md5($rand3);  //  convert $var3 using md5 function and generate 32 characters hex number
}

// Function for storing files into storage folder
function InsertIntoStorage($tmp_name, $filename)
{
    //$target_directory = "../storage/";
    $path =  "../../storage/" . $filename;
    move_uploaded_file($tmp_name, $path);
}


// When user click on the save button
if(isset($_POST['saveNow'])){
     // Create array for checking of valid extension for Permit
     $allowed_Resume_extension = array("pdf");
     $Full_name =$_POST['Full_name'];
     $Email =$_POST['Email'];
    if (!isset($_FILES["Resume"])) {
        $Resumerr = array('status' => 'error', 'message' => 'Permit is required.');
    } elseif (!in_array(pathinfo($_FILES["Resume"]["name"], PATHINFO_EXTENSION), $allowed_Resume_extension)) {
        $Resumerr = array('status' => 'error', 'message' => 'Only pdf are allowed.');
    } elseif ($_FILES["Resume"]["size"] > 5000000) {
        $Resumerr = array('status' => 'error', 'message' => 'Must be less than 5mb.');
    } else {
        $Resumerr = array('status' => 'success');
        $ResumeExtension = pathinfo($_FILES["Resume"]["name"], PATHINFO_EXTENSION);
    }
    if ($Resumerr['status'] == 'success'){
    $Resume = generateRandomString() . '.' . $ResumeExtension;
    $Full_name = mysqli_real_escape_string($conn, $Full_name);
    $Email= mysqli_real_escape_string($conn, $Email);
    $Submit= mysqli_query($conn, "INSERT INTO `manage_resume`(`Full_name`, `Email`, `Resume`) VALUES ('$Full_name','$Email','$Resume')");

      InsertIntoStorage($_FILES["Resume"]["tmp_name"], $Resume);
      if($Submit){
        $response = array('status' => 'success', 'message' => "Updated Successfully.");
        } else {
        $response = array('status' => 'error', 'message' => "Problem while updating.");
        }
    mysqli_query($conn, "UPDATE `jobseeker` SET `resume`='$Resume' WHERE `fullname`='$Full_name'");
    } 
     echo json_encode($response);
}




 