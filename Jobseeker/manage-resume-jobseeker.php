<?php include_once 'include/login_session.php'; ?>
<!doctype html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,455;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!-- jQuery cdn link below -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/manage-resume-jobseeker.css">
    <title>Manage Resume Jobseeker</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container-fluid"> 
            <a class="navbar-brand me-1" href="#"></a>
            <img class="logo" src="image/light-logo.png" onclick="window.location.href='applicant-profile.php'" alt="Job Portal Logo" width="100" height="70"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="d-flex form1">      
                <input class="form-control icon" type="search" placeholder="Search for a job title" aria-label="Search">
                <button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
            </form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-4">
                        <a class="nav-link text-dark message active" aria-current="page" href="message-employer.php">MESSAGE</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link text-dark about active" href="postajob.php">POST A JOB</a>
                    </li>             
                    <li class="nav-item account dropdown active">
                    <a class="nav-link text-dark dropdown-toggle account active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img id="pfp" class="image" src="" alt="Profile" width="30" height="30" style="border-radius: 100px; object-fit: cover;"> ACCOUNT</a>
              <ul class="dropdown-menu account-drop drop" aria-labelledby="navbarDropdown">
                <li><a id="name" class="dropdown-item text-dark name" href="applicant-profile.php"></a></li>
                        <li><hr class="dropdown-divider bg-white"></li>
                        <li><a class="dropdown-item text-dark text-start" href="manage-account-1.php"><img class="ms-3" src="image/edit-profile-black.png" alt=""> Edit Profile</a></li>
                        <li><a class="dropdown-item text-dark text-start" href="manage-account-2.php"><img class="ms-3" src="image/change-pass-black.png" alt=""> Change Password</a></li>
                        <li><a class="dropdown-item text-dark text-start" href="bookmark-job.php"><img class="ms-3" src="image/job-management.png" alt=""> Job Management</a></li>
                        <li><a class="dropdown-item text-dark text-start" href="jobapplication.php"><img class="ms-3" src="image/job-applicant-black.png" alt=""> Job Applications</a></li>
                        <li><a class="dropdown-item text-dark text-start" href="resume.php"><img class="ms-3" src="image/manage resume.png" alt=""> Manage Resume</a></li>
                        <li><a class="dropdown-item logout text-dark text-start" href="../logout.php"><img class="ms-3" src="image/logout-black.png" alt=""> LOGOUT</a></li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>
    <div class="container-responsive p-md-5 mt-4" id="container">
        <form id="main-form">
            <div class=" col-auto text-center">
                <section class="type p-1">
                    <div class="bg-color-header">
                       
                        <h2 class="text-start"><b>MANAGE YOUR RESUME</b>
                            <form class="d-flex mt-4 form2">
                                <input class="form-control icon1" type="search" placeholder="Search for a message" aria-label="Search">
                                <button class="btn text-dark fw-bold search1" type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </h2>
                        <div class="table-responsive" id="no-more-tables">
                            <table class="table basic-table table-headers table table-hover">
                                <thead class="text-dark text-center" id="title-sub">
                                    <tr>
                                        <th>Name</th>
                                        <th>View Resume</th>
                                        <th>Date Submit</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-dark" id="body-h" >
                                    <tr>
                                        <td  data-title="Application Name"><b>Kimberly Ann S. Flores</b></td>                                  
                                        <td data-title="View Resumek"><i class="fa-brands fa-google-drive"></i><b>Gdrive link</b></td>
                                        <td data-title="Date Applied"><b>5/04/2022</b></td>
                                        <td data-title="Action"><button  class="btn btn-info" type="button" id="btn-info">Edit</button>
                                        <button class="btn btn-info" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash-fill"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td  data-title="Application Name"><b>Kimberly Ann S. Flores</b></td>
                                        <td data-title="View Resume"><i class="fa-brands fa-google-drive"></i><b>Gdrive link</b></td>
                                        <td data-title="Date Applied"><b>5/04/2022</b></td>
                                        <td data-title="Action"><button  class="btn btn-info" type="button" id="btn-info">Edit</button>
                                        <button class="btn btn-info" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash-fill"></i></button></td>
                                    </tr>
                                </tbody>  
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <nav aria-label="Page navigation example">
                <div class="entries">
                    </span>Show 1 to 3 of 3 entries</span>
                </div>
                <ul class="pagination">
                    <li class="page-item"><a class="page-link next text-dark" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link num text-dark" href="#">1</a></li>
                    <li class="page-item"><a class="page-link num text-dark" href="#">2</a></li>
                    <li class="page-item"><a class="page-link num text-dark" href="#">3</a></li>
                    <li class="page-item"><a class="page-link next text-dark" href="#">Next</a></li>
                </ul>
            </nav>   
        </form>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title ms-3" id="exampleModalLabel">Are you sure you want to reject this applicant?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <button type="button" class="btn btn-success btn1">Yes</button>
                    <button type="button" class="btn btn-danger btn1" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/pfp.js"></script>
</html>