<?php include_once 'include/login_session.php'; ?>
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/bookmark-job.css">
   <!-- jQuery cdn link below -->
   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Toast CDN for functionality of toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Toast CDN for design of toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>Bookmark</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container-fluid">
      <a class="navbar-brand me-1" href="#"></a>
      <img src="image/light-logo.png" onclick="window.location.href='applicant-profile.php'" alt="Job Portal Logo" width="100" height="70">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
      <form class="d-flex">
        <input class="form-control icon" type="search" placeholder="Search for a job title" aria-label="Search">
        <button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
      </form>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item me-0">
            <a class="nav-link  message active " aria-current="page" href="message-jobseekers.php">MESSAGE</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  about active text-center" href="jobcategories.php">JOB BOARD</a>
            </li>
          <li class="nav-item">
            <a class="nav-link text-dark about active text-center" href="searchjob.php">AVAILABLE JOBS</a>
          </li>
          <li class="nav-item account dropdown active">
            <a class="nav-link dropdown-toggle account active" href="#" id="navbarDropdown"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img id="profile_picture" class="image" src="../storage/531a685c0630bad57340b1498a19cc86.jpeg" alt="Profile" width="30" height="30" style="border-radius: 100px; object-fit: cover;"> ACCOUNT</a>
              <ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-start" href="applicant-profile.php"> Full Name</a></li>
                <li>
                  <hr class="dropdown-divider bg-black">
                </li>
                <li><a class="dropdown-item text-start" href="manage-account-1.php"> Edit Profile</a></li>
                <li><a class="dropdown-item text-start" href="manage-account-2.php"> Change Password</a></li>
                <li><a class="dropdown-item text-start" href="jobapplication.php"> Job Applications</a></li>
                <li><a class="dropdown-item text-start" href="bookmark-job.php"> Bookmarked jobs</a></li>
                <li><a class="dropdown-item text-start" href="resume.php"> Manage Resume</a></li>
                <li><a class="dropdown-item logout text-start" href="../logout.php"> LOGOUT</a></li>
              </ul>
              <li>
                    <div class = 'toggle-switch'>
                        <label class="lab">
                            <input class="dar" type = 'checkbox' onclick="toggleImage()">
                            <span id="icon2" class = 'slider'>
                            </span>
                        </label>
                    </div>
                </div>
            </li>
          </ul>
      </div>
    </div>
  </nav>
<div class="container p-md-5 mt-4" id="container">
<form id="main-form">
    <div class=" col-auto cols">
    <section class="type p-1">
        <div class="bg-color-header">
        <h3 class="book"><b>BOOKMARKED JOBS</b><i class="fa-solid fa-bookmark bookmark"></i>
            <div class="input-group">
            <div div class="form-outline">
                <input type="search" id="form1" placeholder="Search here" class="form-control"/>
            </div>
            <button type="button" class="btn2">
                <i class="bi bi-search"></i>
            </button>
            </div>
        </h3>
        <div class="table-responsive tables" id="no-more-tables">
            <table class="table basic-table table-headers table table-hover">
            <thead class="text-dark text-center" id="title-sub">
                <tr>
                <th>Job Title</th>
                <th>Job Description</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-dark text-center" id="body-h">
                <!-- <tr class="tr1">
                <td data-title="Job Title">Administrative Assistant</td>
                <td data-title="Job Description" class="descript">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Velit accusamus harum cupiditate quisquam quae dolorem non voluptatem minus.
                </td>
                <td data-title="Action" class="action"><button class="btn shadow1" type="button"
                    id="btn-info">APPLY</button>
                    <button class="btn btn-dark btn-sm rounded-circle" type="button" data-toggle="tooltip"
                    data-placement="top" title="Delete"><i class="bi bi-trash"></i></button>
                </td>
                </tr>
            </tbody>
            <tbody class="bg-light text-dark text-center" id="body-h">
                <tr class="tr1">
                <td data-title="Job Title">Voice Over Artist</td>
                <td data-title="Job Description" class="descript">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Officia tenetur quis excepturi, commodi accusamus ad facere deserunt nulla quam
                    ratione?</td>
                <td data-title="Action" class="action"><button class="btn shadow1" type="button"
                    id="btn-info">APPLY</button>
                    <button class="btn btn-dark btn-sm rounded-circle" type="button" data-toggle="tooltip"
                    data-placement="top" title="Delete"><i class="bi bi-trash"></i></button>
                </td>
                </tr>
            </tbody>
            <tbody class="bg-light text-dark text-center" id="body-h">
                <tr class="tr1">
                <td data-title="Job Title">Youtube Video Script Writer</td>
                <td data-title="Job Description" class="descript">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Minus dolorum consectetur, animi explicabo libero recusandae vero blanditiis
                    dicta porro!</td>
                <td data-title="Action" class="action"><button class="btn shadow1" type="button"
                    id="btn-info">APPLY</button>
                    <button class="btn btn-dark btn-sm rounded-circle" type="button" data-toggle="tooltip"
                    data-placement="top" title="Delete"><i class="bi bi-trash"></i></button>
                </td>
                </tr> -->
            </tbody>
            </table>
            <nav aria-label="Page navigation example">
            <div class="entries">
                </span>Show 1 to 3 of 3 entries</span>
            </div>
            <ul class="pagination justify-content-center">
                <li class="page-item">
                <a class="page-link next text-dark" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link num text-dark" href="#">1</a></li>
                <li class="page-item">
                <a class="page-link next text-dark" href="#">Next</a>
                </li>
            </ul>
            </nav>
        </div>
        </div>
    </section>
    </div>
</form>
</div>
<div class="modal fade" id="modal-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title ms-5" id="exampleModalLabel">Delete Bookmark?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="delete modal-body">
                  <button type="button" id="delete-yes" class="yes-no btn btn-success">Yes</button>
                  <button type="button" class="yes-no btn btn-danger" data-bs-dismiss="modal">No</button>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="modal-apply" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title ms-5" id="exampleModalLabel">Apply for the job?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="delete modal-body">
                  <button type="button" id="apply-yes" class="yes-no btn btn-success">Yes</button>
                  <button type="button" class="yes-no btn btn-danger" data-bs-dismiss="modal">No</button>
              </div>
          </div>
      </div>
  </div>
  </div>
<script src="js/bookmark-job.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var icon2 = document.getElementById("icon2");

icon2.onclick = function() {
    document.body.classList.toggle("dark-theme")
}
function toggleImage() {
        imgsrc= document.getElementById("logo").src;
        if (imgsrc.indexOf("image/light-logo.png") !=-1){
          document.getElementById("logo").src = "image/Techployment (7) 1.png";
        }
        else{
          document.getElementById("logo").src = "image/light-logo.png";
        }
    }
</script>
</body>
</php>