<!-- For Employer Section  -->
<?php session_start();
if (!isset($_SESSION['user_id'])) {
    header('location: ../login.php');
} else if (isset($_SESSION['user_id']) && $_SESSION['user_type'] == 'admin') {
    header('location: ../Admin/dashboard.php');
} else if (isset($_SESSION['user_id']) && $_SESSION['user_type'] == 'jobseeker') {
    header('location: ../Jobseeker/applicant-profile.php');
}
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],'/')+1);
?>