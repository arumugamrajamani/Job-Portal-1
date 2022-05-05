<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jobseeker Signup</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/resume.css">
</head>
<body>
	<div class="color-overlay">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg  h6 navbar-light bg">
					<a href="index.php" class="navbar-brand">
					<img src="image/flogo.png" alt="Job Portal Logo" width="120" height="95"></a>
	
				<div class="collapse navbar-collapse" id="toggleMobileMenu">
					<ul class="navbar-nav ms-auto text-center">
	
	
						<nav class="navbar navbar-light ">
							<li><a class="nav-link me-5 fs-5" href="contactus.php">Contact Us</a></li>
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
    <div class="masthead" style="background-image: url('./image/fbg1.png');">
    		<br><br><br>    	
    		<div class="signup-here">
				<br>
        		<h2 class="text-center">MANAGE YOUR RESUME</h2> <br><br>
        		<form>
            		<input type="text" placeholder="Full Name">
					<label>Full Name</label>
            		<input type="email" placeholder="Email Address">
            		<label>Email Address</label>
            		<input type="password" placeholder="Resume Link">
            		<label>Resume Link</label>
					<p>Your personalized URL which you can share to prospective employers.</p>
					<div class="row mb-3 ms-4">
						<label for="resume" class="col-sm-2 col-form-label">Resume</label>
						<div class="col-sm-9">
						  <input type="file" class="form-control" id="resume">
						</div>
            		<div>
            			<input class="btn1" type="button" value="SUBMIT" id="submit">
    				</div>
					<div>
            			<input class="btn1" type="button" value="PREVIEW" id="preview">
    				</div>
        		</form>
    		</div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>