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
                            <td data-title='Action' style='width: 250px;'>
                                <button style='width: 40px; border: 0;' class='btn-primary' type='button' data-id='{$employerId}' id='btn-info' data-bs-toggle='modal' data-bs-target='#modal-viewdetails'><i class='fa-solid fa-eye'></i></button>
                                <button style='width: 40px; border: 0;' class='btn-success' type='button' data-id='{$employerId}' id='btn-info' data-bs-toggle='modal' data-bs-target='#modal-editdetails'><i class='fa fa-pen-to-square'></i></button>
                                <button class='btn btn-danger' type='button' id='btn-info' data-id='{$employerId}'  data-bs-toggle='modal' data-bs-target='#exampleModal'><i class='bi bi-trash3'></i></button>
                            </td>
                        </tr>";            
        }
        // Return this output variable to the ajax call
        echo $output;
    } 

?>