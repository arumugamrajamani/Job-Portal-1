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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/jobmanage.css">
    <title>Company Profile</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container-fluid"> 
            <a class="navbar-brand me-1" href="#"></a>
            <img src="image/light-logo.png" alt="Job Portal Logo" width="100" height="70"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="d-flex">      
                <input class="form-control icon" type="search" placeholder="Search for a job title" aria-label="Search">
                <button class="btn2 text-dark fw-bold search1" type="submit"><i class="bi bi-search"></i></button>
            </form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-4">
                        <a class="nav-link text-dark  message active" aria-current="page" href="message-employer.php">MESSAGE</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link text-dark  about active" href="postajob.php">POST A JOB</a>
                    </li>             
                    <li class="nav-item account dropdown active">
                    <a class="nav-link text-dark  dropdown-toggle account active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="image" src="image/profileicon1.png" alt="Profile" width="50" height="30"> ACCOUNT</a>
                    <ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item text-dark text-start" href="company-profile.php"><img src="image/profile.png" alt=""> Full Name</a></li>
						<li>
							<hr class="dropdown-divider bg-white">
						</li>
						<li><a class="dropdown-item text-dark text-start" href="manage-account-profile.php"><img src="image/edit-profile-black.png" alt=""> Edit Profile</a></li>
						<li><a class="dropdown-item text-dark text-start" href="change-password.php"><img src="image/change-pass-black.png" alt=""> Change Password</a></li>
                        <li><a class="dropdown-item text-dark text-start" href="#"><img src="image/job-management.png" alt=""> Job Management</a></li>
						<li><a class="dropdown-item text-dark text-start" href="jobapplication.php"><img src="image/job-applicant-black.png" alt=""> Job Applications</a></li>
						<li><a class="dropdown-item text-dark text-start" href="manage-applicant-resume.php"><img src="image/manage resume.png" alt=""> Manage Resume</a></li>
						<li><a class="dropdown-item logout text-dark text-start" href="../logout.php"><img src="image/logout-black.png" alt=""> LOGOUT</a></li>
					</ul>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container p-md-4 mt-4" id="container">
        <form id="main-form"> 
            <div class="col-auto text-center">
                <section class="type p-1"> 
                    <div class="bg-color-header"> 
                        <h1 class="text-start">Job Post </h1> 
                        <div class="input-group">
                            <div class="form-outline">
                              <input type="search" id="form1" placeholder="Search for a job title" class="form-control" />
                            </div>
                            <button type="button" class="btn3">
                              <i class="bi bi-search"></i>
                            </button>
                          </div>
                        <div class="column">
                            <div class="card"> 
                                <h3>0</h3>
                            </div>
                        </div>
                        <p>The job posting will stay available for as long  as <br> you have  an active  account or until you  delete it.</p>
                    </div>
                    <div class="table-responsive" id="no-more-tables">
                        <table class="table basic-table table-headers table table-hover">
                            <thead class="text-dark text-center" id="title-sub">
                                <tr>
                                    <th>Job title</th>
                                    <th>Number Applicant</th>
                                    <th>Status (Active/Inactive)</th>
                                    <th>Drive</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-light text-dark " id="body-h" >
                                <tr>
                                    <td  data-title="Job Title">Web developer</td>
                                    <td data-title="Number applicant">10</td>
                                    <td data-title="status">sample</td>
                                    <td data-title="drive">sample.com</td>
                                    <td data-title="action">
                                    <button  class="btn" type="button" id="btn-info" >Edit</button>
                                    <button class="btn" type="button" id="btn-info"  data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody class="bg-light text-dark mt-5 " id="body-h">
                                <tr>
                                    <td data-title="Job Title">Virtual Assistant</td>
                                    <td data-title="Last Name">5</td>
                                    <td data-title="Age">sample</td>
                                    <td data-title="State">sample.com</td>
                                    <td data-title="Email"> <span><button class="btn" type="button" id="btn-info" >Edit</button>
                                    <button class="btn" type="button" id="btn-info"  data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button></span></td>
                                </tr>
                                <tr>
                                    <td  data-title="Job Title">Web developer</td>
                                    <td data-title="Number applicant">10</td>
                                    <td data-title="status">sample</td>
                                    <td data-title="drive">sample.com</td>
                                    <td data-title="Email"><button class="btn" type="button" id="btn-info" >Edit</button>
                                    <button class="btn" type="button" id="btn-info"  data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button></td>
                                </tr>
                                <tr>
                                    <td  data-title="Job Title">Web developer</td>
                                    <td data-title="Number applicant">10</td>
                                    <td data-title="status">sample</td>
                                    <td data-title="drive">sample.com</td>
                                    <td data-title="Email"><button class="btn" type="button" id="btn-info" >Edit</button>
                                    <button class="btn" type="button" id="btn-info"  data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button></td>
                                </tr>
                                <tr>
                                    <td  data-title="Job Title">Web developer</td>
                                    <td data-title="Number applicant">10</td>
                                    <td data-title="status">sample</td>
                                    <td data-title="drive">sample.com</td>
                                    <td data-title="Email" ><button class="btn" type="button" id="btn-info" >Edit</button>
                                    <button class="btn" type="button" id="btn-info"  data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button></td>
                                </tr>
                            </tbody>
                        </table>
                       
                        <nav aria-label="Page navigation example">
                            <div class="entries">
                                </span>Show 1 to 3 of 3 entries</span>
                            </div>
                            <ul class="pagination">
                                <li class="page-item1"><a class="page-link next text-dark" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link num text-dark" href="#">1</a></li>
                                <li class="page-item"><a class="page-link num text-dark" href="#">2</a></li>
                                <li class="page-item"><a class="page-link num text-dark" href="#">3</a></li>
                                <li class="page-item1"><a class="page-link next text-dark" href="#">Next</a></li>
                            </ul>
                        </nav> 
                        <div class="text-end">
                            <button class="bt mt-1 text-dark" type="button" id="button">ADD JOB POST</button>
                        </div>
                    </div>
                </section>
            </div>  
        </form>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ms-5" id="exampleModalLabel">Are you sure you want to delete this?</h5>
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
</html>