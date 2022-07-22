<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,455;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- jQuery cdn link below -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Toast CDN for functionality of toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Toast CDN for design of toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/reset-password.css">
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
                            <li ><a class="nav-link me-5" href="index.php#home">Home</a></li>
                            <li ><a class="nav-link me-5" href="index.php#aboutus">About Us</a></li>
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
    <div class="masthead"><br><br><br><br><br><br><br>
        <div class="container pt-5 con1">
            <section class="text-center bg-white">
				<h4 class="text-center bg0 fs-5 p-3 text-dark mb-3">Password Reset</h4>
				<h6>Change password for <b>sample@gmail.com</b> </h6>
                <div class="p-4 bg1">
                    <div class="div1">
                        <i class="bi bi-file-lock"></i>
                        <input class="input mt-3 ps-3 fw-bold fs-5 success" type="password" id="password" placeholder="New Password" >
                        <span class="icon ms-2" onclick="showHide()">
                            <i class='bi bi-eye'  aria-hidden="true"></i>
                            <i class='bi bi-eye-slash'></i>
                        </span>
                        <label class=" d-flex mb-2 justify-content-center text1" ></i>New password must be 8 characters</label>
                        <i class="bi bi-file-lock"></i>
                        <input class="input mt-3 ps-3 fw-bold fs-5 error1" type="password" id="password1" placeholder="Confirm Password" >
                        <span class="icon1 ms-2" onclick="showHide1()">
                            <i class='bi bi-eye'  aria-hidden="true" ></i>
                            <i class='bi bi-eye-slash'></i>
                        </span>
                        <label class="text-danger error">Password is required</label>
                    </div>
                </div><br>
                <button class="btn btn-lg fw-bold mb-4" id="resetpass">Reset Password</button>
            </section>
        </div>
    </div>
    <div class="m-4">        
        <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content"> 
                    <div class="modal-body">
                        <img src="image/image 9.png" alt="" class="img9">
                        <div class="modtext mt-2">
                            <p>Password changed successfully!</p>
                        </div>
                        <label class="fs-5 login1">Please Log-in again</label>
                        <a href="login.php">
                            <button class="btn mt-4 fs-5 btn-ok" id="submit">Okay</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showHide(){
            let icon = document.querySelector(".icon"),
                input= document.getElementById("password");
                if (input.type === "password"){
                    input.type = "text";
                }else{
                    input.type = "password";
                }
                icon.classList.toggle('is-active');
            }
        function showHide1(){
            let icon = document.querySelector(".icon1"),
                input= document.getElementById("password1");
                if (input.type === "password"){
                    input.type = "text";
                }else{
                    input.type = "password";
                }
                icon.classList.toggle('is-active');
            }
    </script>
    <script src="js/resetpassword.js"></script>
</body>
</html>