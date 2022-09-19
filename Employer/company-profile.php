<?php 
    include_once 'include/login-session-Employer.php';
    include_once 'include/header-Employer.php'; 
    include_once "../php/db-connection.php";
?>

<body>
    <?php include_once '../include/preloader-display.php'; ?>   
    <div class="color-overlay">
        <?php include_once 'include/navbar-Employer.php'; ?>
    </div><br>

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
    
    <?php include_once 'include/footer-Employer.php' ?>    
</body>
</html>