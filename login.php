<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	<!--Font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<!-- jQuery cdn link below -->
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Toast CDN for functionality of toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Toast CDN for design of toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="css/login.css">
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
								<li><a class="nav-link me-5  btn1 " href="index.php#home">Home</a></li>
								<li><a class="nav-link me-5  btn1 " href="index.php#aboutus">About Us</a></li>
								<li><a class="nav-link me-5 " href="index.php#contactus">Contact Us</a></li>
								<li><a class="nav-link me-5 " href="index.php#faq">FAQ</a></li>
								<li class="nav-item dropdown"><a class="nav-link dropdown-toggle  mx-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Signup</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item " href="companyregister.php">Employer</a></li>
									<li><a class="dropdown-item " href="jobseekersignup.php">JobSeeker</a></li>
								</ul>
								<li><a class="nav-link me-4 ms-3" href="login.php" style="background-color:#00C2D6; border-radius:10px;">Login</a></li>
								<li><a class="nav-link" href="#"></a></li>
							</nav>
						</ul>
					</div>
				</nav>         
			</div>
		</div><br><br><br><br>
	<div class="masthead">
		<br><br><br>
		
		<div class="container d-flex">
			<div class="d-block">
				<div class="login-page bg-white shadow" style="border-radius: 20px;">
					<h4 class="mt-2" style="color: #00C2D6;">Welcome to <br> TechPloyment</h4><br>
					<h6 class="fw-bold">Login with your email and password</h6>
					<form>
						<input class="mt-3" id="email" type="text" placeholder="EMAIL" style="background-color: #ECECEC;border-radius: 30px;border: 0;font-weight: 700;">
						<label></label>
						<div class="d-flex">
							<span class="icon" onclick="showHide()">
								<i class='bi bi-eye-slash icon1' aria-hidden="true" style="font-size: 2rem; cursor: pointer;"></i>
								<i class='bi bi-eye icon1' style="font-size: 2rem; cursor: pointer;"></i>
							</span>
							<input type="password" id="password" placeholder="PASSWORD" style="background-color: #ECECEC;border-radius: 30px;border: 0;font-weight: 700;">
							<label></label>
							<br><br>
						</div>
					
						<div><br>
							<button class="btn btn1 bt me-5 mb-2 fs-7 fw-bold text-dark" type="submit" style="border-radius: 20px; border: 0;">LOGIN</button>
							<br><br>
							<a id="alogin" href="forgot-password.html" style="color: #00C2D6;">Forgot your password?</a><br>
						</div>
					</form>	
				</div>
			</div>
			<img src="image/work 1.png" class="ms-5" alt="Job Portal Logo" width="650px" height="650px">
		</div>
	</div>	
	<script src="js/login.js"></script>
</body>
</html>