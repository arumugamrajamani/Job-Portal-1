<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/manage-account-2.css">
  <title>Manage account 2</title>
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
      <form class="d-flex">
        <input class="form-control searchbar" type="search" placeholder="Search for a job title" aria-label="Search">
        <button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
      </form>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item me-0">
            <a class="nav-link text-dark message active" aria-current="page" href="message-jobseekers.php">MESSAGE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark about active text-center" href="searchjob.php">JOB BOARD</a>
          </li>
          <li class="nav-item account dropdown active">
            <a class="nav-link text-darkdropdown-toggle account active" href="#" id="navbarDropdown"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="image" src="image/profileicon1.png" alt="Profile" width="50" height="30"> ACCOUNT</a>
            <ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-light text-start" href="applicant-profile.php"><i class="bi bi-person-fill"></i> Full Name</a></li>
              <li>
                <hr class="dropdown-divider bg-white">
              </li>
              <li><a class="dropdown-item text-light text-start" href="manage-account-1.php"><img src="image/edit-profile.png" alt=""> Edit Profile</a></li>
              <li><a class="dropdown-item text-light text-start" href="manage-account-2.php"><img src="image/change pass.png" alt=""> Change Password</a></li>
              <li><a class="dropdown-item text-light text-start" href="jobapplication.php"><img src="image/job application.png" alt=""> Job Applications</a></li>
              <li><a class="dropdown-item text-light text-start" href="bookmark-job.php"><img src="image/bookmark.png" alt=""> Bookmarked jobs</a></li>
              <li><a class="dropdown-item text-light text-start" href="resume.php"><img src="image/manage resume.png" alt=""> Manage Resume</a></li>
              <li><a class="dropdown-item logout text-light text-start" href=""><img src="image/sign out.png" alt=""> LOGOUT</a></li>
            </ul>
        </ul>
      </div>
    </div>
  </nav><br><br>
  <div class="container contain"><br>
      <div class="container block align-items-center text-center">
        <h4 class="p-3 shadow-sm fw-bold head">Change Your Password</h4>
        <div class="bg-white mt-3 cons">
          <div class=" space">
            <span class="icon" onclick="showHide()">
              <i class='bi bi-eye-slash icon' aria-hidden="true"></i>
              <i class='bi bi-eye icon'></i>
            </span>
            <label class="fw-bold mt-3 box">Current Password:</label>
            <input type="password" id="currentpassword" class="Bcolor"><br><br>
          </div>
          <div class="mt-3 boxs">
            <span class="icon1" onclick="showHide1()">
              <i class='bi bi-eye-slash icon1' aria-hidden="true"></i>
              <i class='bi bi-eye icon1'></i>
            </span>
            <label class="fw-bold mt-3 box">New Password:</label>
            <input type="password" id="newpassword" class="Bcolor">
            <label class="characters text-danger"> Password must be atleast 8 characters</label>
        
          </div>
          <div class=" mt-3 boxs1">
            <span class="icon2" onclick="showHide2()">
              <i class='bi bi-eye-slash icon2' aria-hidden="true"></i>
              <i class='bi bi-eye icon2'></i>
            </span>
            <label class="fw-bold mt-3 box1">Confirm Password:</label>
            <input type="password" id="confirmpassword" class="Bcolor">
          </div>
          <label class="characters text-danger"> Password must be atleast 8 characters</label><br><br><br>
          <button type="button" class="fw-bold btn3">Save</button>
          <button type="button" class="fw-bold btn3">Cancel</button>
        </div>
      </div>
  </div> 
      <script src="js/manage-account-2.js"></script>
</body>

</html>