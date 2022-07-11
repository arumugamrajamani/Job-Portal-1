<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/e5ed048aee.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- jQuery cdn link below -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Toast CDN for functionality of toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Toast CDN for design of toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/employer-management.css">
    <link rel="stylesheet" href="../css/preloader.css">
    <title>Employer Management | Admin</title>
</head>

<body>
    <?php include_once '../include/preloader-display.php'; ?>
    <div class="color-overlay">
        <nav class="navbar navbar-expand-lg  h6 navbar-light fixed-top mx-0 shadow-sm">
            <a href="#" class="navbar-brand ms-5">
                <img src="image/flogo.png" alt="Job Portal Logo" width="80" height="60"></a>
            <h6 class="position-relative">Employers Management</h6>
            <div class="dropdown ms-auto d-flex">
                <h6 class="mt-2 fw-bold" id="adminFullName"></h6>
                <button class="btn-dropdown ms-2 me-4" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-caret-down"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="admin-profile.php"><img id="mainDpDrop" src="image/profile.png" alt="" class="me-2"> My Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="edit-profile.php"><i class="fa-solid fa-user-pen"></i>Edit Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="admin-change-pass.php"> <i class="fa-solid fa-key "></i>Change Password</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="../logout.php"><i class="fa-solid fa-right-from-bracket"></i>Sign Out</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <br><br>
    <button class="openbtn" title="Open Sidebar" onclick="openNav()"><i id="list-i" class="bi bi-list fa-2x"></i></button>
    <div class="sidebar shadow-lg" id="mySidebar" class="sidebar">
        <div class="menu">
            <div class="item"><a href="javascript:void(0)" class="closebtn text-dark" title="Close Sidebar" onclick="closeNav()">×</a></div>
            <div class="item"><a href="dashboard.php"><img class="me-3" src="image/dashboard.png"> Dashboard</a><br></div>
            <div class="item"><a href="employer-management.php" class="highlight"><img class="me-3" src="image/employers.png"> Employers Management</a><br></div>
            <div class="item"><a href="jobseeker-management.php"><img class="me-3" src="image/jobseeker.png"> Job Seeker Management</a><br></div>
            <div class="item"><a href="jobpost-management.php"><img class="me-3" src="image/jobpost.png"> Job Post Management</a><br></div>
            <div class="item"><a href="jobcategories-management.php"><img class="me-3" src="image/jobcategory.png"> Job Categories Management</a><br></div>
            <div class="item">
                <a class="sub-btn"><img class="me-3" src="image/profilesetting.png">Setting <i class="fa fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="system-settings.php" class="sub-item">System Settings</a>
                    <a href="aboutus-settings.php" class="sub-item">About Us Settings</a>
                    <a href="faq-settings.php" class="sub-item">Faq Settings</a>
                </div>
            </div><br>
            <div class="item">
                <a class="sub-btn"><img class="me-3" src="image/recycle-bin.png"> Recycle Bin <i class="fa fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="recycle-bin-employer.php" class="sub-item">Employers Management</a>
                    <a href="recycle-bin-jobseeker.php" class="sub-item">Job Seeker Management</a>
                    <a href="recycle-bin-jobpost.php" class="sub-item">Job Post Management</a>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container-responsive p-md-5 mt-4 bg-white" id="main">
        <div class="d-flex">
            <input class="form-control icon i-search" id="search" placeholder="Search an employer" aria-label="Search">
            <button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
        </div>
        <div class="table col-auto ">
            <section class="type p-1">
                <div class="table-responsive pt-4" id="no-more-tables">
                    <table class="table basic-table table-headers table table-hover">
                        <thead class="thead text-dark text-center">
                            <tr>
                                <th>Company Logo</th>
                                <th>Company</th>
                                <th>Employer Name</th>
                                <th>Employer Position</th>
                                <th>Email address</th>
                                <th>DTI Business Permit</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-light text-dark" id="body-h">
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
        <nav aria-label="Page navigation" class="page-section">
            <div class="entries" id="entries">
                <!-- <span>Show 1 to 3 of 3 entries</span> -->
            </div>
            <ul class="pagination" id="pagination">
                <!-- <li class="page-item"><a class="page-link bg-info text-dark" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                <li class="page-item"><a class="page-link bg-info text-dark" href="#">Next</a></li> -->
            </ul>
        </nav>
    </div>

    <!--Company logo modal-->
    <div class="modal fade" id="companylogo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Company Logo</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="company-logo modal-body">
                    <img id="view-logo" src="" class="image" alt="">
                </div>
            </div>
        </div>
    </div>

    <!--Delete modal-->
    <div class="modal fade" id="modal-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ms-5" id="exampleModalLabel">Are you sure you want to delete this?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="delete modal-body">
                    <button type="button" id="yes-delete" class="yes-no btn btn-success">Yes</button>
                    <button type="button" class="yes-no btn btn-danger" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    <!--View detail modal-->
    <div class="modal fade" id="modal-viewdetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ms-5" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container con1">
                        <form class="container">
                            <h2 class="text-black text-center mt-0 fw-bold">MORE DETAILS</h2>
                            <hr>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="companyaddress" class="col-sm-3 ">Company Address:</label>
                                <div class="col-sm-8">
                                    <h5 id="e-companyaddress"></h5>
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="companyceoname" class="col-sm-3 ">Company CEO Name:</label>
                                <div class="col-sm-8">
                                    <h5 id="e-companyceoname"></h5>
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="companysize" class="col-sm-3 ">Company Size:</label>
                                <div class="col-sm-8">
                                    <h5 id="e-companysize"></h5>
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="companyrevenue" class="col-sm-3 ">Company Revenue:</label>
                                <div class="col-sm-8">
                                    <h5 id="e-companyrevenue"></h5>
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="industry" class="col-sm-3 ">Industry:</label>
                                <div class="col-sm-8">
                                    <h5 id="e-industry"></h5>
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="companynumber" class="col-sm-3 ">Company Number:</label>
                                <div class="col-sm-8">
                                    <h5 id="e-companynumber"></h5>
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="companyemail" class="col-sm-3 ">Company Email:</label>
                                <div class="col-sm-8">
                                    <h5 id="e-companyemail"></h5>
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4">
                                <label for="companydescription" class="col-sm-3 fw-bold ">Company Description:</label>
                                <div class="col-sm-8">
                                    <p id="e-companydescription"></p>
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4">
                                <label for="datecreated" class="col-sm-3 fw-bold">Date/Time Created:</label>
                                <div class="col-sm-8">
                                    <h5 id="e-datecreated"></h5>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="close btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--Edit detail modal-->
    <div class="modal fade" id="modal-editdetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body company-details">
                    <div class="container">
                        <form class="container">
                            <h2 class="text-black text-center mt-0 fw-bold">EDIT DETAILS</h2>
                            <hr>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="e-employerfullname" class="col-sm-3 ">Employer Name:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="e-employerfullname">
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="e-employerposition" class="col-sm-3 ">Employer Position:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="e-employerposition">
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="e-companyname" class="col-sm-3 ">Company Name:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="e-companyname">
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="e-companyaddress" class="col-sm-3 ">Company Address:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="e-companyaddress">
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="e-companyceoname" class="col-sm-3 ">Company CEO Name:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="e-companyceoname">
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="e-companysize" class="col-sm-3 ">Company Size:</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="e-companysize">
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="e-companyrevenue" class="col-sm-3 ">Company Revenue:</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="e-companyrevenue">
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="e-industry" class="col-sm-3 ">Industry:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="e-industry">
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="e-companynumber" class="col-sm-3 ">Company Number:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="e-companynumber">
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="e-companyemail" class="col-sm-3 ">Company Email:</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="e-companyemail">
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4">
                                <label for="e-companydescription" class="col-sm-3 fw-bold ">Company Description:</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" placeholder="Description Here" id="e-companydescription" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4">
                                <label for="verify" class="col-sm-3 fw-bold">Verification Status:</label>
                                <div class="col-sm-8 ">
                                    <select class="form-select" aria-label="Default select example" id="verify">
                                        <option value="1">Verified</option>
                                        <option value="0">Not verified</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="save-edit" class="save btn btn-success">Save</button>
                    <button type="button" class="save-close btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/employer-management.js"></script>
    <script src="js/navbar.js"></script>
    <script src="../js/preloader.js"></script>
</body>

</html>