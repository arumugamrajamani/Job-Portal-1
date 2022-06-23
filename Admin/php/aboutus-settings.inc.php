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


// When the page is loaded the js will call for this then this will get the admin's data from the DB
if (isset($_POST['fetchData'])) {
    // Create query to get the employer information
    $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM about_us WHERE id = '1'");
    $row = mysqli_fetch_assoc($fetchDetailsQuery);
    // Get the employer information needed to edit modal
    $meetourteam = $row['meet_our_team'];
    $vision = $row['vision'];
    $mission = $row['mission'];
    $goal = $row['goal'];
    $services = $row['our_services'];

    // Create Assoc array to return to the ajax call
    $response = array(
        'meetourteam' => $meetourteam,
        'vision' => $vision,
        'mission' => $mission,
        'goal' => $goal,
        'services' => $services
    );
    echo json_encode($response);
}



// When user click on the save button
if (isset($_POST['saveNow'])) {

    //<------------------------------------------- VALIDATE FOR SAVE ---------------------------------------->
    // Validation for fullname
    if (empty($_POST['meetourteam'])) {
        $meetourteamRR = array('status' => 'error');
    } else {
        $meetourteamRR = array('status' => 'success');
        $meetourteam = sanitize_input($_POST['meetourteam']);
    }

    if (empty($_POST['vision'])) {
        $visionRR = array('status' => 'error');
    } else {
        $visionRR = array('status' => 'success');
        $vision = sanitize_input($_POST['vision']);
    }

    if (empty($_POST['mission'])) {
        $missionRR = array('status' => 'error');
    } else {
        $missionRR = array('status' => 'success');
        $mission = sanitize_input($_POST['mission']);
    }

    if (empty($_POST['goal'])) {
        $goalRR = array('status' => 'error');
    } else {
        $goalRR = array('status' => 'success');
        $goal = sanitize_input($_POST['goal']);
    }

    if (empty($_POST['services'])) {
        $servicesRR = array('status' => 'error');
    } else {
        $servicesRR = array('status' => 'success');
        $services = sanitize_input($_POST['services']);
    }

    //<--------------------------------------- --END OF VALIDATE FOR SAVE ---------------------------------------->

    // Check if all the validation is successful
    if (
        $meetourteamRR['status'] == 'success' &&
        $visionRR['status'] == 'success' &&
        $missionRR['status'] == 'success' &&
        $goalRR['status'] == 'success' &&
        $servicesRR['status'] == 'success'
    ) {
        // Escape all the inputs to prevent SQL injection
        $meetourteam = mysqli_real_escape_string($conn, $meetourteam);
        $vision = mysqli_real_escape_string($conn, $vision);
        $mission = mysqli_real_escape_string($conn, $mission);
        $goal = mysqli_real_escape_string($conn, $goal);
        $services = mysqli_real_escape_string($conn, $services);

        // Create query to update the admin's details
        $updateAdminDetailsQuery = mysqli_query($conn, "UPDATE about_us SET 
        meet_our_team = '$meetourteam', 
        vision = '$vision',
        mission = '$mission',
        goal = '$goal',
        our_services = '$services'
         WHERE id = '1'");


        if ($updateAdminDetailsQuery) {
            $response = array('status' => 'success', 'message' => "Updated Successfully.");
        } else {
            $response = array('status' => 'error', 'message' => "Problem while updating.");
        }
    } else {
        $response = array('status' => 'error', 'message' => "Please fill up all the fields.");
    }
    // return this as a json object and exit
    echo json_encode($response);
}
