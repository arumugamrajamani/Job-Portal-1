<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOBSEEKER SIGN UP</title>
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
    <link rel="stylesheet" href="css/jobseekersignup.css">
    <link rel="stylesheet" href="css/preloader.css"> <!-- External CSS file for preloader -->
</head>

<body>
    <?php include_once'include/preloader-display.php'; // To display the html for preloader ?>
    <div class="color-overlay">
        <div class="container-fluid">
            <nav id="navbar-example2" class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow " >
                <a href="#" class="navbar-brand ms-3">
                <img src="image/flogo.png" alt="Job Portal Logo" width="120" height="95"></a>
                <div class="collapse navbar-collapse" id="toggleMobileMenu">
                    <ul class="navbar-nav ms-auto text-center fw-bold">
                        <nav class="navbar navbar-light">     
                            <li><a class="nav-link me-5  btn1 " href="index.php">Home</a></li>
                            <li><a class="nav-link me-5  btn1 " href="index.php#aboutus">About Us</a></li>
                            <li><a class="nav-link me-5 " href="index.php#contactus">Contact Us</a></li>
                            <li><a class="nav-link me-5 " href="index.php#faq">FAQ</a></li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle  mx-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Signup</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item " href="companyregister.php">Employer</a></li>
                                <li><a class="dropdown-item " href="jobseekersignup.php">JobSeeker</a></li>
                            </ul>
                            <li><a class="nav-link me-4 ms-3" href="login.php">Login</a></li>
                            <li><a class="nav-link" href="#"></a></li>
                        </nav>
                    </ul>
                </div>
            </nav>         
        </div>
    </div><br><br><br>

    <div class="masthead"><br><br>
        <div class="ms-5 mb-5" style="width: 1800px;height:100vh;background-color: #FDF6EC;"><br><br>
            <form class="container needs-validation">
                <div class="col-sm-9 text-start row mb-3" style="background-color: #00C2D6;">
                    <h1 class="text-dark fw-bold">JOB SEEKER REGISTRATION FORM</h1>
                </div>
                <h2 class="text-black text-center mt-4">ACCOUNT INFORMATION</h2>
                <hr>
                <div class="row mb-3 mt-3 ms-4">
                    <label for="fullname" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-9">
                        <input style="background: #ECECEC;" type="text" class="form-control" id="fullname">               
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="mobilenumber" class="col-sm-2 col-form-label">Mobile Number</label>
                    <div class="col-sm-9">
                        <input style="background: #ECECEC;" type="text" class="form-control" id="mobilenumber">
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input style="background: #ECECEC;" type="email" class="form-control" id="email">
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input style="background: #ECECEC;" type="password" class="form-control" id="password">
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="confirmpassword" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-9">
                        <input style="background: #ECECEC;" type="password" class="form-control" id="confirmpassword">
                    </div>
                </div>
                <br>
                <div class="text-center text-light">
                    <button type="submit" class=" text-dark" id="SAVE-NOW" style="background-color: #00C2D6;border: 0; width: 100px;height:40px;border-radius: 14px;">SIGN UP</button>
                </div>    
            </form>
            <div style="margin-left: 1050px; margin-top: -500px;">
                <img src="image/online-registration.png" alt="Registration" width="600" height="600">
            </div>
        </div>
    </div>
    <script src="js/jobseekersignup.js"></script>
</body>
</html>