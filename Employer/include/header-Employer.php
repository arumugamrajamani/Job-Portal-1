<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--Font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,455;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:wght@300&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    
    <!-- Toast CDN for functionality of toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Color Palette for the entire Employer Webpage -->
    <link rel="stylesheet" href="include/palette-Employer.css">

    <!-- css design for Navbar -->
    <link rel="stylesheet" href="include/navbar-Employer.css">
</head>

<?php
    switch ($page) {
        case 'company-profile.php': case 'index.php': 
            ?>
                <link rel="stylesheet" href="css/company-profile.css">
                <title>Company Profile</title>
            <?php
        break;
        case 'change-password.php':
            ?>
                <link rel="stylesheet" href="css/change-password.css">
                <title>Change password</title>
            <?php
        break;
        case 'employer-message.php':
            ?>
                <!-- Deprecated -->
            <?php
        break;
        case 'jobmanage.php':
            ?>
                <link rel="stylesheet" href="css/jobmanage.css">
                <title>Company Profile</title>
            <?php
        break;
        case 'manage-account-profile.php':
            ?>
                <link rel="stylesheet" href="css/manage-account-profile.css">
                <title>Edit Profile</title>
            <?php
        break;
        case 'manage-applicant-resume.php':
            ?>  
                <link rel="stylesheet" href="css/manage-applicant-resume.css">
                <title>Manage Applicant Resume</title>
            <?php
        break;
        case 'postajob.php':
            ?>
                <!-- Reserved -->
            <?php
        break;
    }
?>

