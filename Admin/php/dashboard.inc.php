<?php
include '../../php/db-connection.php';

if (isset($_POST['getCategory'])) {
    $data = array();
    $i = 1;
    $webDev = 0;
    $projMnmt = 0;
    $graphic = 0;
    $virtualAsst = 0;
    $stmt = "SELECT * FROM jobpost";
    $result = mysqli_query($conn, $stmt);
    $count = mysqli_num_rows($result);
    while ($row = mysqli_fetch_assoc($result)){
        $data[$i] = $row['job_category'];
        $i++;
    }
for ($o = 1; $o <= $count; $o++) {
    if ($data[$o] == 'Web Development') {
        $webDev++;
    } 
    elseif ($data[$o] == 'Project Management'){
        $projMnmt++;
    }
    elseif ($data[$o] == 'Virtual Assistant'){
        $virtualAsst++;
    }
    elseif ($data[$o] == 'Graphic and Multimedia'){
        $graphic++;
    }
}
$response = array('web' => $webDev, 'virtual' => $virtualAsst, 'graphic' =>$graphic, 'projMnmt' => $projMnmt, 'count' => $count, 'low' => 0);
    
echo json_encode($response);
}

if (isset($_POST['getJobs'])) {
    $activeStmt = "SELECT * FROM jobpost";
    $result = mysqli_query($conn, $activeStmt);
    $active = mysqli_num_rows($result);
    $inactiveStmt = "SELECT * FROM jobpost_recycler";
    $res = mysqli_query($conn, $inactiveStmt);
    $inactive = mysqli_num_rows($res);
    $count = $active + $inactive;
    $response = array('active' => $active, 'inactive' => $inactive, 'count' => $count, 'low' => 0);
    echo json_encode($response);
}