<?php
require './../php/db-connection.php';
session_start();
$employerId = $_SESSION['user_id'];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM employer WHERE employer_id = '$employerId'"));
?>

<!doctype html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/e5ed048aee.js" crossorigin="anonymous"></script>
    <!--Font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,455;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <!-- Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/company-profile.css">
    <!-- jQuery cdn link below -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Toast CDN for functionality of toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Company Profile</title>
</head>
<body>
    <?php include_once '../include/preloader-display.php'; ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container-fluid"> 
            <a class="navbar-brand me-1" href="#"></a>
            <img src="image/light-logo.png" alt="Job Portal Logo" width="100" height="70" id="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="d-flex">      
                <input class="form-control icon" type="search" placeholder="Search for a job title" aria-label="Search">
                <button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
            </form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-4"><a class="nav-link text-dark  message active" aria-current="page" href="message-employer.php">MESSAGE</a></li>
                    <li class="nav-item me-4"><a class="nav-link text-dark  about active" href="postajob.php">POST A JOB</a></li>             
                    <li class="nav-item account dropdown active">
                    <a class="nav-link text-dark  dropdown-toggle account active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img id="pfp" class="image" style="border-radius: 100px; object-fit: cover;" src="" alt="Profile" width="30" height="30"> ACCOUNT</a>
                    <ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
                        <li><a id="compname" class="dropdown-item text-light" href="company-profile.php"></a></li>
                        <li><hr class="dropdown-divider bg-white"></li>
                        <li><a class="dropdown-item text-light" href="jobmanage.php">JOB MANAGEMENT</a></li>
                        <li><a class="dropdown-item text-light" href="manage-applicant-resume.php">MANAGE RESUME</a></li>
                        <li><a class="dropdown-item text-light" href="manage-account-profile.php">EDIT PROFILE</a></li>
                        <li><a class="dropdown-item text-light" href="change-password.php">CHANGE PASSWORD</a></li>
                        <li><a class="dropdown-item logout text-light" href="../logout.php">LOGOUT</a></li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container bg-white my-4"> <br>
        <div class="banner mx-5">
            <div class="btn div1 text-end">
                <button id="edit-profile-btn" class="btn">
                <i id="editProfile" class="fa fa-pen-to-square"></i>
                </button>
            </div>
            <div class="d-flex">
                <form class="form" id = "form" action="" enctype="multipart/form-data" method="post">
                <div class="upload" style="
                    height: 200px;
                    width: 200px;
                    position: relative;
                    ">
                    <?php

                    $name = $user["employer_name"];
                    $image = $user["company_logo_name"];
                    ?>
                    
                    <img src="../storage/<?php echo $image; ?>" width = 200 height = 200 id="company_logo_name" style="
                        border-radius: 50%;
                        border: 8px solid #ffffff;
                        ">
                        <div class="round" style="
                            position: absolute;
                            bottom: 0;
                            right: 0;
                            background: #00B4FF;
                            width: 50px;
                            height: 50px;
                            line-height: 33px;
                            text-align: center;
                            border-radius: 50%;
                            
                            ">
                            <input type="hidden" name="id" value="<?php echo $employerId; ?>">
                            <input type="hidden" name="name" value="<?php echo $name; ?>">
                            <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" style="
                                position: absolute;
                                transform: scale(2);
                                opacity: 0;
                                width:24px;
                                height:24px;
                                bottom:13px;
                                right:13px;
                                ">
                            <i class = "fa fa-camera" style = "color: #fff; font-size:32px; margin: 8px 0 0 1px" ></i>
                        </div>
                </div>
                </form>
                <script type="text/javascript">
                    document.getElementById("image").onchange = function(){
                    document.getElementById("form").submit();
                    };
                </script>
                <?php
                function InsertIntoStorage($tmp_name, $filename)
                {
                    //$target_directory = "../storage/";
                    $path =  "../storage/" . $filename;
                    move_uploaded_file($tmp_name, $path);
                }
    if(isset($_FILES["image"]["name"])){
      $name = $_POST["name"];

      $imageName = $_FILES["image"]["name"];
      $imageSize = $_FILES["image"]["size"];
      $tmpName = $_FILES["image"]["tmp_name"];

      // Image validation
      $validImageExtension = ['jpg', 'jpeg', 'png'];
      $imageExtension = explode('.', $imageName);
      $imageExtension = strtolower(end($imageExtension));
      if (!in_array($imageExtension, $validImageExtension)){
        echo
        "
        <script>
          alert('Invalid Image Extension');
          document.location.href = 'company-profile.php';
        </script>
        ";
      }
      elseif ($imageSize > 2000000){
        echo
        "
        <script>
          alert('Image Size Is Too Large');
          document.location.href = '    company-profile.php';
        </script>
        ";
      }
      else{
        $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
        $newImageName .= '.' . $imageExtension;
        $updateEmployerDetailsQuery = mysqli_query($conn, "UPDATE employer SET company_logo_name = '$newImageName' WHERE employer_id = '{$_SESSION['user_id']}'");
        InsertIntoStorage($_FILES["image"]["tmp_name"], $newImageName);
        echo
        "
        <script>
        document.location.href = 'company-profile.php';
        </script>
        ";
      }
    }
    ?>
                <!-- <img class="company_logo mx-5 fa-5x" src="" id="company_logo_name"></img> -->
                <div class="block info text-center">
                    <h4 class="fw-bold" id="employer_name"></h4>
                    <h5 id="employer_position"></h5>
                    <h5 id="company_address"></h5>
                </div>
            </div>
            <br>
                <!-- <div class="block position-relative div2">
                    <div class="position-absolute bottom-0 end-0 ">
                        <button class="my-5 mx-3 shadow btn1 fw-bold" type="button" onclick="location.href='message-new.php'">Send Message</button> 
                    </div>
                    <div class="position-absolute bottom-0 end-0">
                        <button class=" mx-3 shadow btn2 text-dark fw-bold" type="button">Follow</button>
                    </div>
                </div> -->
        </div>
        <div class="row">
            <div class="column">
                <div class="mt-2 mx-5 text-center company1">
                    <h4 class="pt-3" id="company_name"></h4>
                </div>
            </div>
            <div class="column">
                <div class="mt-2 p-2 mx-5 company2 row">
                    <label class="pt-3 column" id="contact_number"></label>
                    <label class="pt-3 column" id="email"></label>
                </div>
            </div>
            <div class="column">
                <div class=" mx-5 company3">
                    <label class="pt-3 p-4" id="company_description"></label>
                </div>
            </div>
        </div>
        <hr><br>
        <section class="sec2 mx-5 text-center shadow-sm">
            <div class="div3">
                <h5 class="pt-2 fw-bold">BOOKMARKED APPLICANTS</h5>
                <label class="pb-2 fw-bold">(Visible to employer only)</label>
                <div class="table-responsive" id="no-more-tables">
                <table class="table basic-table table-headers table table-hover">
                    <thead class="thead text-dark text-center" id="title-sub">
                        <tr>
                            <th>Applicant Name</th>
                            <th>Resume</th>
                            <th>Job Applied</th>
                            <th>Date Applied</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody class="tbody bg-light text-dark" id="bookmark"></tbody>
                </table>
            </div>
            </div>
        </section>
        <section class="sec2 mx-5 text-center shadow-sm mt-5">
            <div class="div4">
                <h5 class="pt-4 fw-bold">RECENT JOB POST</h5>
            </div>
            <div class="table-responsive" id="no-more-tables">
                <table class="table basic-table table-headers table table-hover">
                    <thead class="thead text-dark text-center" id="title-sub">
                        <tr>
                            <th>Company Name</th>
                            <th>Job Title</th>
                            <th>Employent Type</th>
                            <th>Job Category</th>
                            <th>Job Description</th>
                            <th>Salary</th>
                            <th>Employer Email</th>
                        </tr>
                    </thead>
                    <tbody class="tbody bg-light text-dark" id="body-h"></tbody>
                </table>
            </div>
        </section><br>
    </div>
    </div>
    <div class = 'toggle-switch'>
        <label class="lab">
          <input class="dar" type = 'checkbox' onclick="toggleImage()">
          <span id="icon2" class = 'slider'></span>
        </label>
    </div>
    <script>
        var icon2 = document.getElementById("icon2");

icon2.onclick = function() {
    document.body.classList.toggle("dark-theme")
}
function toggleImage() {
        imgsrc= document.getElementById("logo").src;
        if (imgsrc.indexOf("image/light-logo.png") !=-1){
          document.getElementById("logo").src = "image/Techployment (7) 1.png";
        }
        else{
          document.getElementById("logo").src = "image/light-logo.png";
        }
    }
    </script>
    <script src="js/company-profile.js"></script>
</body>
</html>