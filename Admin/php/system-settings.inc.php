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
