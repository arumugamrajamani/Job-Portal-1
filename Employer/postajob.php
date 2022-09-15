<?php include_once 'include/login_session.php'; ?>
<!doctype html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,455;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/postajob.css">
    <title>Post a job</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container-fluid"> 
            <a class="navbar-brand me-1" href="#"></a>
            <img class="logo" src="image/light-logo.png" alt="Job Portal Logo" width="100" height="70" id="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="d-flex">      
                <input class="form-control icon i-search" type="search" placeholder="Search for a job title" aria-label="Search">
                <button class="btn text-dark search" type="submit"><i class="bi bi-search"></i></button>
            </form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-4">
                        <a class="nav-link text-dark message active" aria-current="page" href="message-employer.html">MESSAGE</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link text-dark about active" href="postajob.html">POST A JOB</a>
                    </li>             
                    <li class="nav-item account dropdown active">
                        <a class="nav-link text-dark dropdown-toggle account active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ACCOUNT</a>
                        <ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-dark" href="/Employer/company-profile.html"> My Profile</a></li>
                            <li><hr class="dropdown-divider bg-black"></li>
                            <li><a class="dropdown-item text-dark" href="manage-account-profile.html"> Edit Profile</a></li>
                            <li><a class="dropdown-item text-dark" href="reset-password.html"> Change Password</a></li>
                            <li><a class="dropdown-item text-dark" href="manage-applicant-resume.html"> Manage Resume</a></li>
                            <li><a class="dropdown-item text-dark" href="jobmanage.html"> Job Management</a></li>
                            <li><a class="dropdown-item text-dark" href="job-applicant.html">Job Applicants</a></li>
                            <li><a class="dropdown-item logout text-dark" href="/Landing-Page/login.html"> Log Out</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="swits me-5">
                            <div class = 'toggle-switch'>
                                <label class="lab">
                                  <input class="dar" type = 'checkbox' onclick="toggleImage()">
                                  <span id="icon2" class = 'slider'></span>
                                </label>
                              </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <br>
    <div class="container bg-white con1"><br>
        <div class="container p-md-5 mt-4 shadow" id="container" >
            <form id="main-form">
                <div  class=" col-auto text-center">
                    <h2>POST YOUR JOB HERE</h2>
                </div>
                <div class="row w-75 m-lg-auto">
                    <div class="row-md-6 mt-4 text-center">
                        <div class="form-group text-uppercase fw-bold text-center">
                            <label for="first">Company</label>
                            <input type="text" class="form-control" placeholder="Company Name" id="companyname">
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="form-group text-uppercase fw-bold text-center">
                            <label for="first">job title</label>
                            <input type="text" class="form-control" placeholder="Job Position you need" id="first">
                        </div>
                    </div>
                    <!--  col-md-6   -->
                    <div class="col-md-6 text-center mt-3">
                        <label class=" text-uppercase fw-bold " for="Type">Type of employment</label>
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option class="form-floating" aria-posinset="Any" selected>Any</option>
                            <option value="1">Full Time</option>
                            <option value="2">Partime</option>
                            <option value="3">Freelance</option>
                        </select>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="form-group text-uppercase fw-bold text-center">
                            <label for="first">JOB CATEGORY</label>
                            <input type="text" class="form-control" placeholder="Job Category" id="jobcategory">
                        </div>
                    </div>
                    <!--  col-md-6   -->
                </div>    
                <div class="row w-75 m-lg-auto">
                    <div class=" col-lg-12">
                        <div class="form-group">
                            <div class="mb-3 text-center mt-5">
                                <label for="exampleFormControlTextarea1" class="text-uppercase fw-bold jobdes">Job Description</label>
                                <textarea class="form-control text-center text1" id="exampleFormControlTextarea1" rows="3" placeholder="Describe the job to be done"></textarea>
                            </div>
                        </div>          
                    </div>
                </div><br>
                <!--  row   -->
                <div class="row w-75 m-lg-auto">
                    <div class="col-md-6">     
                        <div class="form-group text-uppercase fw-bold text-center">
                            <label for="salarywage">Salary/Wage</label>
                            <input type="salarywage" class="form-control text1" id="salarywage" placeholder="Indicate Currency">
                        </div>
                    </div>
                    <!--  col-md-6   -->    
                    <div class="col-md-6">
                        <div class="form-group text-uppercase fw-bold text-center">
                            <label for="email">Employers Email</label>
                            <input type="url" class="form-control text1" id="url" placeholder="Email">
                        </div>     
                    </div>
                    <!--  col-md-6   -->
                </div>
            </form>
        </div>
        <div class="container p-md-5 mt-4 text-center shadow" id="container">
            <form id="main-form">
                <div  class="col-auto text-center">
                    <h2>JOB SKILL REQUIREMENTS</h2>
                </div>
                <br><br>
                <!--Added-->
                <div class="form-group box">
                    <label class="skill_label">Skill</label>
                    <input type="text" name="skill[]" id="skill_0" class="input form-control" placeholder="Add a skill">
                    <input type="button" class="addbtn" value="+" onclick="addSkill()">
                </div>
                <div id="skills"></div>
                <div class="col text-center">
                    <button class="btn mt-4 btn1" id="submit">SUBMIT</button>
                </div><br>
            </form>
        </div>  
    </div><br>
    
    <script>
        var icon2 = document.getElementById("icon2");
        var counter = 1; 
        var textbox = ""; 
        var skills = document.getElementById("skills") 

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

        // To add a textbox 
        function addSkill() {
            var div = document.createElement("div");
            div.setAttribute("class","form-group");
            div.setAttribute("id","box_"+counter);

            textbox = " <div class='form-group box'><label class='skill_label'>Skill</label><input type='text' name='skill[]' class='input form-control input'id='skill_0'"+counter+"' placeholder='Add a skill'>"+
            "<input type='button' class='removebtn' value='-' onclick='removeSkill(this)'></div>";
            
            div.innerHTML = textbox;

            skills.appendChild(div);

            counter++;
        }

        //To remove a textbox 
        function removeSkill(e) {
            console.log(e.parentNode.remove());
        }

    </script>
    
</body>
</html>