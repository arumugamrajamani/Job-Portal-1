<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Manage Resume</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/resume.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
		<div class="container-fluid">
			<a class="navbar-brand me-1" href="#"></a>
			<img src="image/flogo.png" alt="Job Portal Logo" width="100" height="70"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
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
						<a class="nav-link text-dark about active" href="searchjob.php">JOB BOARD</a>
					</li>
					<li class="nav-item account dropdown active"><a class="nav-link text-dark fw-bold dropdown-toggle account active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img class="image" src="image/profileicon1.png" alt="Profile" width="50" height="30"> ACCOUNT</a>
					<ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item text-light text-start" href="applicant-profile.php"> Full Name</a></li>
						<li>
							<hr class="dropdown-divider bg-white">
						</li>
						<li><a class="dropdown-item text-light text-start" href="manage-account-1.php"><img src="image/edit-profile.png" alt=""> Edit Profile</a></li>
						<li><a class="dropdown-item text-light text-start" href="manage-account-2.php"><img src="image/change pass.png" alt=""> Change Password</a></li>
						<li><a class="dropdown-item text-light text-start" href="jobapplication.php"><img src="image/job application.png" alt=""> Job Applications</a></li>
						<li><a class="dropdown-item text-light text-start" href="bookmark-job.php"><img src="image/bookmark.png" alt=""> Bookmarked jobs</a></li>
						<li><a class="dropdown-item text-light text-start" href="resume.php"><img src="image/manage resume.png" alt=""> Manage Resume</a></li>
						<li><a class="dropdown-item logout text-light text-start" href="#"><img src="image/sign out.png" alt=""> LOGOUT</a></li>
					</ul>
				</ul>
			</div>
		</div>
	</nav>
	<div class="masthead" style="background-image: url('./image/fbg1.png');">
		<div class="position-absolute">
			<img src="image/workplace 1.png" alt="" class="img1">
			<img src="image/work-place 1.png" alt="" class="img2">
		</div><br><br><br>
		<div class="container">
			<div class="bg-white text-center pt-4 shadow contain">
				<h3 class="fw-bold">MANAGE YOUR RESUME</h3>
				<input class="mt-5 inputs" type="text" placeholder="Full Name*">
				<div class="text-start ms-5 fw-bold">Full Name</div>
				<input class="mt-3 inputs" type="text" placeholder="Email Address*">
				<div class="text-start ms-5 fw-bold">Email Address</div>
				<input class="mt-3 inputs" type="text" placeholder="GDrive Link*">
				<div class="text-start ms-5 fw-bold">Resume Link</div>
				<div class="mt-5">
					<button type="button" class="btn1">Preview</button>
					<button type="button" class="btn1">Submit</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>