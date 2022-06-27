<?php
//includes db connection from 2 folders back
include 'db-connection.php';
session_start();


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
