<?php   
    session_start();
    // Include this database connection file to establish connection
    include'db-connection.php';

    // Function for checking in jobseeker table
    function isJobseeker($email){
        // Query to check if email is existing in jobseeker table
        $checkEmail = mysqli_query($GLOBALS['conn'], "SELECT jobseeker_id ,email, password FROM jobseeker WHERE email = '$email'");
        // Check if email is existing in our database
        if(mysqli_num_rows($checkEmail) > 0) {
            // Access row content of selected email
            $row = mysqli_fetch_assoc($checkEmail);
            // Fetch ID of selected email
            $user_id = $row['jobseeker_id'];
            // Fetch password of the selected email
            $hash_password = $row["password"];
            $result = array(
                'status' => true, 
                'hash_password' => $hash_password,
                'user_id' => $user_id
            );
        } else {
            $result = array('status' => false);
        }
        // Return result as associative array
        return $result;
    }

    // Function for checking in employer table
    function isEmployer($email){
        // Query to check if email is existing in employer table
        $checkEmail = mysqli_query($GLOBALS['conn'], "SELECT employer_id, email, password FROM employer WHERE email = '$email'");
        // Check if email is existing in our database
        if(mysqli_num_rows($checkEmail) > 0) {
            // Access row content of selected email
            $row = mysqli_fetch_assoc($checkEmail);
            // Fetch ID of selected email
            $user_id = $row['employer_id'];
            // Fetch password of the selected email
            $hash_password = $row["password"];
            $result = array(
                'status' => true, 
                'hash_password' => $hash_password,
                'user_id' => $user_id
            );
        } else {
            $result = array('status' => false);
        }
        // Return result as associative array
        return $result;
    }

    // Function for checking in admin table
    function isAdmin($email){
        // Query to check if email is existing in admin table
        $checkEmail = mysqli_query($GLOBALS['conn'], "SELECT admin_id, email, password FROM admin WHERE email = '$email'");
        // Check if email is existing in our database
        if(mysqli_num_rows($checkEmail) > 0) {
            // Access row content of selected email
            $row = mysqli_fetch_assoc($checkEmail);
            // Fetch ID of selected email
            $user_id = $row['admin_id'];
            // Fetch password of the selected email
            $hash_password = $row["password"];
            $result = array(
                'status' => true, 
                'hash_password' => $hash_password,
                'user_id' => $user_id
            );
        } else {
            $result = array('status' => false);
        }
        // Return result as associative array
        return $result;
    }

    // Function for checking password
    function isPasswordMatch($password, $hash_password){
        // Check if password matches with hash password
        if(password_verify($password, $hash_password)){
            return true;
        } else {
            return false;
        }
    }
    
    // When user click login button, this code will be executed
    if(isset($_POST['login'])){
        // Escape input data to prevent sql injector
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Function for checking in jobseeker table
        if(isJobseeker($email)['status']){
            // Function for checking if password is correct
            if(isPasswordMatch($password, isJobseeker($email)['hash_password'])){
                // Create session for user id and user type
                $_SESSION['user_id'] = isJobseeker($email)['user_id'];
                $_SESSION['user_type'] = 'jobseeker';
                // Add jobseeker to response variable
                $response = "jobseeker";
            } else {
                $response = "Incorrect email or password.";
            }
        } else {
            // Function for checking in employer table
            if(isEmployer($email)['status']){
                // Function for checking if password is correct
                if(isPasswordMatch($password, isEmployer($email)['hash_password'])){
                    // Create session for user id and user type
                    $_SESSION['user_id'] = isEmployer($email)['user_id'];
                    $_SESSION['user_type'] = 'employer';
                    // Add employer to response variable
                    $response = "employer";
                } else {
                    $response = "Incorrect email or password.";
                }
            } else {
                // Function for checking in admin table
                if(isAdmin($email)['status']){
                    // Function for checking if password is correct
                    if(isPasswordMatch($password, isAdmin($email)['hash_password'])){
                        // Create session for user id and user type
                        $_SESSION['user_id'] = isAdmin($email)['user_id'];
                        $_SESSION['user_type'] = 'admin';
                        // Add admin to response variable
                        $response = "admin";
                    } else {
                        $response = "Incorrect email or password.";
                    }
                } else {
                    $response = "Incorrect email or password.";
                }
            }
        }
        // Return as response
        echo $response;
    }
?>