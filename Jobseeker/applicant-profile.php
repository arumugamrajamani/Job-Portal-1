<?php include_once 'include/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/applicant-profile.css">
  <!-- jQuery cdn link below -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <!-- Toast CDN for functionality of toastr -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Applicant Profile</title>
</head>

<body>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    	<div class="container-fluid">
      		<a class="navbar-brand me-1" href="#"></a>
      		<img src="image/flogo.png" onclick="window.location.href='applicant-profile.php'" alt="Job Portal Logo" width="100" height="70"></a>
      		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      		  	<span class="navbar-toggler-icon"></span>
      		</button>
      		<form class="d-flex ms-2">
        		<input class="form-control icon" type="search" placeholder="Search for a job title" aria-label="Search">
        		<button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
      		</form>
      		<div class="collapse navbar-collapse" id="navbarSupportedContent">
        		<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          			<li class="nav-item">
            			<a class="nav-link text-dark message active" aria-current="page" href="message-jobseekers.php">MESSAGE</a>
          			</li>
          			<li class="nav-item">
            			<a class="nav-link text-dark about active" href="jobcategories.php">JOB BOARD</a>
          			</li>
          			<li class="nav-item">
						<a class="nav-link text-dark about active text-center" href="searchjob.php">AVAILABLE JOBS</a>
					</li>
          			<li class="nav-item account dropdown active">
            			<a class="nav-link text-dark dropdown-toggle account active" href="#" id="navbarDropdown"
              				role="button" data-bs-toggle="dropdown" aria-expanded="false">
              				<img id="pfp" class="image" src="" alt="Profile" width="30" height="30" style="border-radius: 100px; object-fit: cover;"> ACCOUNT
						</a>
            			<ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
              				<li><a id = "upperName" class="dropdown-item text-light menubar" href="applicant-profile.php"></a></li>
              				<li><hr class="dropdown-divider bg-white"></li>
              				<li><a class="dropdown-item text-light" href="jobapplication.php">JOB APPLICATIONS</a></li>
              				<li><a class="dropdown-item text-light" href="bookmark-job.php">BOOKMARKED JOBS</a></li>
							<li><a class="dropdown-item text-light" href="manage-account-1.php">ACCOUNT SETTINGS</a></li>
							<li><a class="dropdown-item text-light" href="Resume-Builder/resume-builder1.php">RESUME BUILDER</a></li>
							<li><a class="dropdown-item text-light" href="manage-account-2.php">CHANGE PASSWORD</a></li>
							<li><a class="dropdown-item logout text-light" href="../logout.php">LOGOUT</a></li>
						</ul>
        		</ul>
      		</div>
    	</div>
  	</nav>
	<br>
  <div class="container shadow">
    <div class="masthead" style="background-image: url('./image/bg3.png');">
      <br>
      <section class=" d-flex banner ms-3 mt-3 shadow">
        <div class="d-flex pt-3">
          <div class="save text-center m-1 ">
            <button onclick="location.href='resume.php'" class="btn1 text-white">Manage Resume</button>
            <i class="bi bi-save2 fs-3"></i>
          </div>
          <div class="edit text-center m-1 ">
            <i id="editProfile" class="bi bi-pencil-square fs-3 "></i>
          </div>
        </div>
        <div>
          <h3 class="fw-bold p-5 ms-3"></h3>
        </div>
		
		 
        <img class="profile_pic fa-5x"src="" id="profile_picture"></img>
		
      </section>
      <div class="name text-center">
        <h3 class="fw-bold mt-2" id="fullname"></h3>
        <label class="fs-4">Web developer</label>
      </div>
      <strong><label id="address" class="mt-2 loc"></label></strong>
      <div class="column">
        <div class="mt-2 mx-5 text-center company-n">
        <label class="" id="mobile_number"></label>
        <br>
        <label class="" id="email"></label>
        </div>
      </div>
      <hr class="hr1">

      <section class="sec bg-white shadow-lg text-center ">
        <div class="exp mb-3">
          <h4 class="p-2 fw-bold">Experience</h4>
        </div>

        <div class="con1 ms-5 p-2">
          <p id="experience" class="pt-5"></p>
          <!--Hello! This is Juan Dela Cruz and I am a Senior Web Developer for five years. I have projects
            from different firms creating new website for different purposes.-->
        </div>

      </section>
      <br><br><br>
      <hr class="hr1">
      <div class="d-flex justify-content-center mt-5">
        <div class="me-5 bg1 text-center">
          <h4 class="fw-bold bg2 p-2">Salary Expectation</h4>
          <p id="salary" class="p-4"></p>
        </div>
        <div class="me-5 ms-3 bg0 text-center">
          <h4 class="fw-bold bg2 p-2">Highest Educational Attainment </h4>
          <p id="attainment" class="p-4"></p>
        </div>
        <div class="ms-3 bg1 text-center">
          <h4 class="fw-bold bg2 p-2">Available Hours</h4>
          <p id="hours" class="p-4"></p>
        </div>
      </div>
      <h3 class="text-center mt-5 fw-bold">SKILLS SUMMARY</h3>
      <div class="d-flex justify-content-center mt-3">
        <div id="html" class="bg3">
        </div>
        <div id="py" class="bg3">
        </div>
        <div id="js" class="bg3">
        </div>
      </div>
      <div class="d-flex justify-content-center mt-3">
        <div id="csharp" class="bg3">
        </div>
        <div id="cpp" class="bg3">
        </div>
        <div id="php" class="bg3">
        </div>
      </div><br>
      <hr class="hr1">
      <br><br>
      <div class="bg4">
        <h5 class="text-center text-white p-3">EMPLOY ME NOW!</h5>
      </div>


    </div>
  </div><br><br><br><br>

  <footer class="page-footer shadow-sm"><br>
    <div class="container-fluid text-start text-md-left mt-5">
      <div class="row">
        <div class="col-md-2 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold">JOB SEEKER</h6>
          <ul class="list-unstyled">
            <li class="my-0"><a href="../jobseekersignup.php" class="text-dark">Register</a></li>
            <li class="my-0"><a href="searchjob.php" class="text-dark">Job Search</a></li>
            <li class="my-0"><a href="../howitworks-jobseeker.php" class="text-dark">How it works</a></li>
          </ul>
        </div>

        <div class="col-md-2 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold">EMPLOYER</h6>
          <ul class="list-unstyled">
            <li class="my-0"><a href="../companyregister.php" class="text-dark">Register</a></li>
            <li class="my-0"><a href="postajob.php" class="text-dark">Post a job</a></li>
            <li class="my-0"><a href="../howitworks-employ.php" class="text-dark">How it works</a></li>
          </ul>
        </div>

        <div class="col-md-2 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold">OTHER INFORMATIONS</h6>
          <ul class="list-unstyled">
            <li class="my-0"></i> <a href="../index.php#aboutus" class="text-dark">About us</a></li>
            <li class="my-0"></i> <a href="../index.php#faq" class="text-dark">FAQ</a></li>
            <li class="my-0"></i> <a href="../termsandcondition.php" class="text-dark">Terms and conditions</a></li>
            <li class="my-0"></i><a href="../privacypolicy.php" class="text-dark">Privacy Policy</a></li>
            <li class="my-0"></i> <a href="../termsofuse.php" class="text-dark">Terms of use</a></li>
          </ul>
        </div>
        <div class="col-md-2 mx-auto mb-4 text-center">
          <h6 class="text-uppercase font-weight-bold">CONTACT US</h6>
          <ul class="list-unstyled d-flex">
            <img class="mail" src="image/gmail.png" alt="logo" href="#">
            concerns.techploymentph@gmail.com
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <div class="container-fluid d-flex bg-white text-center p-3">

    <h6> Copyrignt © TechPloyment 2022. All Rights Reserved.</h6>
    <h6 class="h6">Developed by MCC Interns 2022, Job Portal</h6>
    <br>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

    <script src="js/applicant-profile.js"></script>
    <script src="js/pfp.js"></script>
</body>

</html>