<?php include_once 'include/header.php'; ?>

    <link rel="stylesheet" href="css/admin-profile.css">
    <title>Profile | Admin</title>
</head>

<body>
    <?php include_once '../include/preloader-display.php'; ?>
    <div class="color-overlay">
        <nav class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow-sm">
            <a href="#" class="navbar-brand ms-5">
                <img src="image/flogo.png" alt="Job Portal Logo" width="80" height="60"></a>
            <h6 class="position-relative">Admin Profile</h6>
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
    </div><br>
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
                <div class="sub-menu">
                    <a href="recycle-bin-employer.php" class="sub-item">Employers Management</a>
                    <a href="recycle-bin-jobseeker.php" class="sub-item">Job Seeker Management</a>
                    <a href="recycle-bin-jobpost.php" class="sub-item">Job Post Management</a>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="container bg-white shadow block ms-auto" id="main">
        <div class="d-flex justify-content-center"><img id="profilepic" src="" alt="melham logo" class="image mt-5"></div>
        <div class="row mb-3 mt-5 fw-bold d-flex">
            <div class="row mb-3 mt-4 justify-content-center fw-bold ">
                <label for="name" class="col-sm-3 ">Name:</label>
                <div class="col-sm-3">
                    <text id="name"></text>
                </div>
            </div>
            <div class="row mb-3 mt-0 justify-content-center fw-bold">
                <label for="email" class="col-sm-3 ">Email:</label>
                <div class="col-sm-3">
                    <text id="email"></text>
                </div>
            </div>
            <div class="row mb-3 mt-0 justify-content-center fw-bold">
                <label for="contactnumber" class="col-sm-3 ">Contact Number:</label>
                <div class="col-sm-3">
                    <text id="contactnumber"></text>
                </div>
            </div>
            <div class="text-center justify-content-center mt-5">
                <button class="save-change me-5" type="submit" onclick="location.href='edit-profile.php'">EDIT PROFILE</button>
                <button class="save-change" type="submit" onclick="location.href='admin-change-pass.php'"> CHANGE PASSWORD</button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ms-5" id="exampleModalLabel">Are you sure you want to delete this?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="delete modal-body">
                    <button type="button" class="yes-no btn btn-success">Yes</button>
                    <button type="button" class="yes-no btn btn-danger">No</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/navbar.js"></script>
    <script src="../js/preloader.js"></script>
    <script src="js/adminprofile.js"></script>
</body>

</html>