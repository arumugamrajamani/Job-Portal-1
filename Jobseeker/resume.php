<?php include_once 'include/header.php'; ?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Manage Resume</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/resume.css">
	<!-- Sweet alert cdn link below -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- jQuery cdn link below -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
		<div class="container-fluid">
			<a class="navbar-brand me-1" href="#"></a>
			<img src="image/light-logo.png" onclick="window.location.href='applicant-profile.php'" alt="Job Portal Logo" width="100" height="70" id="logo"></a>
			<button class="navbar-toggler text-dark" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<form class="d-flex">
				<input class="form-control icon" type="search" placeholder="Search for a job title" aria-label="Search">
				<button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
			</form>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item me-0">
						<a class="nav-link text-dark message active fw-bold" aria-current="page" href="message-jobseekers.php">MESSAGE</a>
					</li>
					<li class="nav-item fw-bold">
						<a class="nav-link text-dark about active" href="jobcategories.php">JOB BOARD</a>
					</li>
					<li class="nav-item fw-bold">
            			<a class="nav-link text-dark about active text-center" href="searchjob.php">AVAILABLE JOBS</a>
          			</li>
					<li class="nav-item account dropdown active"><a class="nav-link text-dark fw-bold dropdown-toggle account active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<img id="pfp" class="image" src="" alt="Profile" width="30" height="30" style="border-radius: 100px; object-fit: cover;"> ACCOUNT</a>
              <ul class="dropdown-menu account-drop drop" aria-labelledby="navbarDropdown">
                <li><a id="name" class="dropdown-item text-start name" href="applicant-profile.php"></a></li>
						<li>
							<hr class="dropdown-divider bg-black">
						</li>
						<li><a class="dropdown-item text-light text-start" href="manage-account-1.php"> Edit Profile</a></li>
						<li><a class="dropdown-item text-light text-start" href="manage-account-2.php"> Change Password</a></li>
						<li><a class="dropdown-item text-light text-start" href="jobapplication.php"> Job Applications</a></li>
						<li><a class="dropdown-item text-light text-start" href="bookmark-job.php"> Bookmarked jobs</a></li>
						<li><a class="dropdown-item text-light text-start" href="resume.php"> Manage Resume</a></li>
						<li><a class="dropdown-item logout text-light text-start" href="../logout.php"> LOGOUT</a></li>
					</ul>
				</ul>
			</div>
		</div>
	</nav>
	<div class="masthead">
		<div class="position-absolute">
			<img src="image/workplace 1.png" alt="" class="img1">
			<img src="image/work-place 1.png" alt="" class="img2">
			
			<div class="container">
			<div class="bg-white text-center pt-4 shadow contain">
				<h3 class="fw-bold">MANAGE YOUR RESUME</h3>
				<div class="row mb-3 mt-3 ms-4">
                    <label for="fullname" class="col-sm-2 col-form-label">Full Name:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="hey" value="">               
                        <div class="text-danger"> Please enter full name</div>
                    </div>
                </div>
				<div class="row mb-3 ms-4">
                    <label for="email" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control error" id="Email">
                        <div class="text-danger"> Please enter your email address</div>
                    </div>
                </div>
				<div class="row mb-3 mt-3 ms-4">
				<label for="permitOriginalName" class="col-sm-2 col-form-label" id="l13">Resume</label>
                    <div class="col-sm-9">
					<input type="file" class="form-control" id="Resume"><br>              
                        <div class="text-danger"> Please upload your file</div>
                    </div>
                </div>
				<ul>
					<li>
						<a class="resume-temp"href="../Resume-Builder/resume-builder1.php">Resume Builder Templates</a>
					</li>
				</ul>
				<div class="mt-5">
					<button id="sub" type="button" class="btn1">Submit</button>
				</div>
			</div>
		</div>
		</div>
		<br><br><br>
		
		<div class="toggle-switch">
			<label class="lab">
			  <input class="dar" type="checkbox" name="theme" onclick="toggleImage()">
			  <span id="icon2" class ="slider"></span>
			</label>
		  </div>
	</div>
	<script>
		function toggleImage() {
		imgsrc = document.getElementById("logo").src;
		if (imgsrc.indexOf("image/light-logo.png") !=-1){
		  document.getElementById("logo").src = "image/Techployment (7) 1.png";
		}
		else{
		  document.getElementById("logo").src = "image/light-logo.png";
		}
	  }
	  </script>
	  <script>
		var checkbox = document.querySelector('input[name=theme');
	
		checkbox.addEventListener('change', function(){
			if(this.checked){
				trans()
				document.documentElement.setAttribute('data-theme','dark')
			}else{
				trans()
				document.documentElement.setAttribute('data-theme','light')
			}
		});
		let trans = () => {
			document.documentElement.classList.add('transition');
			window.setTimeout(() => {
				document.documentElement.classList.remove('transition')
			}, 1000)
		}
	</script>
	<script src="js/pfp.js"></script>
	<script src="js/resume.js"></script>
</body>
</html>