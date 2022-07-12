<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLOYER SIGN UP</title>
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/companyregister.css">
</head>

<body>
    <div class="color-overlay">
        <div class="container-fluid">
            <nav id="navbar-example" class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow " >
                <a href="#" class="navbar-brand ms-3">
                <img src="image/flogo.png" alt="Job Portal Logo" width="120" height="95"></a>
                <div class="collapse navbar-collapse" id="toggleMobileMenu">
                    <ul class="navbar-nav ms-auto text-center fw-bold">
                        <nav class="navbar navbar-light">     
                            <li><a class="nav-link me-5 " href="index.php#home">Home</a></li>
                            <li><a class="nav-link me-5 " href="index.php#aboutus">About Us</a></li>
                            <li><a class="nav-link me-5 " href="index.php#contactus">Contact Us</a></li>
                            <li><a class="nav-link me-5 " href="index.php#faq">FAQ</a></li>   
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  mx-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Signup</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item item1" href="companyregister.php">Employer</a></li>
                                <li><a class="dropdown-item" href="jobseekersignup.php">JobSeeker</a></li>
                            </ul>
                            <li><a class="nav-link me-4" href="login.php">Login</a></li>
                        </nav>
                    </ul>
                </div>
            </nav>         
        </div>
    </div><br>

    <div class="masthead">
        <div class="container shadow con1">
            <form class="container shadow">
                <div class="col-sm-9 text-start row mb-3">
                    <h1 class="text-dark fw-bold ps-5">COMPANY REGISTRATION FORM</h1>
                </div>
                <h2 class="text-black text-center mt-4">EMPLOYER DETAILS</h2>
                <hr>
                <div class="row mb-3 mt-3 ms-4">
                    <label for="employerfullname" class="col-sm-3 col-form-label">Employer Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="employerfullname">
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="employerposition" class="col-sm-3 col-form-label">Employer Position</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="employerposition">
                    </div>
                </div>
                <h2 class="text-black text-center mt-5">COMPANY DETAILS</h2>
                <hr>
                <div class="row mb-3 mt-3 ms-4">
                    <label for="companyname" class="col-sm-3 col-form-label">Company Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="companyname">
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="companyaddress" class="col-sm-3 col-form-label">Company Address</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="companyaddress">
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="companyceoname" class="col-sm-3 col-form-label">Company CEO Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="companyceoname">
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="companysize" class="col-sm-3 col-form-label">Company Size</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="companysize">
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="companyrevenue" class="col-sm-3 col-form-label">Company Revenue</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="companyrevenue">
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="industry" class="col-sm-3 col-form-label">Industry</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="industry">
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="companydescription" class="col-sm-3 col-form-label">Company Description</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" placeholder="Description Here" id="companydescription" rows="4"></textarea>
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="contactnumber" class="col-sm-3 col-form-label">Contact Number</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="contactnumber">
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="companyemail" class="col-sm-3 col-form-label">Company Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="companyemail">
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="companyLogo" class="col-sm-3 col-form-label">Company Logo</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="companyLogo">
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="dtipermit" class="col-sm-3 col-form-label">DTI Business Registration & Permit</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="dtipermit">
                        
                    </div>
                </div>
                
                <h2 class="text-black text-center mt-4">LOGIN DETAILS</h2>
                <hr>
                <div class="row mb-3 mt-3 ms-4">
                    <label for="emailaddress" class="col-sm-3 col-form-label">Email address</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="emailaddress">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ms-4">
                    <label for="password" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="password">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ms-4">
                    <label for="confirmpassword" class="col-sm-3 col-form-label">Confirm password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="confirmpassword">
                    </div>
                </div>

                <div class="text-center text-light">
                    <button type="submit" class="mt-5" id="SAVE-NOW">REGISTER NOW</button>
                </div>
            </form>
        </div>
        <br><br><br><br><br><br>
    </div>  

</body>
</html>