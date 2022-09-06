<?php include_once 'include/header.php'; ?>

    <link rel="stylesheet" href="css/recycle-bin-jobseeker.css">
    <title>Recycle Bin | Job seekers</title>
</head>

<body>

    <body>
        <?php include_once '../include/preloader-display.php'; ?>
        <div class="color-overlay">
            <nav class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow-sm">
                <a href="#" class="navbar-brand ms-5">
                    <img src="image/light-logo.png" alt="Job Portal Logo" width="80" height="60"  id="logo"></a>
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
                        <li><a class="dropdown-item" href="../logout.php"><i class="fa-solid fa-right-from-bracket"></i>Sign Out</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <button class="openbtn" title="Open Sidebar" onclick="openNav()"><i id="list-i" class="bi bi-list fa-2x"></i></button>
        <div class="sidebar shadow-lg" id="mySidebar" class="sidebar">
            <div class="menu">
                <div class="item"><a href="javascript:void(0)" class="closebtn" title="Close Sidebar" onclick="closeNav()">×</a></div>
                <div class="item"><a href="dashboard.php"><img class="me-3" src="image/Vector1.png" id="dash"> Dashboard</a><br></div>
                <div class="item"><a href="employer-management.php"><img class="me-3" src="image/employers.png" id="emp"> Employers Management</a><br></div>
                <div class="item"><a href="jobseeker-management.php"><img class="me-3" src="image/jobseeker.png" id="job"> Job Seeker Management</a><br></div>
                <div class="item"><a href="jobpost-management.php"><img class="me-3" src="image/jobpost.png" id="post"> Job Post Management</a><br></div>
                <div class="item"><a href="jobcategories-management.php"><img class="me-3" src="image/jobcategory.png" id="cate"> Job Categories Management</a><br></div>
                <div class="item">
                    <a class="sub-btn"><img class="me-3" src="image/profilesetting.png" id="sett">Setting <i class="fa fa-angle-right dropdown"></i></a>
                    <div class="sub-menu">
                        <a href="system-settings.php" class="sub-item">System Settings</a>
                        <a href="aboutus-settings.php" class="sub-item">About Us Settings</a>
                        <a href="faq-settings.php" class="sub-item">Faq Settings</a>
                    </div>
                </div><br>
                <div class="item">
                    <a class="sub-btn"><img class="me-3" src="image/recycle-bin.png" id="recycle"> Recycle Bin <i class="fa fa-angle-right dropdown"></i></a>
                    <div class="sub-menu sub-display">
                        <a href="recycle-bin-employer.php" class="sub-item">Employers Management</a>
                        <a href="recycle-bin-jobseeker.php" class="sub-item highlight">Job Seeker Management</a>
                        <a href="recycle-bin-jobpost.php" class="sub-item">Job Post Management</a>
                    </div>
                </div>
            </div>
        </div>
        <div class = 'toggle-switch'>
    <label class="lab">
      <input class="dar" type = 'checkbox' name="theme" onclick="toggleImage()">
      <span id="icon2" class = 'slider'></span>
    </label>
  </div>
        <br><br><br>
        <div class="container-front">
        <div class="container-responsive p-md-5 mt-4" id="main">
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
                    <div class="delete modal-body" style="margin-left: 170px;">
                        <button type="button" id="del-yes" class="yes-no btn btn-success">Yes</button>
                        <button type="button" class="yes-no btn btn-danger" data-bs-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
        function toggleImage() {
        imgsrc = document.getElementById("logo").src;
        if (imgsrc.indexOf("image/light-logo.png") !=-1){
          document.getElementById("logo").src = "image/Techployment (7) 1.png";
        }
        else{
          document.getElementById("logo").src = "image/light-logo.png";
        }
        imgsrc = document.getElementById("dash").src;
        if (imgsrc.indexOf("image/Vector1.png") !=-1){
          document.getElementById("dash").src = "image/vector.png";
        }
        else{
          document.getElementById("dash").src = "image/Vector1.png";
        }
        imgsrc = document.getElementById("emp").src;
        if (imgsrc.indexOf("image/employers.png") !=-1){
          document.getElementById("emp").src = "image/employee2.png";
        }
        else{
          document.getElementById("emp").src = "image/employers.png";
        }
        imgsrc = document.getElementById("job").src;
        if (imgsrc.indexOf("image/jobseeker.png") !=-1){
          document.getElementById("job").src = "image/job-search1.png";
        }
        else{
          document.getElementById("job").src = "image/jobseeker.png";
        }
        imgsrc = document.getElementById("post").src;
        if (imgsrc.indexOf("image/jobpost.png") !=-1){
          document.getElementById("post").src = "image/job-post2.png";
        }
        else{
          document.getElementById("post").src = "image/jobpost.png";
        }
        imgsrc = document.getElementById("cate").src;
        if (imgsrc.indexOf("image/jobcategory.png") !=-1){
          document.getElementById("cate").src = "image/completed-task1.png";
        }
        else{
          document.getElementById("cate").src = "image/jobcategory.png";
        }
        imgsrc = document.getElementById("sett").src;
        if (imgsrc.indexOf("image/profilesetting.png") !=-1){
          document.getElementById("sett").src = "image/user-profile1.png";
        }
        else{
          document.getElementById("sett").src = "image/profilesetting.png";
        }
        imgsrc = document.getElementById("recycle").src;
        if (imgsrc.indexOf("image/recycle-bin.png") !=-1){
          document.getElementById("recycle").src = "image/recycle-bin2.png";
        }
        else{
          document.getElementById("recycle").src = "image/recycle-bin.png";
        }
    }
    </script>
    <script>
        var checkbox = document.querySelector('input[name=theme');

        checkbox.addEventListener('change', function(){
            if(this.checked){
                trans()
                document.documentElement.setAttribute('data-theme','dark')
            }else{
                trans()
                document.documentElement.setAttribute('data-theme','light')
            }
        });
        let trans = () => {
            document.documentElement.classList.add('transition');
            window.setTimeout(() => {
                document.documentElement.classList.remove('transition')
            }, 1000)
        }
    </script>

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