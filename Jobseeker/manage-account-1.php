<?php include_once 'include/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/manage-account-1.css">
   <!-- jQuery cdn link below -->
   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Toast CDN for functionality of toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Manage account</title>
  <!-- sweet alert script -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
      <a class="navbar-brand me-1" href="#"></a>
      <img src="image/flogo.png" onclick="window.location.href='applicant-profile.php'" alt="Job Portal Logo" width="100" height="70"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="d-flex">
        <input class="form-control icon" type="search" placeholder="Search for a job title" aria-label="Search">
        <button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
      </form>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item me-0"> <a class="nav-link text-dark message active mes" aria-current="page" href="message-jobseekers.php">MESSAGE</a></li>
          <li class="nav-item"><a class="nav-link text-dark about active text-center" href="jobcategories.php">JOB BOARD</a></li>
          <li class="nav-item"><a class="nav-link text-dark about active text-center" href="searchjob.php">AVAILABLE JOBS</a></li>
          <li class="nav-item account dropdown active">
            <a class="nav-link text-dark  dropdown-toggle account active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img id="pfp" class="image" src="" alt="Profile" width="30" height="30" style="border-radius: 100px; object-fit: cover;"> ACCOUNT</a>
              <ul class="dropdown-menu account-drop drop" aria-labelledby="navbarDropdown">
                <li><a id="name" class="dropdown-item text-light text-start name" href="applicant-profile.php"></a></li>
              <li><hr class="dropdown-divider bg-white"></li>
              <li><a class="dropdown-item text-light text-start" href="manage-account-1.php"><img src="image/edit-profile.png" alt=""> Edit Profile</a></li>
              <li><a class="dropdown-item text-light text-start" href="manage-account-2.php"><img src="image/change pass.png" alt=""> Change Password</a></li>
              <li><a class="dropdown-item text-light text-start" href="jobapplication.php"><img src="image/job application.png" alt=""> Job Applications</a></li>
              <li><a class="dropdown-item text-light text-start" href="bookmark-job.php"><img src="image/bookmark.png" alt=""> Bookmarked jobs</a></li>
              <li><a class="dropdown-item text-light text-start" href="resume.php"><img src="image/manage resume.png" alt=""> Manage Resume</a></li>
              <li><a class="dropdown-item logout text-light text-start" href="../logout.php"><img src="image/sign out.png" alt=""> LOGOUT</a></li>
            </ul>
        </ul>
      </div>
    </div>
  </nav><br>

  <br>

  <div class="container-fluid contain">
    <br><br>
      <div class=" d-flex col-8 ms-5 shadow contain2">
        <form>
          <div class="text-center head">
            <h1>EDIT PROFILE INFORMATION</h1>
          </div>
          <div class="mb-3 mt-5 ms-4 row">
            <label for="name" class="col-sm-3 col-form-label box">Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control Bcolor" id="fullname">
            </div>
          </div>
          <div class="mb-3 mt-4  ms-4 row">
            <label for="birthday" class="col-sm-3 col-form-label box">Birthday</label>
            <div class="col-sm-8">
              <input type="text" class="form-control Bcolor" id="birthday">
            </div>
          </div>
          <div class="mb-3 mt-4 ms-4 row">
            <label for="address" class="col-sm-3 col-form-label box">Address</label>
            <div class="col-sm-8">
              <input type="text" class="form-control Bcolor" id="address">
            </div>
          </div>
          <div class="mb-3 mt-4 ms-4 row">
            <label for="email address" class="col-sm-3 col-form-label box1">Email Address</label>
            <div class="col-sm-8">
              <input type="email" class="form-control Bcolor" id="email">
            </div>
          </div>
          <div class="mb-3 mt-4 ms-4 row">
            <label for="contact number" class="col-sm-3 col-form-label box1">Contact Number</label>
            <div class="col-sm-8">
              <input type="number" class="form-control Bcolor" id="mobile_number">
            </div>
          </div>
          <div class="text-center text-dark mt-5">
            <button class="text-dark px-5 btn3" type="button" id="update-profile">UPDATE PROFILE</button>
            <button class="text-dark px-5 btn4" type="button" id="cancel"><b>CANCEL</b></button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="js/manage-account-1.js"></script>
  <script src="js/pfp.js"></script>
</body>

</html>