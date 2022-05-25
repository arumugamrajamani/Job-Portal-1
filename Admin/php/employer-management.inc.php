<?php
    include'../../php/db-connection.php';

    // Function for checking if verified or not
    function isVerified($status){
        if($status == 1){
            return "Verified";
        } else {
            return "Not Verified";
        }
    }

    // Function for getting the company logo file name and dti file name
    function getFiles($employerId){
        $GetFileQuery = mysqli_query($GLOBALS['conn'], "SELECT company_logo_name, permit_new_name FROM employer WHERE employer_id = '$employerId'");
        $row = mysqli_fetch_assoc($GetFileQuery);
        // Create assoc array
        $files = array(
            'company_logo_name' => $row['company_logo_name'],
            'permit_new_name' => $row['permit_new_name']
        );
        // Return assoc array
        return $files;
    }

    // Function for unlinking the files
    function unlinkFiles($companyLogoName, $permitName){
        // Unlink the files
        unlink("../../storage/" . $companyLogoName);
        unlink("../../storage/" . $permitName);
    }

    // For loading of the employer management information
    if(isset($_POST['loadData'])){
        // Variable for holding the result of the query
        $output = "";
        // Check if search is present
        if(isset($_POST['search'])){
            $search = $_POST['search'];
            $statement = "SELECT * FROM employer WHERE company_name LIKE '%$search%' OR employer_name LIKE '%$search%' OR employer_position LIKE '%$search%' OR email LIKE '%$search%'";
        } else {
            $statement = "SELECT * FROM employer";
        }
        // Get all employer information from the database
        $EmployerInfoQuery = mysqli_query($conn, $statement);
        while($row = mysqli_fetch_assoc($EmployerInfoQuery)){
            // Get the employer information needed to table
            $employerId = $row['employer_id'];
            $companyLogo = "../storage/" .$row['company_logo_name'];
            $companyName = $row['company_name'];
            $employerName = $row['employer_name'];
            $employerPosition = $row['employer_position'];
            $email = $row['email'];
            $permitName = "../storage/" . $row['permit_new_name'];
            $permitOriginalName = $row['permit_original_name'];
            $status = $row['is_verified'];
            // Append the employer information to the output variable
            $output .= "<tr style='height: 6rem; border: none; box-shadow: none;width: 6rem; border: 0;'>
                            <td class='view-logo'><img src='{$companyLogo}' alt='' style='width: 60px; cursor: pointer;' data-bs-toggle='modal' data-bs-target='#companylogo'></td>
                            <td>{$companyName}</td>
                            <td>{$employerName}</td>
                            <td>{$employerPosition}</td>
                            <td>{$email}</td>
                            <td><i class='fa-solid fa-file-lines me-1'></i><a href='{$permitName}' download='{$permitOriginalName}'>{$permitOriginalName}</a></td>
                            <td>" .isVerified($status). "</td> 
                            <td style='width: 250px;'>
                                <button style='width: 40px; border: 0;' class='btn-primary more-details' type='button' data-id='{$employerId}' id='btn-info' data-bs-toggle='modal' data-bs-target='#modal-viewdetails'><i class='fa-solid fa-eye'></i></button>
                                <button style='width: 40px; border: 0;' class='btn-success' type='button' data-id='{$employerId}' id='btn-info' data-bs-toggle='modal' data-bs-target='#modal-editdetails'><i class='fa fa-pen-to-square'></i></button>
                                <button class='btn btn-danger delete-employer' type='button' id='btn-info' data-id='{$employerId}'  data-bs-toggle='modal' data-bs-target='#modal-delete'><i class='bi bi-trash3'></i></button>
                            </td>
                        </tr>";            
        }
        // Return this output variable to the ajax call
        echo $output;
    } 

    // When user click more details button
    if(isset($_POST['moreDetails'])){
        $employerId = mysqli_real_escape_string($conn, $_POST['employerId']);
        // Create query to get the employer information
        $moreDetailsQuery = mysqli_query($conn, "SELECT * FROM employer WHERE employer_id = '$employerId'");
        $row = mysqli_fetch_assoc($moreDetailsQuery);
        // Get the employer information needed to more details modal
        $companyAddress = $row['company_address'];
        $companyCEO = $row['company_ceo'];
        $companySize = $row['company_size'];
        $companyRevenue = $row['company_revenue'];
        $industry = $row['industry'];
        $contactNumber = $row['contact_number'];
        $companyEmail = $row['company_email'];
        $companyDescription = nl2br($row['company_description']);
        $dateCreated = $row['date_created'];

        // Create Assoc array to return to the ajax call
        $response = array(
            'companyAddress' => $companyAddress,
            'companyCEO' => $companyCEO,
            'companySize' => $companySize,
            'companyRevenue' => $companyRevenue,
            'industry' => $industry,
            'contactNumber' => $contactNumber,
            'companyEmail' => $companyEmail,
            'companyDescription' => $companyDescription,
            'dateCreated' => $dateCreated
        );

        echo json_encode($response);
    }

    // When user click yes in delete employer modal confirmation
    if(isset($_POST['deleteEmployer'])){
        $employerId = mysqli_real_escape_string($conn, $_POST['employerId']);
        $companyLogoName = getFiles($employerId)['company_logo_name'];
        $permitName = getFiles($employerId)['permit_new_name'];
        // Unlink the files
        unlinkFiles($companyLogoName, $permitName);
        // Create query to delete the employer
        mysqli_query($conn, "DELETE FROM employer WHERE employer_id = '$employerId'");
        // Return nothing
    }

?>