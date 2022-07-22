<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget password</title>
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!-- jQuery cdn link below -->
     <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Sweet alert cdn link below -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/forgot-password.css">
</head>
<body>
    <div class="color-overlay">
        <div class="container-fluid">
            <nav id="navbar-example2" class="navbar navbar-expand-lg navbar-light bg fixed-top mx-0 shadow " >
                <a href="#" class="navbar-brand ms-3">
                <img src="image/flogo.png" alt="Job Portal Logo" width="120" height="95"></a>
                <div class="collapse navbar-collapse" id="toggleMobileMenu">
                    <ul class="navbar-nav ms-auto text-center fw-bold">
                        <nav class="navbar navbar-light">     
                            <li><a class="nav-link me-5" href="index.php#home">Home</a></li>
                            <li><a class="nav-link me-5" href="index.php#aboutus">About Us</a></li>
                            <li><a class="nav-link me-5" href="index.php#contactus">Contact Us</a></li>
                            <li><a class="nav-link me-5" href="index.php#faq">FAQ</a></li>   
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle  mx-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Signup</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item " href="companyregister.php">Employer</a></li>
                                <li><a class="dropdown-item " href="jobseekersignup.php">JobSeeker</a></li>
                            </ul>
                            <li><a class="nav-link me-4 ms-2" href="login.php">Login</a></li>
                        </nav>
                    </ul>
                </div>
            </nav>         
        </div>
    </div><br><br><br>
    <div class="masthead"><br><br><br><br><br>
        <div class="container pt-5">
            <h3 class="text-center mt-5 mb-0 bg0 p-3 fs-10 text-dark">Forgot your password?</h3>
            <section class="text-center bg-white shadow">
                <div class="p-4 bg1">
                    <label class="text-dark">Enter your email and we will send you <br> instruction to reset it.</label>
                    <input class="mt-3 ps-4 fs-5 bg-code" type="email" id="code" placeholder="Email Address" >
                    <label class="email-invalid text-danger ms-2"> Email is invalid</label><br><br><br>
                    <a href="otp-verification.php"><input class="mb-5 me-3" type="button" id="reset" value="RESET PASSWORD"></a>
                </div>
            </section>
        </div>
    </div>
    <script src="js/forgotpassword.js"></script>
</body>
</html>