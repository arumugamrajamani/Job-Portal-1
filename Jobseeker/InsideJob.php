<?php include_once 'include/login_session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- jQuery cdn link below -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <title>Inside the Job</title>
  <link rel="stylesheet" href="css/InsideJob.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-0" id="nav0">
        <div class="container-fluid" id="inner">
          <a class="navbar-brand me-1" href="#"></a>
          <img class="img" src="image/Techployment (7) 1.png" onclick="window.location.href='applicant-profile.php'" alt="Job Portal Logo" width="95" height="90" id="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="image/selection.png" alt="" width="40px" height="50px" id="Selection">
          </button>
          <form class="d-flex searchbar" id="sea">
            <input class="form-control icon" type="search" placeholder="Search for a job title" aria-label="Search">
            <button class="btn text-light fw-bold search" type="submit"><img src="image/bx-search.png" alt="Search" width="24" class="bts"></button>
          </form>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item1 me-0">
                <a class="nav-link text-light message active fw-bold" aria-current="page" href="message-jobseekers.php">MESSAGE</a>
              </li>
              <li class="nav-item1 fw-bold">
                <a class="nav-link text-light about active" href="jobcategories.php">JOB BOARD</a>
              </li>
              <li class="nav-item account dropdown active">
                <a class="nav-link text-light fw-bold dropdown-toggle account active" href="#" id="navbarDropdown"
                  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img id="pfp" class="image" src="" alt="Profile" width="30" height="30" style="border-radius: 100px; object-fit: cover;"> ACCOUNT</a>
                <ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
                  <li><a id="name" class="dropdown-item text-light" href="applicant-profile.php"></a></li>
                  <li>
                    <hr class="dropdown-divider bg-white">
                  </li>
                  <li><a class="dropdown-item text-light" href="manage-account-1.php">Edit Profile</a></li>
                  <li><a class="dropdown-item text-light" href="manage-account-2.php">Change Password</a></li>
                  <li><a class="dropdown-item text-light" href="jobapplication.php">Job Applications</a></li>
                  <li><a class="dropdown-item text-light" href="bookmark-job.php">Bookmark Jobs</a></li>
                  <li><a class="dropdown-item text-light" href="manage-resume-jobseeker.php">Manage Resume</a></li>
                  <li><a class="dropdown-item logout text-light" id="logout-id">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </div>
    </nav>

    <div class="swits">
    <div class = 'toggle-switch'>
      <label class="lab">
        <input class="dar" type = 'checkbox' onclick="toggleImage()">
        <span id="icon2" class = 'slider'></span>
      </label>
    </div>
    </div>
    <div class="container shadow-lg" id="content">
      <div class="container-fluid" id="ITS">
        <div class="support">
          <h4><b id="jobTitle"></h4></b>
          <p id="companyName"> </p>
          <p id="address"></p>
        </div>
      </div>
      <div class="container-fluid" id="sal">
        <div class="salary">
          <h4><b id="salaryy"></h4></b>
          <h5>JOB TYPE</h5>
        <p id="employment"></p>
        </div>  
      </div>
      <div class="container-fluid" id="job">
        <div class="job desc">
          <h5><b>JOB DESCRIPTION</b> (Includes skill requirements/text type)</h5>
          <p><u id="description"></u></p>
        </div>
      </div>
      <div class="container-fluid" id="hire">
        <div class="hiring">
          <h4><b>HIRING INSIGHTS</h4></b>
          <p>Hiring 1 candidate for this role</p>
        </div>
      </div>
      <div class="container-fluid" id="act">
        <div class="activity">
          <h4><b>JOB ACTIVITY</b></h4>
          <p>Employer reviewed job/date</p>
          <h5>Date Posted</h5>
          <h6><b id="datePosted"></b></h6>
        </div>
      </div>
    </div>
    <div class="container shadow-lg" id="content1">
      <div class="container-fluid" id="app">
        <div class="apply now">
          <h3><b id="jobTitle1"></b></h3>
          <p id="companyName1"></p>
         <p id="address1"></p>
        </div>
      </div><br>
      <div class="container-fluid" id="sal1">
        <div class="salary1">
          <h4><b id="salaryy1"></b></h4>
          <p>You must qualified to this position</p>
          <div class="butt">
            <button id="applyJob" class="logapp appnow" style="text-decoration: none;"></button>
            <button id="bookmarkJob" class="markb">
              <a><img id="bmark" src="image/Vector.png" alt=""></a>
            </button>
          </div>
        </div>
      </div>
    </div><!-- <a class="appnow" onclick="apply()" style="text-decoration: none;">APPLY NOW</a> -->
    <div class="container shadow-lg" id="content2">
      <div class="container-fluid" id="req">
        <div class="requirements">
          <ul id="bullet"></ul>
          <h4><b>SKILL REQUIREMENTS</b></h4><br>
          <p>??? Expert knowledge in operating systems<br>
          ??? Expert knowledge in working system<br>
          ??? Ability to prioritize your workload<br>
          ??? Capacity to clearly explain a technical problem</p>
        </div>
      </div>
    </div>  

    
    <script>
      <?php 
        $postId = isset($_GET['postId']) ? $_GET['postId'] : '';  
      ?>

      var postId = "<?= $postId ?>";

      var icon2 = document.getElementById("icon2")
  
      icon2.onclick = function() {
        document.body.classList.toggle("dark-theme");
      }
      
      function toggleImage(){
        imgsrc= document.getElementById("logo").src;
        if (imgsrc.indexOf("image/light-logo.png") !=-1){
          document.getElementById("logo").src = "image/Techployment (7) 1.png";
        }
        else{
          document.getElementById("logo").src = "image/light-logo.png";
        }
        imgsrc= document.getElementById("bmark").src;
        if (imgsrc.indexOf("image/Vector.png") !=-1){
          document.getElementById("bmark").src = "image/Vectorlight.png";
        }
        else{
          document.getElementById("bmark").src = "image/Vector.png";
        }
        imgsrc= document.getElementById("Selection").src;
        if (imgsrc.indexOf("image/selection.png") !=-1){
          document.getElementById("Selection").src = "image/icons8-menu-60.png";
        }
        else{
          document.getElementById("Selection").src = "image/selection.png";
        }
      }
    </script>
    <script src="js/insidejob.js"></script>
    <script src="js/pfp.js"></script>
</body>
</html>