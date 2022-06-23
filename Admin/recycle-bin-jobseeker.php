<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/e5ed048aee.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/recycle-bin-jobseeker.css">
    <!-- jQuery cdn link below -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Toast CDN for functionality of toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Toast CDN for design of toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../css/preloader.css">
    <title>Recycle Bin Job seekers</title>
</head>

<body>

    <body>
        <?php include_once '../include/preloader-display.php'; ?>
        <div class="color-overlay">
            <nav class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow-sm">
                <a href="#" class="navbar-brand ms-5">
                    <img src="image/flogo.png" alt="Job Portal Logo" width="80" height="60"></a>
                <h6 class="position-relative">Recycle Bin Management</h6>
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
                        <li><a class="dropdown-item" href="php/logout.php"><i class="fa-solid fa-right-from-bracket"></i>Sign Out</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <button class="openbtn" title="Open Sidebar" onclick="openNav()"><i id="list-i" class="bi bi-list fa-2x"></i></button>
        <div class="sidebar shadow-lg" id="mySidebar" class="sidebar">
            <div class="menu">
                <div class="item"><a href="javascript:void(0)" class="closebtn text-dark" title="Close Sidebar" onclick="closeNav()">×</a></div>
                <div class="item"><a href="dashboard.php"><img class="me-3" src="image/dashboard.png"> Dashboard</a><br></div>
                <div class="item"><a href="employer-management.php"><img class="me-3" src="image/employers.png"> Employers Management</a><br></div>
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
                    <div class="sub-menu sub-display">
                        <a href="recycle-bin-employer.php" class="sub-item">Employers Management</a>
                        <a href="recycle-bin-jobseeker.php" class="sub-item highlight">Job Seeker Management</a>
                        <a href="recycle-bin-jobpost.php" class="sub-item">Job Post Management</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="container-responsive p-md-5 mt-4 bg-white" id="main">
            <div class="d-flex justify-content-end">
                <div class="d-flex">
                    <input id="search" class="form-control icon" type="search" placeholder="Search an employer" aria-label="Search">
                    <button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </div><br>
            <div class=" col-auto ">
                <section class="type p-1">
                    <div class="bg-color-header text-center">
                        <div class="table-responsive" id="no-more-tables">
                            <table class="table basic-table table-headers table table-hover">
                                <thead class="thead text-dark text-center" id="title-sub">
                                    <tr>
                                        <th>Profile Picture</th>
                                        <th>Jobseeker Name</th>
                                        <th>Contact Number</th>
                                        <th>Email Address</th>
                                        <th>Date Applied</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody bg-light text-dark" id="body-h">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <nav aria-label="Page navigation example" class="page-section">
                <div class="entries" id="entries">
                    <!-- </span>Show 1 to 3 of 3 entries</span> -->
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
        <!-- Delete button modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title ms-5" id="exampleModalLabel">Are you sure you want to delete this?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="margin-left: 170px;">
                        <button type="button" class="btn btn-success" title="Restore" style="width: 70px;">Yes</button>
                        <button type="button" class="btn btn-danger" title="Delete" style="width: 70px;" data-bs-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function openNav() {
                document.getElementById("mySidebar").style.left = "0";
                document.getElementById("main").style.marginLeft = "390px";
            }

            function closeNav() {
                document.getElementById("mySidebar").style.left = "-100%";
                document.getElementById("main").style.marginLeft = "230px";
            }
        </script>

        <script src="js/navbar.js"></script>
        <script src="../js/preloader.js"></script>
        <script src="js/jobseeker-recyclebin.js"></script>
    </body>

</html>