<?php
    include_once '../../php/db-connection.php';

    function returnTable($_id, $question, $answer) {
        return "
            <tr>
                <td>{$question}</td>
                <td>{$answer}</td>
                <td>
                    <button class='fetch-details' type='submit' title='Edit' data-id={$_id} data-bs-toggle='modal' data-bs-target='#modal-editdetails'>
                        <i class='fa-solid fa-pen-to-square'></i>
                    </button>
                    <button class='fetch-details' type='submit' title='Delete' data-id={$_id} data-bs-toggle='modal' data-bs-target='#modal-delete'>
                        <i class='fa-solid fa-trash-can'></i>
                    </button>
                </td>
            </tr>
        ";
    }

    if (isset($_POST['loadData'])) {
        $tableDataSystem = "";
        $tableDataApp = "";
        $tableDataInterview = "";
        $tableDataGeneral = "";
       
        $faqStatement = "SELECT * FROM faq_settings";
        $faqQuery = mysqli_query($conn, $faqStatement);

        while ($row = mysqli_fetch_assoc($faqQuery)) {
            $_id = $row['id'];
            $category = $row['category'];
            $question = $row['question'];
            $answer = $row['answer'];

            if ($category == "systems") {
                $tableDataSystem .= returnTable($_id, $question, $answer);
            }
            else if ($category == "application process") {
                $tableDataApp .= returnTable($_id, $question, $answer);
            }
            else if ($category == "interview") {
                $tableDataInterview .= returnTable($_id, $question, $answer);
            }
            else if ($category == "general questions") {
                $tableDataGeneral .= returnTable($_id, $question, $answer);
            }
        }

        $response = array(
            'tableDataSystem' => $tableDataSystem,
            'tableDataApplication' => $tableDataApp,
            'tableDataInterview' => $tableDataInterview,
            'tableDataGeneral' => $tableDataGeneral
        );


        echo json_encode($response);
    }

    if (isset($_POST['fetchDetails'])) {
        $faqId = mysqli_real_escape_string($conn, $_POST['faqId']);
        $fetchDetailsQuery = mysqli_query($conn, "SELECT * FROM faq_settings WHERE id = '$faqId'");
        $row = mysqli_fetch_assoc($fetchDetailsQuery);

        $faqQuestion = $row['question'];
        $faqAnswer = $row['answer'];

        // Create Assoc array to return to the ajax call    
        $response = array(
            'faqQuestion' => $faqQuestion,
            'faqAnswer' => $faqAnswer
        );

        echo json_encode($response);
    }

    if (isset($_POST['saveDetails'])) {
        // Validation for Fullname
        $statQuestion = "";
        $statAnswer ="";
        if(empty($_POST['faqQuestion'])) {
            $statQuestion = array('status' => 'error', 'message' => 'Question cannot be empty.');
        } else {
            $statQuestion = array('status' => 'success');
        }

        if(empty($_POST['faqAnswer'])) {
            $statAnswer = array('status' => 'error', 'message' => 'Answer cannot be empty.');
        } else {
            $statAnswer = array('status' => 'success');
        }

        // Check if all the validation are successful or not
        if(!empty($_POST['faqQuestion']) && !empty($_POST['faqAnswer'])) {
            // Assigned the post data to new variable, escape the data to prevent sql injection, and sanitize the data
            $faqId = mysqli_real_escape_string($conn, $_POST['faqId']);
            $faqQuestion = mysqli_real_escape_string($conn, $_POST['faqQuestion']);
            $faqAnswer = mysqli_real_escape_string($conn, $_POST['faqAnswer']);

            // Create query to update the jobseeker information
            mysqli_query($conn, "UPDATE faq_settings SET question = '$faqQuestion', answer = '$faqAnswer' WHERE id = '$faqId'");

            // Return this as status success response
            $response = array('status' => 'success');
        } else {
            $response = array('status' => 'error', 'statQuestion' => $statQuestion, 'statAnswer' => $statAnswer);
        }

        // Return the response
        echo json_encode($response);
    }

    if (isset($_POST['addNewFaq'])) {
        
        if (!empty($_POST['faqAddQuestion']) && !empty($_POST['faqAddAnswer'])) {
            $faqCategory = mysqli_real_escape_string($conn, $_POST['faqCategory']);
            $faqQuestion = mysqli_real_escape_string($conn, $_POST['faqAddQuestion']);
            $faqAnswer = mysqli_real_escape_string($conn, $_POST['faqAddAnswer']);
            mysqli_query($conn, "INSERT INTO faq_settings (category, question, answer) 
                VALUES ('$faqCategory','$faqQuestion','$faqAnswer')");
    
            $response = array(
                'status' => 'success'
            );
        } else {
            $response = array(
                'status' => 'error'
            );
        }

        echo json_encode($response);
    }

    if (isset($_POST['deleteData'])) {
        $faqId = mysqli_real_escape_string($conn, $_POST['faqId']);

        if (mysqli_query($conn, "DELETE FROM faq_settings WHERE id = '$faqId'")) {
            $response = array(
                'status' => 'success'
            );
          } else {
            $response = array(
                'status' => 'error'
            );
          }

        echo json_encode($response);
    }
?>