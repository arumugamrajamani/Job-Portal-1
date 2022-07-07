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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Post a job</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container-fluid"> 
            <a class="navbar-brand me-1" href="#"></a>
            <img src="image/flogo.png" alt="Job Portal Logo" width="100" height="70"></a>
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
                        <a class="nav-link text-dark message active" aria-current="page" href="message-employer.php">MESSAGE</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link text-dark about active" href="postajob.php">POST A JOB</a>
                    </li>             
                    <li class="nav-item account dropdown active">
                    <a class="nav-link text-dark dropdown-toggle account active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="image" src="image/profileicon1.png" alt="Profile" width="50" height="30"> ACCOUNT</a>
                    <ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-light" href="company-profile.php">FULL NAME</a></li>
                        <li><hr class="dropdown-divider bg-white"></li>
                        <li><a class="dropdown-item text-light" href="jobmanage.php">JOB MANAGEMENT</a></li>
                        <li><a class="dropdown-item text-light" href="manage-applicant-resume.php">MANAGE RESUME</a></li>
                        <li><a class="dropdown-item text-light" href="manage-account-profile.php">MANAGE ACCOUNT PROFILE</a></li>
                        <li><a class="dropdown-item logout text-light" href="#">LOGOUT</a></li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
        <br>
    <div class="container bg-white con1"><br>
    <form id="main-form" class="ajax-form" action="php/postajob.inc.php" method="POST">
        <div class="container p-md-5 mt-4 shadow" id="container" >
                <div  class=" col-auto text-center">
                    <h2>POST YOUR JOB HERE</h2>
                </div>
                <div class="row w-75 m-lg-auto">
                    <div class="row-md-6 mt-4 text-center">
                        <div class="form-group text-uppercase fw-bold text-center">
                            <label for="first">Company</label>
                            <input type="text" name="companyName" class="form-control" placeholder="Company Name" id="companyname">
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="form-group text-uppercase fw-bold text-center">
                            <label for="first">job title</label>
                            <input type="text" name="jobTitle" class="form-control" placeholder="Who do you need ?" id="first">
                        </div>
                    </div>
                    <!--  col-md-6   -->
                    <div class="col-md-6 text-center mt-3">
                        <label class=" text-uppercase fw-bold " for="Type">Type of employment</label>
                        <select class="form-select" name="employment" id="floatingSelect" aria-label="Floating label select example">
                            <option class="form-floating" aria-posinset="Any" selected>Any</option>
                            <option value="fullTime">Full Time</option>
                            <option value="partTime">Partime</option>
                            <option value="freelance">Freelance</option>
                        </select>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="form-group text-uppercase fw-bold text-center">
                            <label for="first">JOB CATEGORY</label>
                            <input type="text" name="jobCategory" class="form-control" placeholder="Job Category" id="jobcategory">
                        </div>
                    </div>
                    <!--  col-md-6   -->
                </div>    
                <div class="row w-75 m-lg-auto">
                    <div class=" col-lg-12">
                        <div class="form-group">
                            <div class="mb-3 text-center mt-5">
                                <label for="exampleFormControlTextarea1" class="text-uppercase fw-bold jobdes">Job Description</label>
                                <textarea class="form-control text-center text1" name="jobDescription" id="exampleFormControlTextarea1" rows="3" placeholder="Describe the job to be done"></textarea>
                            </div>
                        </div>          
                    </div>
                </div>
                <!--  row   -->
                <div class="row w-75 m-lg-auto">
                    <div class="col-md-6">     
                        <div class="form-group text-uppercase fw-bold text-center">
                            <label for="salarywage">Salary/Wage</label>
                            <input type="salarywage" name="salaryWage" class="form-control text1" id="salarywage" placeholder="Indicate Currency">
                        </div>
                    </div>
                    <!--  col-md-6   -->    
                    <div class="col-md-6">
                        <div class="form-group text-uppercase fw-bold text-center">
                            <label for="email">Employers Email</label>
                            <input type="email" name="employerEmail" class="form-control text1" id="url" placeholder="Email">
                        </div>     
                    </div>
                    <!--  col-md-6   -->
                </div>
            
        </div>
        <div class="container p-md-5 mt-4 text-center shadow" id="container">
            
                <div  class="col-auto text-center">
                    <h2>JOB SKILL REQUIREMENTS</h2>
                </div>
                <br><br>
                <div class="row w-75 m-lg-auto">
                    <div class="col-md-6">            
                    <select  class="form-select" name="primarySkill" aria-label="Default select example" id="primarySkill">
                        <option selected disabled>Primary Skill</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    </div>
                    <!--  col-md-6   -->
                    <div class="col-md-6">
                    <select  class="form-select" name="secondarySkill" aria-label="Default select example" id="secondarySkill">
                        <option selected disabled>Secondary Skill</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    </div>
                </div>
                <div class="col text-center">
                    <button type="submit" class="btn mt-4 btn1" id="submit">SUBMIT</button>
                </div>
            </div>  
        </div><br>
    </form>
    <script src="js/postajob.js"></script>
</body>
</html>