<?php session_start();
if (!isset($_SESSION['user_id'])) {
    header('location: ../login.php');
} else if (isset($_SESSION['user_id']) && $_SESSION['user_type'] =='employer') {
    header('location: ../Employer/company-profile.php');
} else if (isset($_SESSION['user_id']) && $_SESSION['user_type'] =='jobseeker') {
    header('location: ../Jobseeker/applicant-profile.php');
}
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],'/')+1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- **** SCRIPTS **** -->
    <!-- jQuery cdn link below -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- ajax cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Toast CDN for functionality of toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- fontawesome  -->
    <script src="https://kit.fontawesome.com/e5ed048aee.js" crossorigin="anonymous"></script>

    <!-- Sweet alert cdn link below -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <!-- **** LINKS **** -->
    <!-- Toast CDN for design of toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="include/navbar.css">
    <link rel="stylesheet" href="include/sidebar.css">
<?php
    if ($page == 'dashboard.php' || $page == 'index.php') {
        ?> 
            <link rel="stylesheet" href="css/dashboard_classes.css">
            <link rel="stylesheet" href="css/dashboard_res.css">
            <link rel="stylesheet" href="css/dashboard.css">
            <title>Dashboard | Admin</title>
        <?php
    }

    if ($page == 'aboutus-settings.php') {
        ?>
            <link rel="stylesheet" href="css/aboutus-settings.css">
            <link rel="stylesheet" href="css/aboutus-settings_res.css">
            <title>About Us | Settings</title>
        <?php
    }

    if ($page == 'admin-change-pass.php') {
        ?>
            <link rel="stylesheet" href="css/admin-change-pass.css">
            <title>Admin Change Password</title>
        <?php
    }

    if ($page == 'admin-profile.php') {
        ?>
            <link rel="stylesheet" href="css/admin-profile.css">
            <title>Profile | Admin</title>
        <?php
    }

    if ($page == 'edit-profile.php') {
        ?>
            <link rel="stylesheet" href="css/edit-profile.css">
            <title>Edit Profile | Admin</title>
        <?php
    }
    
    if ($page == 'employer-management.php') {
        ?>
            <link rel="stylesheet" href="css/employer-management.css">
            <title>Employer Management | Admin</title>
        <?php
    }

    if ($page == 'jobseeker-management.php') {
        ?>
            <link rel="stylesheet" href="css/jobseeker-management.css">
            <title>Job seekers Management | Admin</title>
        <?php
    }

    if ($page == 'jobpost-management.php') {
        ?>
            <link rel="stylesheet" href="css/jobpost-management.css">
            <title>Job Post Management | Admin</title>
        <?php
    }

    if ($page == 'jobcategories-management.php') {
        ?>
            <link rel="stylesheet" href="css/jobcategories-management.css">
            <title>Job Categories Management | Admin</title>
        <?php
    }

    if ($page == 'system-settings.php') {
        ?>
            <link rel="stylesheet" href="css/system-settings.css">
            <title>System | Settings</title>
        <?php
    }

    if ($page == 'faq-settings.php') {
        ?>
            <link rel="stylesheet" href="css/faq-settings.css">
            <title>FAQ | Settings</title>
        <?php
    }

    if ($page == 'recycle-bin-employer.php') {
        ?>
            <link rel="stylesheet" href="css/recycle-bin-employer.css">
            <title>Recycle Bin | Employer</title>
        <?php
    }

    if ($page == 'recycle-bin-jobpost.php') {
        ?>
            <link rel="stylesheet" href="css/recycle-bin-jobpost.css">
            <title>Recycle Bin | Job Post</title>
        <?php
    }

    if ($page == 'recycle-bin-jobseeker.php') {
        ?>
            <link rel="stylesheet" href="css/recycle-bin-jobseeker.css">
            <title>Recycle Bin | Job seekers</title>
        <?php
    }
?>
</head>