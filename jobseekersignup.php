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
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Sweet alert cdn link below -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- jQuery cdn link below -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/jobseekersignup.css">
    
</head>

<body>
    <div class="color-overlay">
        <div class="container-fluid">
            <nav id="navbar-example2" class="navbar navbar-expand-lg navbar-light shadow" >
                    <a href="#" class="navbar-brand ms-3">
                    <img class="logo" src="image/flogo.png" alt="Job Portal Logo" width="120" height="95"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="toggleMobileMenu">
                    <ul class="navbar-nav ms-auto text-center fw-bold">
                            <nav class="navbar navbar-light">     
                                <li ><a class="nav-link me-5 " href="index.php#home">Home</a></li>
                                <li ><a class="nav-link me-5 " href="index.php#aboutus">About Us</a></li>
                                <li><a class="nav-link me-5 " href="index.php#contactus">Contact Us</a></li>
                                <li><a class="nav-link me-5 " href="index.php#faq">FAQ</a></li> 
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle  mx-4" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Signup</a>
                            <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item " href="companyregister.php">Employer</a></li>
                                <li><a class="dropdown-item item2" href="jobseekersignup.php">JobSeeker</a></li>
                            </ul>
                                <li><a class="nav-link me-4" href="login.php">Login</a></li>
                        </nav>
                    </ul>
                </div>
            </nav>         
        </div>
    </div>

    
    <div class="masthead">
        <div class="ms-5 mb-5 div1"><br><br>
            <form class="container needs-validation" novalidate>
                <div class="col-sm-9 text-start row mb-3 div2">
                    <h1 class="text-dark fw-bold">JOB SEEKER REGISTRATION FORM</h1>
                </div>
                <h2 class="text-black text-center mt-4">ACCOUNT INFORMATION</h2>
				<div class="row mb-3 mt-3 ms-4">
                    <label for="Profile" class="profile-picture col-sm-2">Profile Picture:</label>
                    <div class="col-sm-7">
                        <input type="file" id="profilePic" class="file form-control" name="Profile">
                        <div class="text-danger"> Please attach a file</div>
                    </div>
                </div>
				<div class="row mb-3 mt-3 ms-4">
                    <label for="Resume" class="profile-picture col-sm-2">Resume:</label>
                    <div class="col-sm-7">
                        <input type="file" id="resume" class="file form-control" name="Resume">
                        <div class="text-danger"> Please attach a file</div>
                    </div>
                </div>
                 <div class="row mb-3 mt-3 ms-4">

                    <label for="fullname" class="col-sm-2 col-form-label">Full Name</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control error" id="fullname">               
                        <div class="text-danger"> Please enter full name</div>
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control error" id="email">
                        <div class="text-danger"> Please enter your email address</div>
                    </div>
                </div>
                <div class="row mb-3 mt-3 ms-4">
                    <label for="fullname" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control error" id="address">               
                        <div class="text-danger"> Please enter full address</div>
                    </div>
                </div>
                <div class="row mb-3 mt-3 ms-4">
                    <label for="fullname" class="col-sm-2 col-form-label">Birthday</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control error" id="birthday">               
                        <div class="text-danger"> Please enter your birthday</div>
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" required="" class="form-control" id="password">
                        <div class="invalid-feedback"> Please enter your password</div>
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="confirmpassword" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-9">
                        <input type="password" required="" class="form-control" id="confirmpassword">
                        <div class="invalid-feedback"> Please confirm your password</div>
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="mobilenumber" class="col-sm-2 col-form-label">Mobile Number</label>
                    <div class="col-sm-9">
                        <input type="number" required="" class="form-control" id="mobilenumber">
                        <div class="invalid-feedback"> Please enter your mobile number</div>
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="mobilenumber" class="col-sm-2 col-form-label">Expected Salary</label>
                    <div class="col-sm-9">
                        <input type="number" required="" class="form-control" id="salary">
                        <div class="invalid-feedback"> Please enter your desire amount salary</div>
                    </div>
                </div>
                <div class="row mb-3 mt-3 ms-4">
                    <label for="fullname" class="col-sm-2 col-form-label">H.E. Attainment</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control error" id="attainment">               
                        <div class="text-danger"> Type in your educational background</div>
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="mobilenumber" class="col-sm-2 col-form-label">Available Hours</label>
                    <div class="col-sm-9">
                        <input type="number" required="" class="form-control" id="hours">
                        <div class="invalid-feedback"> Please enter your desire amount in hours</div>
                    </div>
                </div>
                <div class="row mb-3 mt-3 ms-4">

                    <label for="experience" class="col-sm-2 col-form-label">Experience:</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="experience" name="experience" rows="4" cols="60"></textarea>              
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <div class="headlang">
                        <p>Programming Language:</p>
                    </div>
                    <div class="selection-lang">
                        <label class="HTML" for="HTML">HTML</label>
                        <div class="col-sm-9">
                            <input type="checkbox"  name="HTML" value="1" id="HTML">
                        </div>
                        <label class="JavaScript" for="JavaScript">JavaScript</label>
                        <div class="col-sm-9">
                            <input type="checkbox"  name="JavaScript" value="2" id="JavaScript">
                        </div>
                        <label class="Python" for="Python">Python</label>
                        <div class="col-sm-9">
                            <input type="checkbox"  name="Python" value="3" id="Python">
                        </div>
                        <label class="Csharp" for="Csharp">C#</label>
                        <div class="col-sm-9">
                            <input type="checkbox"  name="Csharp" value="4" id="Csharp">
                        </div>
                        <label class="Cplus" for="Cplus">C++</label>
                        <div class="col-sm-9">
                            <input type="checkbox"  name="Cplus" value="5" id="Cplus">
                        </div>
                        <label class="PHP" for="PHP">PHP</label>
                        <div class="col-sm-9">
                            <input type="checkbox"  name="PHP" value="6" id="PHP">
                        </div>
                    </div>
                </div>
                <br>
                <div class="text-center text-light">
                    <button type="submit" class="signup" id="SAVE-NOW">SIGN UP</button>
                </div>
            </form>
            <div class="online-reg">
                <img class="online" src="image/online-registration.png" alt="Registration">
            </div>
        </div>
    </div>

    <script src="js/jobseekersignup.js"></script>
    <script>(function () {
        'use strict'
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>
</body>
</html>