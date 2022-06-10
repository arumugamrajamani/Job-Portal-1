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
    <link rel="stylesheet" href="css/admin-change-pass.css">
    <!-- jQuery cdn link below -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Sweet alert cdn link below -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Admin Profile</title>
</head>

<body>
    <div class="color-overlay">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow-sm">
                <a href="#" class="navbar-brand ms-5">
                    <img src="image/flogo.png" alt="Job Portal Logo" width="80" height="60"></a>
                <h6 class="position-relative">Admin Profile</h6>
                <div class="collapse navbar-collapse" id="toggleMobileMenu">
                    <ul class="navbar-nav ms-auto  text-center">
                        <li class="nav-item dropdown me-5">
                            <a class="nav-link dropdown-toggle fs-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i></a>
                            <ul class="dropdown-menu account-drop dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item  fs-5 text-white" href="admin-profile.php"><i class="bi bi-person-circle"></i> My Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider bg-white">
                                </li>
                                <li><a class="dropdown-item fs-5 text-white" href="php/logout.php">Sign Out</a></li>
                            </ul>
                    </ul>
                </div>
            </nav>
        </div>
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
    </div><br><br><br>
    <div class="background-white container-responsive p-md-5 mt-4" id="main">
        <div class="d-flex">
            <div class="edit-change block bg-white text-center shadow">
                <button class="edit-profile mt-5 mb-4 p-2 px-3 fw-bold" onclick="location.href='admin-profile.php'" type="button">Edit profile</button>
                <hr>
                <button class="change-password mt-4 p-2 fw-bold" type="button">Change password</button>
            </div>
            <div class="container block align-items-center text-center">
                <h4 class="change-your-password p-3 shadow-sm fw-bold">Change Your Password</h4>
                <div class="back-white bg-white mt-3">
                    <div class="current-password d-flex">
                        <span class="icon" onclick="showHide()">
                            <i class='eye bi bi-eye-slash icon' aria-hidden="true"></i>
                            <i class='eye bi bi-eye icon'></i>
                        </span>
                        <label class="current-pass fw-bold mt-3">Current Password:</label>
                        <input type="password" id="currentpassword" class="current-new-confirm"><br><br>
                    </div>
                    <div class="new-confirm d-flex mt-4">
                        <span class="icon1" onclick="showHide1()">
                            <i class='eye bi bi-eye-slash icon1' aria-hidden="true"></i>
                            <i class='eye bi bi-eye icon1'></i>
                        </span>
                        <label class="new-password fw-bold mt-3">New Password:</label>
                        <input type="password" id="newpassword" class="current-new-confirm ms-4"><br><br>
                    </div>
                    <div class="new-confirm d-flex mt-4">
                        <span class="icon2" onclick="showHide2()">
                            <i class='eye bi bi-eye-slash icon2' aria-hidden="true"></i>
                            <i class='eye bi bi-eye icon2'></i>
                        </span>
                        <label class="confirm-password fw-bold mt-3">Confirm Password:</label>
                        <input type="password" id="confirmpassword" class="current-new-confirm">
                    </div>
                    <div class="block">
                        <div>
                            <button type="button" class="save mt-4 fw-bold" title="Save password" data-bs-toggle="modal" data-bs-target="#modal-save">Save</button>
                        </div>
                    </div>
                </div>
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
    <script>
        function showHide() {
            let icon = document.querySelector(".icon"),
                input = document.getElementById("currentpassword");
            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
            }
            icon.classList.toggle('is-active');
        }

        function showHide1() {
            let icon = document.querySelector(".icon1"),
                input = document.getElementById("newpassword");
            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
            }
            icon.classList.toggle('is-active');
        }

        function showHide2() {
            let icon = document.querySelector(".icon2"),
                input = document.getElementById("confirmpassword");
            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
            }
            icon.classList.toggle('is-active');
        }
    </script>
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.left = "0";
            document.getElementById("main").style.marginLeft = "380px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.left = "-100%";
            document.getElementById("main").style.marginLeft = "250px";
        }
    </script>
    <script src="js/changepassword.js"></script>
</body>

</html>