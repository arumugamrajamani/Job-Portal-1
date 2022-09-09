<?php include_once 'include/header.php'; ?>
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
    <link rel="stylesheet" href="css/manage-applicant-resume.css">
     <!-- Toast CDN for functionality of toastr -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Toast CDN for design of toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Manage Applicant Resume</title>
</head>

<!-- Navigation bar -->
<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container-fluid"> 
            <a class="navbar-brand me-1" href="#"></a>
            <img class="logo" onclick="window.location.href='company-profile.php'" src="image/light-logo.png" alt="Job Portal Logo" width="100" height="70"></a>
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
                    <img id="pfp" class="image" style="border-radius: 100px; object-fit: cover;" src="" alt="Profile" width="30" height="30"> ACCOUNT</a>
                    <ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
						<li><a id="name" class="dropdown-item text-dark text-start" href="company-profile.php"><img alt=""></a></li>
                        <li><hr class="dropdown-divider bg-white"></li>
                        <li><a class="dropdown-item text-dark text-start" href="manage-account-profile.php"><img class="ms-3" src="image/edit-profile-black.png" alt=""> Edit Profile</a></li>
                        <li><a class="dropdown-item text-dark text-start" href="change-password.php"><img class="ms-3" src="image/change-pass-black.png" alt=""> Change Password</a></li>
                        <li><a class="dropdown-item text-dark text-start" href="jobmanage.php"><img class="ms-3" src="image/job-management.png" alt=""> Job Management</a></li>
                        <li><a class="dropdown-item text-dark text-start" href="manage-applicant-resume.php"><img class="ms-3" src="image/manage resume.png" alt=""> Manage Resume</a></li>
                        <li><a class="dropdown-item logout text-dark text-start" href="../logout.php"><img class="ms-3" src="image/logout-black.png" alt=""> LOGOUT</a></li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>
    <!-- Manage Resume Table -->
    <div class="container-responsive p-md-5 mt-4" id="container">
        <form id="main-form">
            <div class=" col-auto text-center">
                <section class="type p-1">
                    <div class="bg-color-header">
                       
                        <h2 class="text-start"><b>MANAGE APPLICATION'S RESUME</b>
                            <form class="d-flex mt-4 form2" id = 'main'>
                                <input class="form-control icon1" id="search" placeholder="Search for a message" aria-label="Search">
                                <button class="btn text-dark fw-bold search1" type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </h2>
                        <div class="table-responsive" id="no-more-tables">
                            <table class="table basic-table table-headers table table-hover">
                                <thead class="text-dark text-center" id="title-sub">
                                    <tr>
                                        <th>Applicant Name</th>
                                        <th>Resume</th>
                                        <th>Job Applied</th>
                                        <th>Date Applied</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-dark" id="body-h" >
                                    <!-- <tr>
                                        <td  data-title="Applicant Name"><b>Applicant's Full name</b></td>  
                                        <td  data-title="Resume"><b>Resume</b></td>                                
                                        <td data-title="Job Applied"><b>Job Applied</b></td>
                                        <td data-title="Date Applied"><b>5/04/2022</b></td>
                                        <td  data-title="Status"><b>Status</b></td>
                                        <td data-title="Action"><button  class="btn btn-info" type="button" id="btn-info">Accept</button>
                                        <button class="btn btn-info" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Reject</button></td>
                                    </tr> -->
                                    <!-- <tr>
                                        <td  data-title="Application Name"><b>Application's Full name</b></td>
                                        <td data-title="View Resume"><i class="fa-brands fa-google-drive"></i><b>Gdrive link</b></td>
                                        <td data-title="Date Applied"><b>5/04/2022</b></td>
                                        <td data-title="Action"><button  class="btn btn-info" type="button" id="btn-info">Bookmark</button>
                                        <button class="btn btn-info" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Reject</button></td>
                                    </tr> -->
                                </tbody>  
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <nav aria-label="Page navigation example">
                <div class="entries" id= "entries">
                    </span>Show 1 to 3 of 3 entries</span> 
                </div>
                <ul class="pagination" id = 'pagination'>
                     <li class="page-item"><a class="page-link next text-dark" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link num text-dark" href="#">1</a></li>
                    <li class="page-item"><a class="page-link num text-dark" href="#">2</a></li>
                    <li class="page-item"><a class="page-link num text-dark" href="#">3</a></li>
                    <li class="page-item"><a class="page-link next text-dark" href="#">Next</a></li> 
                </ul>
            </nav>   
        </form>
    </div>

    <!-- edit button -->
    <div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ms-3" id="editModalLabel">Edit Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="status">Choose a status:</label>
                <select name="status" id="status">
                    <option value="Pending">Pending</option>
                    <option value="Received">Received</option>
                    <option value="Viewed">Viewed</option>
                    <option value="Accepted">Accepted</option>
                </select><br>
            </div>
            <div class="modal-footer">
                <button id="edit-yes" type="button" class="btn btn-success btn1" value=''>Yes</button>
                <button type="button" class="btn btn-danger btn1" data-bs-dismiss="modal">No</button>
            </div>
        </div>
        </div>
    </div>

    <!-- bookmark button -->
    <div class="modal fade" id="bookmark-modal" tabindex="-1" aria-labelledby="bookmarkModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title ms-3" id="bookmarkModalLabel">Are you sure you want to bookmark this applicant?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button id="bookmark-yes" type="button" class="btn btn-success btn1" value=''>Yes</button>
                <button type="button" class="btn btn-danger btn1" data-bs-dismiss="modal">No</button>
            </div>
        </div>
        </div>
    </div>

    <!-- reject button -->
    <div class="modal fade" id="reject-modal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title ms-3" id="rejectModalLabel">Are you sure you want to reject this applicant?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button id="reject-yes" type="button" class="btn btn-success btn1" value=''>Yes</button>
                <button type="button" class="btn btn-danger btn1" data-bs-dismiss="modal">No</button>
            </div>
        </div>
        </div>
    </div>

    <!-- remove button -->
    <!-- <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title ms-3" id="exampleModal3Label">Are you sure you want to remove the bookmark in this applicant?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <button id="accept1" type="button" class="btn btn-success btn1">Yes</button>
                    <button type="button" class="btn btn-danger btn1" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div> -->
</body>
<script src="js/pfp.js"></script>
<script src="js/manage-applicant-resume.js"></script>
</html>