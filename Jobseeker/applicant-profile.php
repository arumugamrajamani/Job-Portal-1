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
  <title>Applicant Profile</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
      <a class="navbar-brand me-1" href="#"></a>
      <img src="image/flogo.png" alt="Job Portal Logo" width="100" height="70"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="d-flex ms-2">
        <input class="form-control icon" type="search" placeholder="Search for a job title" aria-label="Search">
        <button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
      </form>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item me-0">
            <a class="nav-link text-dark message active" aria-current="page" href="message-jobseekers.php">MESSAGE</a>
          </li>
          <li class="nav-item me-5 px-5">
            <a class="nav-link text-dark about active" href="searchjob.php">JOB BOARD</a>
          </li>
          <li class="nav-item account dropdown active">
            <a class="nav-link text-dark dropdown-toggle account active" href="#" id="navbarDropdown"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="image" src="image/profileicon1.png" alt="Profile" width="50" height="30"> ACCOUNT</a>
            <ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-light menubar" href="applicant-profile.php">FULL NAME</a></li>
              <li>
                <hr class="dropdown-divider bg-white">
              </li>
              <li><a class="dropdown-item text-light" href="jobapplication.php">JOB APPLICATIONS</a></li>
              <li><a class="dropdown-item text-light" href="bookmark-job.php">BOOKMARKED JOBS</a></li>
              <li><a class="dropdown-item text-light" href="manage-account-1.php">ACCOUNT SETTINGS</a></li>
              <li><a class="dropdown-item logout text-light" href="../logout.php">LOGOUT</a></li>
            </ul>
        </ul>
      </div>
    </div>
  </nav><br>

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
            <i class="bi bi-pencil-square fs-3 "></i>
          </div>
        </div>
        <div>
          <h3 class="fw-bold p-5 ms-3">BANNER</h3>
        </div>
        <i class="bi bi-person-circle fa-5x"></i>
      </section>
      <div class="name text-center">
        <h3 class="fw-bold mt-2">JUAN DELA CRUZ</h3>
        <label class="fs-4">Web developer</label>
      </div>
      <strong><label class="mt-2 loc"><i class="bi bi-geo-alt"></i>Manila, Philippines</label></strong>
      <div class="column">
        <div class="mt-2 mx-5 text-center company-n">
          <label class="pt-3 p-5 text-start">Contact#:0900000000000 <br>Email Address:jobseekers@gmail.com</label>
        </div>
      </div>
      <hr class="hr1">

      <section class="sec bg-white shadow-lg text-center ">
        <div class="exp mb-3">
          <h4 class="p-2 fw-bold">Experience</h4>
        </div>

        <div class="con1 ms-5 p-2">
          <p class="pt-5">Hello! This is Juan Dela Cruz and I am a Senior Web Developer for five years. I have projects
            from different firms creating new website for different purposes. </p>
        </div>

      </section>
      <br><br><br>
      <hr class="hr1">
      <div class="d-flex justify-content-center mt-5">
        <div class="me-5 bg1 text-center">
          <h4 class="fw-bold bg2 p-2">Salary Expectation</h4>
          <p class="p-4"> ₱100,000</p>
        </div>
        <div class="me-5 ms-3 bg0 text-center">
          <h4 class="fw-bold bg2 p-2">Highest Educational Attainment </h4>
          <p class="p-4">Bachelor of Science in Information Technology (2013)</p>
        </div>
        <div class="ms-3 bg1 text-center">
          <h4 class="fw-bold bg2 p-2">Available Hours</h4>
          <p class="p-4">20 Hours/Week</p>
        </div>
      </div>
      <h3 class="text-center mt-5 fw-bold">SKILLS SUMMARY</h3>
      <div class="d-flex justify-content-center mt-3">
        <div class="bg3 ">
          <h5 class="mx-5 mt-1 fw-bold">CSS</h5>
        </div>
        <div class="bg3 ms-5">
          <h5 class="mx-5 mt-1 fw-bold">HTML</h5>
        </div>
        <div class="bg3 ms-5">
          <h5 class="mx-4 mt-1 fw-bold">Javascript</h5>
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
            <li class="my-0"><a href="#" class="text-dark">Register</a></li>
            <li class="my-0"><a href="#" class="text-dark">Job Search</a></li>
            <li class="my-0"><a href="#" class="text-dark">How it works</a></li>
          </ul>
        </div>

        <div class="col-md-2 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold">EMPLOYER</h6>
          <ul class="list-unstyled">
            <li class="my-0"><a href="#" class="text-dark">Register</a></li>
            <li class="my-0"><a href="#" class="text-dark">Post a job</a></li>
            <li class="my-0"><a href="#" class="text-dark">How it works</a></li>
          </ul>
        </div>

        <div class="col-md-2 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold">OTHER INFORMATIONS</h6>
          <ul class="list-unstyled">
            <li class="my-0"></i> <a href="#aboutus" class="text-dark">About us</a></li>
            <li class="my-0"></i> <a href="#faq" class="text-dark">FAQ</a></li>
            <li class="my-0"></i> <a href="termsandcondition.php" class="text-dark">Terms and conditions</a></li>
            <li class="my-0"></i><a href="privacypolicy.php" class="text-dark">Privacy Policy</a></li>
            <li class="my-0"></i> <a href="termsofuse.php" class="text-dark">Terms of use</a></li>
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
</body>

</html>