<?php
    include_once 'db-connection.php';

    function returnTable($_id, $question, $answer) {
        return "
            <div class='accordion-item'>
                <h2 class='accordion-header' id='heading-{$_id}'>
                    <button class='accordion-button collapsed' type='button' 
                        data-bs-toggle='collapse' data-bs-target='#collapse{$_id}' 
                        aria-expanded='false' aria-controls='collapse{$_id}'>
                        {$question}
                    </button>
                </h2>
                <div id='collapse{$_id}' class='accordion-collapse collapse' 
                    aria-labelledby='heading-{$_id}' data-bs-parent='#accordion'>
                    <div class='accordion-body'>
                        <p>
                            {$answer}
                        </p>
                    </div>
                </div>
            </div><br>
        ";
    }

    if (isset($_POST['dataLoad'])) {
        $faqSystem = "";
        $faqApplication = "";
        $faqInterview = "";
        $faqGeneral = "";

        $faqStatement = "SELECT * FROM faq_settings";
        $faqQuery = mysqli_query($conn, $faqStatement);

        while ($row = mysqli_fetch_assoc($faqQuery)) {
            $_id = $row['id'];
            $category = $row['category'];
            $question = $row['question'];
            $answer = $row['answer'];

            if ($category == "systems") {
                $faqSystem .= returnTable($_id, $question, $answer);
            }
            else if ($category == "application process") {
                $faqApplication .= returnTable($_id, $question, $answer);
            }
            else if ($category == "interview") {
                $faqInterview .= returnTable($_id, $question, $answer);
            }
            else if ($category == "general questions") {
                $faqGeneral .= returnTable($_id, $question, $answer);
            }
        }

        $response = array(
            'faqSystem' => $faqSystem,
            'faqApplication' => $faqApplication,
            'faqInterview' => $faqInterview,
            'faqGeneral' => $faqGeneral
        );

        echo json_encode($response);
    }

    if (isset($_POST['input'])) {
        
        $input = trim(preg_replace('/\s+/',' ', $_POST['input']));
        $searchQuery = "SELECT * FROM faq_settings WHERE question LIKE '%$input%'";
        $result = mysqli_query($conn, $searchQuery);
        if (mysqli_num_rows($result) > 0) {
            echo '<h4 class="fw-bold">SEARCH RESULT</h4>';
            while ($row = mysqli_fetch_assoc($result)) {
                $_id = $row['id'];
                $category = $row['category'];
                $question = $row['question'];
                $answer = $row['answer'];
    
                echo returnTable($_id, $question, $answer);
            }
        } else {
            echo "<h4 style='color:red;' class='fw-bold'>Search Result Not Found</h4><br>";
        }
    }
?>