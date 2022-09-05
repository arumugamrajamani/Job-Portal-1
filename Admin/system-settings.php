<?php include_once 'include/header.php'; ?>

    <link rel="stylesheet" href="css/system-settings.css">
    <title>System | Settings</title>
</head>

<body>
    <?php include_once '../include/preloader-display.php'; ?>
    <div class="color-overlay">
        <nav class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow-sm">
            <a href="#" class="navbar-brand ms-5">
                <img src="image/light-logo.png" alt="Job Portal Logo" width="80" height="60" class="flogo" id="logos"></a>
                <h6 class="ms-auto header-text">System Settings</h6>
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
    <br>
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
                <a class="sub-btn highlight"><img class="me-3" src="image/profilesetting.png" id="sett">Setting <i class="fa fa-angle-right dropdown"></i></a>
                <div class="sub-menu sub-display">
                    <a href="system-settings.php" class="sub-item highlight">System Settings</a>
                    <a href="aboutus-settings.php" class="sub-item ">About Us Settings</a>
                    <a href="faq-settings.php" class="sub-item">Faq Settings</a>
                </div>
            </div><br>
            <div class="item">
                <a class="sub-btn"><img class="me-3" src="image/recycle-bin.png" id="recycle"> Recycle Bin <i class="fa fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="recycle-bin-employer.php" class="sub-item">Employers Management</a>
                    <a href="recycle-bin-jobseeker.php" class="sub-item">Job Seeker Management</a>
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
    <div class="container-fluid" id="main">
        <div class="text-center">
            <h3 class="div1">SYSTEM SETTINGS</h3>
        </div>
        <div class="d-flex justify-content-center">
            <img src="" class="image" id="logo">
        </div>
        <div class="row mb-3 mt-5 fw-bold justify-content-center">
            <label for="name" class="profile-picture col-sm-2">System Picture:</label>
            <div class="col-sm-8">
                <input type="file" id="myFile" class="file form-control" name="filename">
            </div>
        </div>
        <div class="row mb-3 mt-4  fw-bold justify-content-center">
            <label for="name" class="col-sm-2 ">System Name:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="name" placeholder="System Name">
            </div>
        </div>
        <div class="row mb-3 mt-0 fw-bold justify-content-center">
            <label for="tagline" class="col-sm-2 ">System Tagline:</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="tagline" rows="3" placeholder="System Tagline"></textarea>
            </div>
        </div>
        <div class="row mb-3 mt-0 fw-bold justify-content-center">
            <label for="contactnumber" class="col-sm-2 ">Contact Number:</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="contactnumber" placeholder="Contact Number">
            </div>
        </div>
        <div class="row mb-3 mt-0 fw-bold justify-content-center">
            <label for="email" class="col-sm-2 ">Email:</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" id="email" placeholder="Email@email.com">
            </div>
        </div>
        <div class="row mb-3 mt-0 fw-bold justify-content-center">
            <label for="description" class="col-sm-2 ">System Description:</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="description" rows="4" placeholder="System Description"></textarea>
            </div>
        </div>
        <div class="text-center">
            <button class="save-change" id="save-now" type="submit">SAVE CHANGES</button>
        </div><br>
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
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.left = "0";
            document.getElementById("main").style.marginLeft = "370px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.left = "-100%";
            document.getElementById("main").style.marginLeft = "170px";
        }
    </script>
    <script>
        function toggleImage() {
        imgsrc= document.getElementById("logos").src;
        if (imgsrc.indexOf("image/light-logo.png") !=-1){
          document.getElementById("logos").src = "image/Techployment (7) 1.png";
        }
        else{
          document.getElementById("logos").src = "image/light-logo.png";
        }
        if (imgsrc.indexOf("image/flogo.png") !=-1){
          document.getElementById("image1").src = "image/Techployment (7) 1.png";
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
    <script src="js/navbar.js"></script>
    <script src="../js/preloader.js"></script>
    <script src="js/system-settings.js"></script>
</body>

</html>