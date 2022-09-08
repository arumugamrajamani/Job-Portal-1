<?php
//go 2 folders back to establish a connection on the database
include '../../php/db-connection.php';

//sql query for job categories graph
if (isset($_POST['getCategory'])) {
    $data = array();
    $i = 1;
    $webDev = 0;
    $projMnmt = 0;
    $graphic = 0;
    $virtualAsst = 0;
    $stmt = "SELECT * FROM jobpost";
    $result = mysqli_query($conn, $stmt);
    //getting total numbers of jobpost
    $count = mysqli_num_rows($result);
    //looping each rows in database and assigning each into a variable
    while ($row = mysqli_fetch_assoc($result)){
        $data[$i] = $row['job_category'];
        $i++;
    }
    //determining what is the category of the data fetched from database
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
    //associative array to store all the values needed for the chart
    $response = array(
        'web' => $webDev, 
        'virtual' => $virtualAsst, 
        'graphic' =>$graphic, 
        'projMnmt' => $projMnmt, 
        'count' => $count, 
        'low' => 0
    );
    echo json_encode($response);
}

//sql query for active and inactive jobs graph
if (isset($_POST['getJobs'])) {
    $activeStmt = "SELECT * FROM jobpost";
    $result = mysqli_query($conn, $activeStmt);
    //getting total numbers of jobpost
    $active = mysqli_num_rows($result);
    $inactiveStmt = "SELECT * FROM jobpost_recycler";
    //getting total numbers of jobpost in recycler
    $res = mysqli_query($conn, $inactiveStmt);
    $inactive = mysqli_num_rows($res);
    //adding the totals to get the total numbers of all jobpost
    $count = $active + $inactive;
    //associative array to store all the values needed for the chart
    $response = array('active' => $active, 'inactive' => $inactive, 'count' => $count, 'low' => 0);
    echo json_encode($response);
}