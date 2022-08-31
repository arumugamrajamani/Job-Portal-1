<?php
    // Known issues:
    // 1. When typing 'dev' in the job_title, it gives an error.
    // 2. When the 5k checkbox, the table_data doesn't update and give an error
    // 3. $_SESSION gives an error

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
        // Variables to store the data
        $page = 0;
        // Set the item limit per page
        $pageLimit = 5;
        // Variable for holding the loop result of the query
        $tableData = "";

        // // Check if the page number is set
        // if (isset($_POST['page'])) {
        //     // Set the page number
        //     $page = $_POST['page'];
        //     // Check if search is set
        // } elseif (isset($_POST['search'])) {
        //     // Set the page number to 1
        //     $page = 1;
        // } else {
        //     // Set the page number to 1
        //     $page = 1;
        // }

        // Calculate the starting row
        $start = ($page - 1) * $pageLimit;
        
        // Check if checkbox was checked
        if (isset($_POST['checkbox_emstatus'])) {
            $search = $_POST['checkbox_emstatus'];
            $statement = "SELECT * FROM jobpost WHERE employment_type IN $search";
        }
        else {
            $statement = "SELECT * FROM jobpost WHERE employment_type IN ('')";
        }

        if (isset($_POST['checkbox_salary'])) {
            $search = $_POST['checkbox_salary'];
            $count = count($search);
            $subcount = $count - 1;

            if ($count != 0) { rsort($search); }

            // [Note] Error if 5k was unchecked
            if ($search[0] == 20000 ) {
                switch ($count) {
                    case 1:
                        $statement .= " AND salary >= $search[0]";
                    break;
                    case 2: case 3:
                        $statement .= " AND salary BETWEEN $search[$subcount] AND $search[1] + 5000 OR salary >= $search[0]";
                    break;
                    case 4:
                        // Blank
                    break;
                }
            }
            else {
                switch ($count) {
                    case 1:
                        $statement .= " AND salary BETWEEN $search[0] AND $search[0] + 5000";
                    break;
                    case 2: case 3:
                        $statement .= " AND salary BETWEEN $search[0] AND $search[0] + 5000 OR salary BETWEEN $search[$subcount] AND $search[$subcount] + 5000"; 
                    break;
                }
            }
        }

        if (isset($_POST['search_comp'])) {
            $search = $_POST['search_comp'];
            $statement .= " AND company_name LIKE '%$search%'";
        }
        else {

        }

        if (isset($_POST['search_jobt'])) {
            $search = $_POST['search_jobt'];
            $statement .= " AND job_title LIKE '%$search%'";
        }
        else {

        }

        $check_salary = $search;

        $getPosts = mysqli_query($conn, $statement);
        while($row = mysqli_fetch_assoc($getPosts)) {
            $uid = $row['postedby_uid'];
            $postId = $row['post_iud'];
            $getEmployerName = mysqli_query($conn, "SELECT * FROM `employer` WHERE `employer_id` = '$uid'");
            
            while($name = mysqli_fetch_assoc($getEmployerName)) {
                $companyAddress = $name['company_address'];
                $companyName = $name['company_name'];
                $companyLogo = getProfilePicLoc($name['company_logo_name']);
            }

            $jobCategory = $row['job_category'];
            $jobTitle = $row['job_title'];
            $salary = $row['salary'];
            $postedby_uid = $row['postedby_uid'];
            $description = $row['job_description'];
            $date = dateTimeConvertion($row['date_posted']);
            $tableData .=  "
            <div class='bg-white shadow-sm d-flex div3'><br>
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
            'tableData' => $tableData,
            'check_salary' => $check_salary,
            'statement' => $statement
        );

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
        // $_SESSION['postId'] = $_POST["postId"];
    }