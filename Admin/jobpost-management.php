<!doctype html>
<html lang="en">

<head>
    <<meta charset="utf-8">
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
    
    <title>Job Post Management | Admin</title>
</head>

<body>
    <?php include_once '../include/preloader-display.php'; ?>
    <div class="color-overlay">
        <nav class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow-sm">
            <a href="#" class="navbar-brand ms-5">
                <img src="image/light-logo.png" alt="Job Portal Logo" width="80" height="60" id="logo"></a>
            <h6 class="position-relative">Job Post Management</h6>
            <div class="dropdown ms-auto d-flex">
                <h6 class="mt-2 fw-bold" id="adminFullName"></h6>
                <button class="btn-dropdown ms-2 me-4" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-caret-down"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="admin-profile.php"> My Profile</a></li>
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
    <br>
    <button class="openbtn" title="Open Sidebar" onclick="openNav()"><i id="list-i" class="bi bi-list fa-2x"></i></button>
    <div class="sidebar shadow-lg" id="mySidebar" class="sidebar">
        <div class="menu">
            <div class="item"><a href="javascript:void(0)" class="closebtn" title="Close Sidebar" onclick="closeNav()">×</a></div>
            <div class="item"><a href="dashboard.php"><img class="me-3" src="image/Vector1.png" id="dash"> Dashboard</a><br></div>
            <div class="item"><a href="employer-management.php"><img class="me-3" src="image/employers.png" id="emp"> Employers Management</a><br></div>
            <div class="item"><a href="jobseeker-management.php"><img class="me-3" src="image/jobseeker.png" id="job"> Job Seeker Management</a><br></div>
            <div class="item"><a href="jobpost-management.php" class="highlight"><img class="me-3" src="image/jobpost.png" id="post"> Job Post Management</a><br></div>
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
    <div class="container-responsive p-md-5 mt-4" id="main">
        <div class="d-flex">
            <input class="form-control icon i-search" id="search" placeholder="Search a jobpost" aria-label="Search">
            <button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
        </div><br>
        <div class="col-auto">
            <section class="type p-1">
                <div class="bg-color-header text-center">
                    <div class="table-responsive" id="no-more-tables">
                        <table class="table basic-table table-headers table table-hover">
                            <thead class="thead text-dark text-center">
                                <tr>
                                    <th>Employer</th>
                                    <th>Company</th>
                                    <th>Job Category</th>
                                    <th>Date Posted</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="tbody bg-light text-dark" id="body-h"></tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        <nav aria-label="Page navigation example">
            <div class="entries" id="entries">
                <!--</span>Show 1 to 3 of 3 entries</span>-->
            </div>
            <ul class="pagination" id="pagination">
                <!--<li class="page-item"><a class="page-link bg-info text-dark" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                <li class="page-item"><a class="page-link bg-info text-dark" href="#">Next</a></li>-->
            </ul>
        </nav>
    </div>
    <!-- Delete button modal -->
    <div class="modal fade" id="modal-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ms-5" id="exampleModalLabel">Are you sure you want to delete this?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="delete modal-body">
                    <button type="button" id="del-yes" class="yes-no btn btn-success">Yes</button>
                    <button type="button" class="yes-no btn btn-danger" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-editdetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body edit-detail">
                    <div class="container">
                        <form class="container"><br>
                            <h2 class="text-black text-center mt-2 fw-bold">EDIT DETAILS</h2>
                            <hr>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="employername" class="col-sm-3 ">Employer Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="employername">
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="company" class="col-sm-3 ">Company</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="company">
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="jobcategory" class="col-sm-3 ">Job Category</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="jobcategory">
                                </div>
                            </div>
                        </form>
                    </div><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success save">Save Details</button>
                        <button type="button" class="close btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleImage() {
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
    <script src="js/jobpost-management.js"></script>
    <script src="js/navbar.js"></script>
    <!-- <script src="../js/preloader.js"></script> -->
</body>

</html>