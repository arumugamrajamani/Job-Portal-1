<?php   
    session_start();
    // Include this database connection file to establish connection
    include 'db-connection.php';

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
    
    // When user click login button, this code will be executed
    if(isset($_POST['login'])){
        // Escape input data to prevent sql injector
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Function for checking in jobseeker table
        if ($email == '' or $password == '') {
            $response = "Email or Password cannot be empty!";
        } else {
            if(isJobseeker($email)['status']){
                // Function for checking if password is correct
                if(password_verify($password, isJobseeker($email)['hash_password'])){
                    // Create session for user id and user type
                    $_SESSION['user_id'] = isJobseeker($email)['user_id'];
                    $_SESSION['user_type'] = 'jobseeker';
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    // Add jobseeker to response variable
                    $response = "jobseeker";
                } else {
                    $response = "Incorrect email or password!";
                }
            } else if(isEmployer($email)['status']){
                // Function for checking if password is correct
                if(password_verify($password, isEmployer($email)['hash_password'])){
                    // Create session for user id and user type
                    $_SESSION['user_id'] = isEmployer($email)['user_id'];
                    $_SESSION['user_type'] = 'employer';
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    // Add employer to response variable
                    $response = "employer";
                } else {
                    $response = "Incorrect email or password!";
                }
            }  else if(isAdmin($email)['status']){
                // Function for checking if password is correct
                if(password_verify($password, isAdmin($email)['hash_password'])){
                    // Create session for user id and user type
                    $_SESSION['user_id'] = isAdmin($email)['user_id'];
                    $_SESSION['user_type'] = 'admin';
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    // Add admin to response variable
                    $response = "admin";
                } else {
                    $response = "Incorrect email or password!";
                }   
            }
        }
        // Return as response
        echo $response;
    }

    if (isset($_POST['fetchLogin'])) {
        $email = $_SESSION['email'];
        $password = $_SESSION['password'];

        if (isset($_SESSION['user_id']) && $_SESSION['user_type'] == 'admin') {
            if(isAdmin($email)['status']){
                    // Function for checking if password is correct
                    if(password_verify($password, isAdmin($email)['hash_password'])){
                        // Add admin to response variable
                        $response = "admin";
                    } 
                }
        } else if (isset($_SESSION['user_id']) && $_SESSION['user_type'] =='employer') {
            if(isEmployer($email)['status']){
                // Function for checking if password is correct
                if(password_verify($password, isEmployer($email)['hash_password'])){
                    // Add admin to response variable
                    $response = "employer";
                }
            }
        } else if (isset($_SESSION['user_id']) && $_SESSION['user_type'] =='jobseeker') {
            if(isJobseeker($email)['status']){
                // Function for checking if password is correct
                if(password_verify($password, isJobseeker($email)['hash_password'])){
                    // Add admin to response variable
                    $response = "jobseeker";
                } 
            }
        }
        echo $response;
    }
?>