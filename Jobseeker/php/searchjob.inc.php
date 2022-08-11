<?php
    session_start();
    //includes db connection from 2 folders back
    include '../../php/db-connection.php';

    function dateTimeConvertion($date){
        return date('M d, Y, h:i A', strtotime($date));
    }
    function  getProfilePicLoc($profilePic){
        if ($profilePic != NULL && file_exists("../../storage/" . $profilePic)) {
            return "../storage/" . $profilePic;
        } else {
            return "image/comlogo.png";
        }
    }
    function  getQrLoc($qrCode){
        if ($qrCode != NULL && file_exists("../../storage/" . $qrCode)) {
            return "../storage/" . $qrCode;
        } else {
            return "image/qrcode.png";
        }
    }
    if (isset($_POST['fetchData'])) {
        $tableData = "";
        $getPosts = mysqli_query($conn, "SELECT * FROM `jobpost`");
        while($row = mysqli_fetch_assoc($getPosts)){
            $uid = $row['postedby_uid'];
            $postId = $row['post_iud'];
            $getEmployerName = mysqli_query($conn, "SELECT * FROM `employer` WHERE `employer_id` = '$uid'");
            while($name = mysqli_fetch_assoc($getEmployerName)){
            $companyAddress = $name['company_address'];
            $companyName = $name['company_name'];
            $companyLogo = getProfilePicLoc($name['company_logo_name']);}
            $jobCategory = $row['job_category'];
            $jobTitle = $row['job_title'];
            $salary = $row['salary'];
            $postedby_uid = $row['postedby_uid'];
            $description = $row['job_description'];
            $date = dateTimeConvertion($row['date_posted']);
            $tableData .=  "<div class='bg-white shadow-sm d-flex div3'><br>
            <img src='{$companyLogo}' alt='company logo' class='ms-3 mt-4 logo' id='logo' style='border-radius: 120px; object-fit: cover; height: 73px;'>
            <div class='block mt-2' style='max-width: 800px; min-width: 800px;'>
                <div class='d-flex'>
                    <h5 class='mt-3 fw-bold ms-4 job'>{$jobTitle}</h5>
                    <button class='mt-2 p-2 px-3 text-dark btn1' data-bs-toggle='modal' id='qr' data-id='{$postedby_uid}' data-bs-target='#qr-code'style='position: absolute; right: 150px;' type='button'>Company QR Code</button>
                    <button class='mt-2 p-2 px-3 text-dark btn1' id='detail' data-id='{$postId}' data-bs-toggle='modal' data-bs-target='#modal-delete' style='position: absolute; right: 10px;' type='button'>View Details</button>
                </div>
                <h6 class='ms-4 fw-bold'>{$companyName}</h6>
                <div class='ms-4'>
                    <i class='bi bi-geo-alt-fill fw-bold'> {$companyAddress}</i><br>
                    <i class='bi bi-briefcase-fill fw-bold'> {$jobCategory} / {$jobTitle}</i><br>
                    <i class='bi bi-currency-dollar fw-bold'> {$salary}</i>
                </div><br>
                <p class='ms-4'>- {$description}</p>
            </div>
        </div>";
        }
        $response = array(
            'tableData' => $tableData,);

        echo json_encode($response);
    }
    else if (isset($_POST['qr'])) {
        $qr = $_POST['data'];
        $getEmployerName = mysqli_query($conn, "SELECT * FROM `employer` WHERE `employer_id` = '$qr'");
        $name = mysqli_fetch_assoc($getEmployerName);
        $qrCode = getQrLoc($name['qr_code']);
        $response = array('qr' => $qrCode,);
        echo json_encode($response);
    }   
    else {
        $_SESSION['postId'] = $_POST["postId"];
    }