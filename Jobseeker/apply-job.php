<?php include_once 'include/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/apply-job.css">
  <title>Apply for this job</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand me-1" href="#"></a>
      <img src="image/flogo.png" onclick="window.location.href='applicant-profile.php'" alt="Job Portal Logo" width="100" height="70"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="d-flex searchbar">
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
          <li class="nav-item account dropdown active">
            <a class="nav-link text-dark fw-bold dropdown-toggle account active" href="#" id="navbarDropdown"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="image" src="image/profileicon1.png" alt="Profile" width="50" height="30"> ACCOUNT</a>
            <ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-light" href="applicant-profile.php">FULL NAME</a></li>
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
  <button type="button" class="arrow btn btn-light"><img class="flat6" src="image/flat6.png" alt=""></button>
  <div class="container p-md-5 mt-4">
    <div class="text-center title">
      <h1>Job Title: <br> Administrative Assistant</h1>
    </div>
    <div class="block mt-2">
      <div class="d-flex left"><img src="image/s1.png" alt="Bag" height="50" class="pic">
        <h6 class="ms-2 fw-bold">Type: <p>FULL-TIME</p></h6>
        <div class="d-flex left"><img src="image/image 39.png" alt="Money" height="50" class="pic">
          <h6 class="ms-2 fw-bold">Salary: <p>TBA</p></h6>
          <div class="d-flex left"><img src="image/image 40.png" alt="Calendar" height="50" class="pic">
            <h6 class="ms-2 fw-bold">Date Posted: <p>05/05/2022</p></h6>
          </div>
        </div>
      </div>
    </div><br>
    <div class="flex-container">
      <form>
        <div class="text-center subject">
          <h2>SUBJECT*</h2>
        </div>
        <div class="mt-3">
          <input class="input" type="text" id="message" placeholder="Message*" name="message"><br><br>
          <input class="input" type="text" id="contactinfo" placeholder="Contact Info*" name="contact info*">
        </div>
        <div class="resume-link">
          <input class="mt-3 inputs" type="text" placeholder="GDrive Link*">
          <div class="ms-5 fw-bold">Resume Link*</div>
      </div>

        <div>
          <script>var clicks = 0;
            function onClick() {
              clicks += 1;
              document.getElementById("clicks").innerHTML = clicks;
            }; 
          </script>
          <button class="btnA" type="button" onClick="onClick()">APPLY NOW</button>
          <div class="col-sm-9 number">
            <input type="text" placeholder="Number of applications sent today"> <a class="zero" id="clicks">0</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>