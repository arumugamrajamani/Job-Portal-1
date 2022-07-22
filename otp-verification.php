<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
    <!--Font Style-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,455;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/otp-verification.css">
    <!-- jQuery cdn link below -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Toast CDN for functionality of toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Toast CDN for design of toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="color-overlay">
        <div class="container-fluid">
            <nav id="navbar-example2" class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow " >
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
                                <li><a class="nav-link me-4" href="login.php">Login</a></li>
                        </nav>
                    </ul>
                </div>
            </nav>         
        </div>
    </div>
    <div class="masthead"><br><br><br><br><br>
        <div class="container pt-5">
            <h3 class="text-center mt-5 mb-0 bg0 p-3 fs-10 text-dark">CODE VERIFICATION</h3>
            <section class="text-center bg-white shadow"><br><br>
                <div class="p-4 bg1">
                    <strong class="code">CODE </strong>
                    <input class="mt-3 ps-4 fs-5 bg-code" type="text" id="code" placeholder="Enter Code Here*" >
					<label class="error text-danger"> OTP code is incorrect</label>
					<label class=" d-flex my-2"></i>Enter the code that was sent in your email to reset your password</label>
                </div>
                    <button class="btn btn1 fs-7 m-3 pt-2 px-5" id="submit" type="button">Submit</button>	
				    <a href="forgot-password.php">
					    <button class="btn btn1 fs-7 m-3 px-4" id="re-enter" type="button">Re-Enter Email</button>
				    </a>
            </section>
        </div>
    </div>
    <script src="js/otpverification.js"></script>
</body>
</html>