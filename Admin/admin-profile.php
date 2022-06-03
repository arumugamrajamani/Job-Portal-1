<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/e5ed048aee.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/admin-profile.css">
    <title>Admin Profile</title>
</head>
<body>
    <div class="color-overlay">
        <nav class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow-sm">
            <a href="#" class="navbar-brand ms-5">
            <img src="image/flogo.png" alt="Job Portal Logo" width="80" height="60"></a>
            <h6 class="position-relative">Admin Profile</h6>
            <div class="collapse navbar-collapse" id="toggleMobileMenu">
                <ul class="navbar-nav ms-auto  text-center">
                    <li class="nav-item dropdown me-5">
                        <a class="nav-link dropdown-toggle fs-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i></a>
                    <ul class="dropdown-menu account-drop dropdown-menu-end" aria-labelledby="navbarDropdown" >
                        <li><a class="dropdown-item  fs-5 text-white" href="admin-profile.php"><i class="bi bi-person-circle"></i> My Profile</a></li>
                        <li><hr class="dropdown-divider bg-white"></li>
                        <li><a class="dropdown-item fs-5 text-white" href="php/logout.php">Sign Out</a></li>
                    </ul>
                </ul>
            </div>
        </nav>         
    </div><br>
    <button class="openbtn" title="Open Sidebar" onclick="openNav()"><i id="list-i" class="bi bi-list fa-2x"></i></button>
    <div class="sidebar shadow-lg" id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn text-dark" title="Close Sidebar" onclick="closeNav()">×</a>
        <a href="dashboard.php"><img class="me-3" src="image/dashboard.png"> Dashboard</a><br>
        <a href="employer-management.php"><img class="me-3" src="image/employers.png"> Employers Management</a><br>
        <a href="jobseeker-management.php"><img class="me-3" src="image/jobseeker.png"> Job Seeker Management</a><br>
        <a href="jobpost-management.php"><img class="me-3" src="image/jobpost.png"> Job Post Management</a><br>
        <a href="jobcategories-management.php"><img class="me-3" src="image/jobcategory.png"> Job Categories Management</a><br>
        <a href="admin-profile.php" class="highlight"><img class="me-3" src="image/profilesetting.png"> Profile Setting</a><br>
        <a href="recycle-bin-employer.php"><img class="me-3" src="image/recycle-bin.png"> Recycle Bin</a><br>
    </div>
    <br><br><br>
    <section class="edit-section" id="main">
        <div class="container-responsive p-md-5 mt-4">
            <div class="d-flex">
                <div class="edit-change block bg-white text-center shadow">
                    <button class="edit-profile mt-5 mb-4 p-2 px-3 fw-bold" type="button">Edit profile</button>
                    <hr>
                    <button class="change-password mt-4 p-2 fw-bold" onclick="location.href='admin-change-pass.php'" type="button">Change password</button>
                </div>
                <div class="backg bg-white ms-5 shadow block">              
                    <img src="image/melhamlogo.png" alt="melham logo" class="image mt-5">
                    <div class="row mb-3 mt-5 ms-5 fw-bold">
                        <label for="name" class="profile-picture col-sm-2">Profile Picture:</label>
                        <div class="col-sm-7">
                            <input type="file" id="myFile" class="file form-control" name="filename">
                        </div>
                        <div class="row mb-3 mt-4 ms-5 fw-bold">
                            <label for="name" class="col-sm-3 ">Name:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-5 fw-bold">
                            <label for="email" class="col-sm-3 ">Email:</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-5 fw-bold">
                            <label for="contactnumber" class="col-sm-3 ">Contact Number:</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="contactnumber">
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="save-change" type="submit">SAVE CHANGES</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

    <script>
        function openNav() {
        document.getElementById("mySidebar").style.left = "0";
        document.getElementById("main").style.marginLeft = "0px";
        }
        
        function closeNav() {
        document.getElementById("mySidebar").style.left = "-100%";
        document.getElementById("main").style.marginLeft= "-170px";
        }
    </script>
</body>
</html>