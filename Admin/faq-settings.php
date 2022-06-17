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
    <link rel="stylesheet" href="css/faq-settings.css">
    <link rel="stylesheet" href="../css/preloader.css">
    <title>FAQ</title>
</head>

<body>
    <?php include_once '../include/preloader-display.php'; ?>
    <div class="color-overlay">
        <nav class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow-sm">
            <a href="#" class="navbar-brand ms-5">
                <img src="image/flogo.png" alt="Job Portal Logo" width="80" height="60"></a>
            <h6 class="ms-auto header-text">Settings</h6>
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
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-right-from-bracket"></i>Sign Out</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <br>
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
                <a class="sub-btn highlight"><img class="me-3" src="image/profilesetting.png">Setting <i class="fa fa-angle-right dropdown"></i></a>
                <div class="sub-menu sub-display">
                    <a href="system-settings.php" class="sub-item">System Settings</a>
                    <a href="aboutus-settings.php" class="sub-item">About Us Settings</a>
                    <a href="#" class="sub-item highlight">Faq Settings</a>
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
    <div class="container-fluid bg-white shadow block" id="main">
        <div class="d-flex div1 justify-content-between px-4">
            <div>
                <h3 class="">FAQ SETTINGS</h3>
            </div>
            <div class="d-flex searchbox">
                <input class="form-control icon i-search" type="search" placeholder="Search a question" aria-label="Search">
                <button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
            </div>
        </div>
        <div class="d-flex justify-content-between px-4 div2 pt-3">
            <div>
                <h6 class="systems mt-2">Systems:</h6>
            </div>
            <div>
                <button type="submit" class="btn-add" data-bs-toggle="modal" data-bs-target="#modal-add">ADD</button>
            </div>
        </div>
        <table class="table-spacing text-center scroll">
            <thead>
                <tr>
                    <th class="col-lg-4">Questions</th>
                    <th class="col-lg-4">Answers</th>
                    <th class="col-lg-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>What is Tech-Ployment?</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae accusantium voluptatum delectus reprehenderit blanditiis ipsa corporis fuga recusandae. Totam, cumque!</td>
                    <td>
                        <button type="submit" title="Edit"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button type="submit" title="Delete" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>What does Tech-Ployment do?</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, perspiciatis qui corporis neque nobis quidem necessitatibus quas nulla impedit voluptatum.</td>
                    <td>
                        <button type="submit" title="Edit"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button type="submit" title="Delete" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-between px-4 div2 pt-3">
            <div>
                <h6 class="systems mt-2">Application Process:</h6>
            </div>
            <div>
                <button type="submit" class="btn-add" data-bs-toggle="modal" data-bs-target="#modal-add">ADD</button>
            </div>
        </div>
        <table class="table-spacing text-center">
            <thead>
                <tr>
                    <th class="col-lg-4">Questions</th>
                    <th class="col-lg-4">Answers</th>
                    <th class="col-lg-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>What is Tech-Ployment?</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae accusantium voluptatum delectus reprehenderit blanditiis ipsa corporis fuga recusandae. Totam, cumque!</td>
                    <td>
                        <button type="submit" title="Edit"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button type="submit" title="Delete" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>What does Tech-Ployment do?</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, perspiciatis qui corporis neque nobis quidem necessitatibus quas nulla impedit voluptatum.</td>
                    <td>
                        <button type="submit" title="Edit"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button type="submit" title="Delete" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-between px-4 div2 pt-3">
            <div>
                <h6 class="systems mt-2">Interview:</h6>
            </div>
            <div>
                <button type="submit" class="btn-add" data-bs-toggle="modal" data-bs-target="#modal-add">ADD</button>
            </div>
        </div>
        <table class="table-spacing text-center">
            <thead>
                <tr>
                    <th class="col-lg-4">Questions</th>
                    <th class="col-lg-4">Answers</th>
                    <th class="col-lg-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>What is Tech-Ployment?</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae accusantium voluptatum delectus reprehenderit blanditiis ipsa corporis fuga recusandae. Totam, cumque!</td>
                    <td>
                        <button type="submit" title="Edit"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button type="submit" title="Delete" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>What does Tech-Ployment do?</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, perspiciatis qui corporis neque nobis quidem necessitatibus quas nulla impedit voluptatum.</td>
                    <td>
                        <button type="submit" title="Edit"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button type="submit" title="Delete" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-between px-4 div2 pt-3">
            <div>
                <h6 class="systems mt-2">General Questions for Job Seekers:</h6>
            </div>
            <div>
                <button type="submit" class="btn-add" data-bs-toggle="modal" data-bs-target="#modal-add">ADD</button>
            </div>
        </div>
        <table class="table-spacing text-center">
            <thead>
                <tr>
                    <th class="col-lg-4">Questions</th>
                    <th class="col-lg-4">Answers</th>
                    <th class="col-lg-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>What is Tech-Ployment?</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae accusantium voluptatum delectus reprehenderit blanditiis ipsa corporis fuga recusandae. Totam, cumque!</td>
                    <td>
                        <button type="submit" title="Edit"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button type="submit" title="Delete" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>What does Tech-Ployment do?</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, perspiciatis qui corporis neque nobis quidem necessitatibus quas nulla impedit voluptatum.</td>
                    <td>
                        <button type="submit" title="Edit"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button type="submit" title="Delete" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
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
                    <button type="button" class="yes-no btn btn-danger" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body edit-detail">
                    <div class="container">
                        <form class="container"><br>
                            <h2 class="text-black text-center mt-2 fw-bold">Add a FAQ</h2>
                            <hr>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="jobcategory" class="col-sm-3 ">Systems</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="jobcategory">
                                </div>
                            </div>
                        </form>
                    </div><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success save">ADD</button>
                        <button type="button" class="close btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidebar").style.left = "0";
            document.getElementById("main").style.marginLeft = "400px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.left = "-100%";
            document.getElementById("main").style.marginLeft = "250px";
        }
    </script>

    <script src="js/navbar.js"></script>
    <script src="../js/preloader.js"></script>
</body>

</html>