<?php
//includes db connection from 2 folders back
include '../../php/db-connection.php';
session_start();

// check if profile pic is not null && if file exists  then returns a string value of the profile picture location
function  getProfilePicLoc($profilePic)
{
    if ($profilePic != NULL && file_exists("../../storage/" . $profilePic)) {
        return "../storage/" . $profilePic;
    } else {
        return "../storage/noProfilePic.png";
    }
}

// When the page is loaded the js will call for this then this will get the admin's data from the DB
if (isset($_POST['fetchData'])) {
    $jobseekerId = $_SESSION['user_id'];
    // Create query to get the employer information
    $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM jobseeker WHERE jobseeker_id = '$jobseekerId'");
    $row = mysqli_fetch_assoc($fetchDetailsQuery);
    // Get the employer information needed to edit modal
    $profilePic = GetProfilePicLoc($row['profile_picture']);
    $fullName = $row['fullname'];
    $email = $row['email'];
    $number = $row['mobile_number'];
    $address = $row['address'];
    $experience = $row['experience'];
    $salary = $row['salary'];
    $attainment = $row['attainment'];
    $hours = $row['hours'];
    $html = $row['html'];
    $py = $row['py'];
    $js = $row['js'];
    $csharp = $row['csharp'];
    $cpp = $row['cpp'];
    $php = $row['php'];
    if ($html == "true" ) {
        $html = "HTML";
    }
    else{
        $html = NULL;
    }
    if ($py == "true" ) {
        $py = "Python";
    }
    else{
        $py = NULL;
    }
    if ($js == "true" ) {
        $js = "JavaScript";
    }
    else{
        $js = NULL;
    }
    if ($csharp == "true" ) {
        $csharp = "C#";
    }
    else{
        $csharp = NULL;
    }
    if ($cpp == "true" ) {
        $cpp = "C++";
    }
    else{
        $cpp = NULL;
    }
    if ($php == "true" ) {
        $php = "PHP";
    }
    else{
        $php = NULL;
    }
    $name = strtoupper($fullName);

    // Create Assoc array to return to the ajax call
    $response = array(
        'profile_picture' => $profilePic,
        'fullname' => $fullName,
        'email' => $email,
        'mobile_number' => $number,
        'upperName' => $name,
        'address' => $address,
        'experience' => $experience,
        'salary' => $salary,
        'attainment' => $attainment,
        'hours' => $hours,
        'html' => $html,
        'py' => $py,
        'js' => $js,
        'csharp' => $csharp,
        'cpp' => $cpp,
        'php' => $php      
    );
    echo json_encode($response);
}
