<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/change-password.css">
    <!-- jQuery cdn link below -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Sweet alert cdn link below -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>Change password</title>
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
            <a class="nav-link text-dark message active" aria-current="page" href="message-employer.php">MESSAGE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark about active text-center" href="searchjob.php">JOB BOARD</a>
          </li>
          <li class="nav-item account dropdown active">
            <a class="nav-link text-darkdropdown-toggle account active" href="#" id="navbarDropdown"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="image" src="image/profileicon1.png" alt="Profile" width="50" height="30"> ACCOUNT</a>
            <ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
              </li>
              <li><a class="dropdown-item text-light menudrop" href="company-profile.php">MY ACCOUNT</a></li>
                        <li><hr class="dropdown-divider bg-white"></li>
                        <li><a class="dropdown-item text-light" href="jobmanage.php">JOB MANAGEMENT</a></li>
                        <li><a class="dropdown-item text-light" href="manage-applicant-resume.php">MANAGE RESUME</a></li>
                        <li><a class="dropdown-item text-light" href="manage-account-profile.php">MANAGE ACCOUNT PROFILE</a></li>
                        <li><a class="dropdown-item logout text-light" href="../logout.php">LOGOUT</a></li>
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
        
          </div>
          <div class=" mt-3 boxs1">
            <span class="icon2" onclick="showHide2()">
              <i class='bi bi-eye-slash icon2' aria-hidden="true"></i>
              <i class='bi bi-eye icon2'></i>
            </span>
            <label class="fw-bold mt-3 box1">Confirm Password:</label>
            <input type="password" id="confirmpassword" class="Bcolor">
          </div>
          <label class="characters text-danger"></label><br><br><br>
          <button type="button" class=" save fw-bold btn3" title="Save password" data-bs-toggle="modal" data-bs-target="#modal-save">Save</button>
          <button type="button" class="fw-bold btn3">Cancel</button>
        </div>
      </div>
  </div> 
  <div class="modal fade" id="modal-save" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ms-2" id="exampleModalLabel">Are you sure you want to change your password?</h5>
            </div>
            <div class="delete modal-body">
                <button type="button" id="confirm" class="yes-no btn btn-success">Yes</button>
                <button type="button" class="yes-no btn btn-danger" data-bs-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>
      <script src="js/change-password.js"></script>
</body>

</html>