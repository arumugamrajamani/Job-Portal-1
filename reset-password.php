<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/reset-password.css">
	  <!-- jQuery cdn link below -->
	  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>
<body>
    <div class="color-overlay">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0">
					<a href="index.php" class="navbar-brand">
					<img src="image/flogo.png" alt="Job Portal Logo" width="120" height="95"></a>
	
				<div class="collapse navbar-collapse" id="toggleMobileMenu">
					<ul class="navbar-nav ms-auto text-center">
	
	
						<nav class="navbar navbar-light ">
							<li><a class="nav-link me-5 fs-5" href="index.php#contactus">Contact Us</a></li>
								<a href="findajob.php">
								<button class="btn btn-outline-secondary me-5 fs-5"type="button">Find a Job</button></a>
								<button class="btn btn-outline-secondary me-5 fs-5"type="button">Post a Job</button>
	
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle fs-5" href="#"
								id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Signup</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item me-4 fs-5" href="companyregister.php">Employer</a></li>
				 				<li><a class="dropdown-item me-4 fs-5"href="jobseekersignup.php">JobSeeker</a></li>
							</ul>
	
								<li><a class="nav-link fs-5" href="login.php">Login</a></li>
							  	<li><a class="nav-link fs-5" href="#"><img src="image/profileicon1.png"alt="Profile" width="50" height="30"></a></li>
						</nav>
					</ul>
				</div>
			</nav>         
		</div>
	</div>
    <div class="masthead">
        <br><br><br><br><br><br><br>

        <div class="container pt-5" style="width: 630px;">
           <h2 class="text-center mt-5 bg0 p-3 text-white">Password Reset</h2>
           <form class="text-center bg-white" >
               <br>
			   Change password for <b><?php echo $_SESSION["OTPemail"];?></b>
			   <br><br>
               <div class="p-5 bg1 ">
					<div class="row mb-1 mt-3">
						<label for="password" class=" bi bi-file-lock col-sm-1 col-form-label" style="font-size: 1.5rem;"></label>
						<div class="col-sm-9">
							<input type="password" class="form-control border-error" id="password" placeholder="Password">               
							<div class="text-danger" id="password-errorMsg"></div>
						</div>
						<div class="col-sm-1">
							<span class="icon" onclick="showHide()">
								<i class='bi bi-eye'  aria-hidden="true"  style="font-size: 1.5rem;"></i>
								<i class='bi bi-eye-slash' style="font-size: 1.5rem;"></i>
							</span>
						</div>
					</div>
					<div class="row mb-1 mt-3">
						<label for="password" class=" bi bi-file-lock col-sm-1 col-form-label" style="font-size: 1.5rem;"></label>
						<div class="col-sm-9">
							<input type="password" class="form-control border-error" id="repassword" placeholder="Retype Password">               
							<div class="text-danger" id="repassword-errorMsg"></div>
						</div>
						<div class="col-sm-1">
							<span class="icon1" onclick="showHide1()">
								<i class='bi bi-eye'  aria-hidden="true"  style="font-size: 1.5rem;"></i>
								<i class='bi bi-eye-slash' style="font-size: 1.5rem;"></i>
							</span>
						</div>
					</div>

            	</div>
                <br>
                <button  role="button" class="btn btn-lg text-white fw-bold mb-4" data-bs-toggle="modal" id="resetpass" type="submit">Reset Password</button>
		   </form>
        </div>
        

        
    </div>

		<footer class="page-footer"><br>
			<div class="container-fluid text-center text-md-left mt-5">
				<div class="row">
					<div class="col-md-2 mx-auto mb-4">
						<h6 class="text-uppercase font-weight-bold">JOB SEEKER</h6>
						<hr class="bg-light mb-4 mt-0 d-inline-block mx-auto" style="width: 50px; height: 2px">
						<ul class="list-unstyled">
							<li class="my-0"><a href="#">Register</a></li>
							<li class="my-0"><a href="#">Job Search</a></li>
							<li class="my-0"><a href="#">How it works</a></li>
						</ul>
					</div>
	
					<div class="col-md-2 mx-auto mb-4">
						<h6 class="text-uppercase font-weight-bold">EMPLOYER</h6>
						<hr class="bg-light mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px">
	
						<ul class="list-unstyled">
							<li class="my-0"><a href="#">Register</a></li>
							<li class="my-0"><a href="#">Post a job</a></li>
							<li class="my-0"><a href="#">How it works</a></li>
	
						</ul>
					</div>
	
					<div class="col-md-2 mx-auto mb-4">
						<h6 class="text-uppercase font-weight-bold">AVAILABLE JOBS</h6>
						<hr class="bg-light mb-4 mt-0 d-inline-block mx-auto" style="width: 110px; height: 2px">
						<ul class="list-unstyled">
							<li class="my-0"><a>Graphic Design</a></li>
							<li class="my-0"><a>Programmers</a></li>
							<li class="my-0"><a>Blogging VAs</a></li>
							<li class="my-0"> <a>Webmaster VAs</a></li>
							<li class="my-0"> <a>Wordpress expert</a></li>
						</ul>
					</div>
	
					<div class="col-md-2 mx-auto mb-4">
						<h6 class="text-uppercase font-weight-bold">OTHER INFORMATIONS</h6>
						<hr class="bg-light mb-4 mt-0 d-inline-block mx-auto" style="width: 75px; height: 2px">
						<ul class="list-unstyled">
							<li class="my-0"></i> <a href="#">About us</a></li>
							<li class="my-0"></i> <a href="faq.php">FAQ</a></li>
                        	<li class="my-0"></i> <a href="contactus.php">Contact us</a></li>
							<li class="my-0"></i><a href="#">Privacy Policy</a></li>
							<li class="my-0"></i> <a href="#">Terms of use</a></li>
						</ul>
					</div>
					<div class="col-md-2 mx-auto mb-4">
						<h6 class="text-uppercase font-weight-bold">CONTACT US</h6>
						<hr class="bg-light mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px">
						<ul class="list-unstyled">
							<img class="my-0" src="image/twitter.png" alt="logo" href="#" style="width: 50px; height: 50px">
							<img class="my-0" src="image/facebook.png" alt="logo" href="#" style="width: 50px; height: 50px">
							<img class="my-0" src="image/insta.png" alt="logo" href="#" style="width: 50px; height: 50px">
						</ul>
					</div>
				</div>
			</div>
		</footer>
        <div class="m-4">        
            <div id="myModal" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <p>Password changed Successfully!</p>
                        </div>
                        <div class="modal-footer">
                            <a href="login.php">
                                <button class="btn mt-4" id="submit" >LOG IN</button>
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

    }function showHide1(){
        let icon = document.querySelector(".icon1"),
            input= document.getElementById("repassword");
            
        
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