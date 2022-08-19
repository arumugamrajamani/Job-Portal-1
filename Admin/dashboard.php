<!DOCTYPE html>
<html lang="en">

<?php session_start() ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e5ed048aee.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- jQuery cdn link below -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="../css/preloader.css">
    <title>Dashboard | Admin</title>
</head>

<body>
    <?php include_once '../include/preloader-display.php'; ?>
    <div class="color-overlay">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow-sm">
                <a href="#" class="navbar-brand ms-5">
                <img src="image/light-logo.png" alt="Job Portal Logo" width="80" height="60" id="logo"></a>
                <h6 class="position-relative">Admin Dashboard</h6>
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
    </div>
    <button class="openbtn" title="Open Sidebar" onclick="openNav()"><i id="list-i" class="bi bi-list fa-2x"></i></button>
    <div class="sidebar shadow-lg" id="mySidebar" class="sidebar">
        <div class="menu">
            <div class="item"><a href="javascript:void(0)" class="closebtn" title="Close Sidebar" onclick="closeNav()">×</a></div>
            <div class="item"><a href="dashboard.php" class="highlight"><img class="me-3" src="image/Vector1.png" id="dash"> Dashboard</a><br></div>
            <div class="item"><a href="employer-management.php"><img class="me-3" src="image/employers.png" id="emp"> Employers Management</a><br></div>
            <div class="item"><a href="jobseeker-management.php"><img class="me-3" src="image/jobseeker.png" id="job"> Job Seeker Management</a><br></div>
            <div class="item"><a href="jobpost-management.php"><img class="me-3" src="image/jobpost.png" id="post"> Job Post Management</a><br></div>
            <div class="item"><a href="jobcategories-management.php"><img class="me-3" src="image/jobcategory.png" id="cate"> Job Categories Management</a><br></div>
            <div class="item">
                <a class="sub-btn"><img class="me-3" src="image/profilesetting.png"  id="sett">Setting <i class="fa fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="system-settings.php" class="sub-item">System Settings</a>
                    <a href="aboutus-settings.php" class="sub-item">About Us Settings</a>
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
    <section class="chart-section" id="main">
        <div class="container-responsive">
        <div class="kk">
                <img class="homie" id="homie" src="image/Vector1.png" alt="">
                <div class="dash"><h1>DASHBOARD</h1></div>
            </div>
            <div class="employers-jobseekers row">
                <div id="registered-employer" class="col-sm-5 me-1">
                    <div>
                        <div class="registered-employers text-center">
                        <h2><img src="image/businessman (1) 1.png" alt=""><h2>REGISTERED <br> EMPLOYERS</h2>
                        </div>
                        <?php
                        include "../php/db-connection.php";
                        $query = mysqli_query($GLOBALS['conn'], "SELECT * FROM employer");
                        $row = mysqli_num_rows($query);
                        echo '<p>' . $row . '</p>';
                        ?>
                    </div>
                </div>
                <div id="registered-jobseekers" class="col-sm-5 ms-4">
                    <div>
                        <div class="registered-jobseekers text-center">
                        <h2><img src="image/portfolio 3.png" alt=""><h2>REGISTERED <br> JOB SEEKERS</h2>
                        </div>
                        <?php
                        include "../php/db-connection.php";
                        $query = mysqli_query($GLOBALS['conn'], "SELECT * FROM jobseeker");
                        $row = mysqli_num_rows($query);
                        echo '<p>' . $row . '</p>';
                        ?>
                    </div>
                </div>
            </div><br>
            <div id="numberofjob-active" class="row">
                <div id="numberofjobs" class="col-sm-5 me-1">
                    <div>
                        <div class="numberofjob text-center">
                            <h2><img src="image/signal 2.png" alt=""><h2> NUMBER OF JOBS <br> (Per Category)</h2>
                        </div><br>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
                <div id="active-inactive" class="col-sm-5 ms-4">
                    <div>
                        <div class="active-inactive text-center">
                        <img src="image/signal 2.png" alt=""><h2>ACTIVE AND INACTIVE <br> JOBS</h2>
                        </div>
                        <canvas id="myChart1"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function toggleImage() {
        imgsrc= document.getElementById("homie").src;
        if (imgsrc.indexOf("image/Vector1.png") !=-1){
          document.getElementById("homie").src = "image/vector.png";
        }
        else{
          document.getElementById("homie").src = "image/Vector1.png";
        }
        imgsrc= document.getElementById("logo").src;
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
    
    <script src="js/dashboard.js"></script>
    <script src="js/navbar.js"></script>
    <script src="../js/preloader.js"></script>
</body>
</html>