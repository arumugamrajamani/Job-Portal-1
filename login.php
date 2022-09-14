<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<!--Font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Toast CDN for functionality of toastr -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="css/login.css">
</head>

<body>
	<div class="color-overlay">
		<div class="container-fluid">
			<nav id="navbar-example2" class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow ">
				<a href="#" class="navbar-brand ms-3">
					<img id="logo" src="image/light-logo.png" alt="Job Portal Logo" width="100" class="d-inline-block align-top" /></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fas fa-bars" style="color:rgb(0, 0, 0); font-size:37px;"></i>
					</span>
				</button>
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
							<li id="log"><a class="nav-link me-4 ms-2 login" href="login.php">Login</a></li>
						</nav>
					</ul>
				</div>
			</nav>
		</div>
	</div><br><br><br><br>
	<div class="circle"></div>
	<div class="circle1"></div>
	<div class="masthead">
		<br><br><br>
		<div class="container d-flex">
			<div class="cont1">
				<div class="login-page bg-white shadow">
					<h4 class="mt-2">Welcome to <br> TechPloyment</h4><br>
					<h6 class="fw-bold">Login with your email and password</h6>
					<form>
						<input class="mt-3 username" id="email" type="text" placeholder="EMAIL">
						<label class="fw-bold"></label>
						<div class="d-flex">
							<input type="password" id="password" placeholder="PASSWORD">
							<label class="fw-bold">
								<span class="icon" onclick="showHide()">
									<i class='bi bi-eye-slash icon1' aria-hidden="true"></i>
									<i class='bi bi-eye icon1'></i>
								</span>
							</label><br><br>
						</div>
						<div class="alog">
							<a id="alogin" href="forgot-password.php">Forgot your password?</a><br>
							<button class="btn btn1 bt me-5 mb-2 fs-7 fw-bold text-dark" type="submit" style="border-radius: 20px; border: 0;">LOGIN</button>
							<a id="alogin1" href="#"><span style="color: white;">Not yet registered? </span>Create Account</a>
						</div>
					</form>
				</div>
				<img src="image/work 1.png" class="ms-5" alt="Job Portal Logo" width="650px" height="650px">
			</div>
		</div>
		<div class="circle2"></div>
		<div class="circle3"></div>
		<div class='toggle-switch'>
			<label class="lab">
				<input class="dar" type='checkbox' onclick="toggleImage()">
				<span id="icon2" class='slider'></span>
			</label>
		</div>
	</div>
	<script>
		function showHide() {
			let icon = document.querySelector(".icon"),
				input = document.getElementById("password");


			if (input.type === "password") {
				input.type = "text";

			} else {
				input.type = "password";
			}
			icon.classList.toggle('is-active');
		}
		var icon2 = document.getElementById("icon2")

		icon2.onclick = function() {
			document.body.classList.toggle("dark-theme");
		}

		function toggleImage() {
			imgsrc = document.getElementById("logo").src;
			if (imgsrc.indexOf("image/light-logo.png") != -1) {
				document.getElementById("logo").src = "image/Techployment (7) 1.png";
			} else {
				document.getElementById("logo").src = "image/light-logo.png";
			}
		}
	</script>

	<!-- Bootstrap Scripts -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>	
	<!-- jQuery cdn link below -->
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<!-- Toast CDN for design of toastr -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>	

	<script src='https://cdn.jsdelivr.net/npm/@widgetbot/crate@3' async defer>
		new Crate({
			server: '966621976158425118', // Job Portal Concerns Server
			channel: '1019139667989381200', // #general
			glyph: ['image/light-logo.png', '100%'],
			color: '#00d7e2',
			location: ['bottom', 'right'],
			notifications: true,
		})
		crate.notify({
			content: '`If you have any problems, you can contact us here :)`',
			timeout: 10000,
			avatar: 'image/light-logo.png',
		})
	</script>

	<!-- Login Script -->
	<script src="js/login.js"></script>
</body>

</html>