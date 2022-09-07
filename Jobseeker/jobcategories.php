<?php include_once 'include/header.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <!-- jQuery cdn link below -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/jobcategories.css">
  <title>Job Categories</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
      <a class="navbar-brand me-1" href="#"></a>
      <img src="image/light-logo.png" onclick="window.location.href='applicant-profile.php'" alt="Job Portal Logo" width="100" height="70"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="d-flex searches">
        <input class="form-control icon" type="search" placeholder="Search for a job title" aria-label="Search">
        <button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
      </form>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item me-0 mes"><a class="nav-link text-dark message  fw-bold navs" aria-current="page" href="message-jobseekers.php">MESSAGE</a></li>
          <li class="nav-item fw-bold"><a class="nav-link text-dark about text-center" href="jobcategories.php" id="color">JOB BOARD</a></li>
          <li class="nav-item fw-bold"><a class="nav-link text-dark message  fw-bold navs" href="searchjob.php">AVAILABLE JOBS</a></li>
          <li class="nav-item account dropdown ">
            <a class="nav-link text-dark fw-bold dropdown-toggle account" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img id="pfp" class="image" src="" alt="Profile" width="30" height="30" style="border-radius: 100px; object-fit: cover;"> ACCOUNT</a>
              <ul class="dropdown-menu account-drop drop" aria-labelledby="navbarDropdown">
                <li><a id="name" class="dropdown-item text-start name" href="applicant-profile.php"></a></li>
                <li><hr class="dropdown-divider bg-white"></li>
                <li><a class="dropdown-item text-start Eprofile" href="manage-account-1.php"><img src="image/edit-profile-black.png" alt="" class="l1"> Edit Profile</a></li>
                <li><a class="dropdown-item text-start" href="manage-account-2.php"><img src="image/change-pass-black.png" alt="" class="l1"> Change Password</a></li>
                <li><a class="dropdown-item text-start" href="bookmark-job.php"><img src="image/job-management.png" alt="" class="l1"> Job Management</a></li>
                <li><a class="dropdown-item text-start" href="jobapplication.php"><img src="image/job-applicant-black.png" alt="" class="l1"> Job Applications</a></li>
                <li><a class="dropdown-item text-start" href="resume.php"><img src="image/manage resume.png" alt="" class="l1"> Manage Resume</a></li>
                <li><a class="dropdown-item logout text-start" href="../logout.php"><img src="image/logout-black.png" alt="" class="l1"> LOGOUT</a></li>
              </ul>
        </ul>
      </div>
    </div>
  </nav><br>

  <div class="container"><br><br>
    <h1 class="text-center">JOB CATEGORIES</h1><br>
    <div class="slideshow-container">
      <div class="mySlides1 w3-animate-right" id="mySlides1">
        <div class="numbertext" hidden>1 / 3</div>
          <img src="image/pic0.png" class="pic3" id="imgs">
        <div class="text">FRONT-END DEVELOPER</div>
      </div>
      <div class="mySlides1 w3-animate-right" id="mySlides1">
        <div class="numbertext" hidden>2 / 3</div>
          <img src="image/pic01.png" class="pic2" id="imgs">
        <div class="text">BACK-END DEVELOPER</div>
      </div>
      <div class="mySlides1 w3-animate-right" id="mySlides1">
        <div class="numbertext" hidden>3 / 3</div>
          <img src="image/pic02.png" class="pic2" id="imgs">
        <div class="text">TECHNICIANS</div>
      </div>
      <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
      <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
    </div><br>
    <div class="text-center dots">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>

    </div><br><br>
    <h1 class="text-center">URGENT HIRINGS</h1><br>
    <div class="slideshow-container slide">
      <div class="mySlides2 w3-animate-right" id="mySlides2">
        <div class="numbertext">1 / 3</div>
          <img src="image/imageedit_14_8632410575 1.png" class="pic2" id="imgs">
      </div>

      <div class="mySlides2 w3-animate-right" id="mySlides2">
        <div class="numbertext">2 / 3</div>
          <img src="image/bg3.png" class="pic2" id="imgs">
      </div>
      <div class="mySlides2 w3-animate-right">
        <div class="numbertext">3 / 3</div>
          <img src="image/Castillo, Marc John B 2.png" class="pic2" id="imgs" id="mySlides2">
      </div>
  
      <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
    </div><br>
    <div class="text-center dots">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div><br><br>
    <h1 class="text-center">FEATURED COMPANIES</h1>
    <div class="grid"> 
      <div class="col" id="img1" >
        <img class="c1" src="image/image1.png" alt="">  
      </div>
      <div class="col" id="img1" >
        <img class="c1" src="image/image2.png" alt=""> 
      </div>
      <div class="col" id="img1">
        <img class="c1" src="image/image3.png" alt="">
      </div>
      <div class="col" id="img1">
        <img class="c1" src="image/image4.png" alt="">
      </div>
      <div class="col" id="img1">
        <img class="c1" src="image/image5.png" alt="">
      </div>
      <div class="col" id="img1">
        <img class="c1" src="image/image6.png" alt="">
      </div>
      <div class="col" id="img1">
        <img class="c1" src="image/image7.png" alt="">
      </div>
      <div class="col" id="img1">
        <img class="c1" src="image/image8.png" alt="">
      </div>
    </div>
  </div>
  <script>
    var slideIndex = [1,1];
    var slideId = ["mySlides1", "mySlides2"]
    showSlides(1, 0);
    showSlides(1, 1);
    
    function plusSlides(n, no) {
      showSlides(slideIndex[no] += n, no);
    }
    
    function showSlides(n, no) {
      var i;
      var x = document.getElementsByClassName(slideId[no]);
      if (n > x.length) {slideIndex[no] = 1}    
      if (n < 1) {slideIndex[no] = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      x[slideIndex[no]-1].style.display = "block";  
    }
  </script>
  <script src="js/pfp.js"></script>
</body>
</html>