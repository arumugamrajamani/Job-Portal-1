<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/resume-builder4.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,700;1,400;1,600&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-1" id="nav0">
        <div class="container-fluid" id="inner" style="display: flex; justify-content: space-between;">
          <div style="margin-left: 10px;">
          <img class="img" src="image/Dark_Theme_Logo.png" alt="Job Portal Logo"id="logo" style="max-width: 95px; max-height: auto;"></a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border-color: transparent;">
            <img src="/Resume-Builder/image/burger.png" alt="" width="40px" height="auto" id="burger">
          </button>
          <form class="d-flex searchbar" id="sea">
            <input class="form-control icon" type="search" placeholder="Search for a job title" aria-label="Search">
            <button class="btn text-dark fw-bold search" type="submit"><img src="image/bx-search.png" alt="Search" width="24" class="bts"></button>
          </form>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item1 me-0">
                <a class="nav-link text-dark message active fw-bold" aria-current="page" href="../Jobseeker/message-jobseekers.php">MESSAGE</a>
              </li>
              <li class="nav-item1 fw-bold">
                <a class="nav-link text-dark about active" href="../Jobseeker/searchjob.php">JOB POST</a>
              </li>
              <li class="nav-item account dropdown active">
                <a class="nav-link text-dark fw-bold dropdown-toggle account active" href="#" id="navbarDropdown"
                  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img class="image" src="image/Copy_of_Parungao_Fernando.png" alt="Profile" width="55" height="55"> Fernando Parungao</a>
                <ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item text-light" href="../Jobseeker/applicant-profile.php">FULL NAME</a></li>
                  <li>
                    <hr class="dropdown-divider bg-white">
                  </li>
                  <li><a class="dropdown-item text-light" href="../Jobseeker/manage-account-1.php">ACCOUNT SETTINGS</a></li>
                  <li><a class="dropdown-item text-light" href="../Jobseeker/jobapplication.php">JOB APPLICATIONS</a></li>
                  <li><a class="dropdown-item logout text-light" href="../Jobseeker/manage-account-2.php">CHANGE PASSWORD</a></li>
                  <li><a class="dropdown-item text-light" href="../Jobseeker/bookmark-job.php">BOOKMARKED JOBS</a></li>
                  <li><a class="dropdown-item text-light" href="../Jobseeker/manage-resume-jobseeker.php">MANAGE RESUME</a></li>
                  <li><a class="dropdown-item logout text-light" href="../logout.php">LOGOUT</a></li>
                </ul>
            </ul>
          </div>
        </div>
      </nav>
      <div class="main-cont" style="width: 100%; height: auto; display: flex; flex-direction:row;" >
        <div class="cont" style="background-color: #182531; width: 420px; height: 100%; padding: 10px;">
          <div class="cont1" style="margin-top: 6rem;">
            <nav class="sidebar">
            <a href="resume-builder1.php" class="sidebar--links">Resume Template 1</a>
              <a href="resume-builder2.php" class="sidebar--links">Resume Template 2</a>
              <a href="resume-builder3.php" class="sidebar--links">Resume Template 3</a>
              <a href="resume-builder4.php" class="sidebar--links">Resume Template 4</a>
              <a href="resume-builder5.php" class="sidebar--links">Resume Template 5</a>
              <a href="resume-builder6.php" class="sidebar--links">Resume Template 6</a>
              <a href="resume-builder7.php" class="sidebar--links">Resume Template 7</a>
              <a href="seemore.php" class="sidebar--links1">Show more resume builder...</a>
            </nav>
          </div>
        </div>
        <div class="main">
            <div class="cont2">
                <div class="head">
                <h1>Morgan Mooreon</h1>
                <h2>IT Specialist</h2>
                </div>
                <div>
                    <div class="pic"><h3>Insert 2x2 Picture</h3></div>
                </div>
            </div>
            <div class="cont3">
                <div class="bio">
                    <ul class="t">About Me
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </ul>
                    <ul class="t">Experience
                        <li class="compa">Company Name 2017 - 2020</li>
                        <span>Job Position</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                    </ul>
                    <ul class="t">Education
                        <div style="display: flex;">
                        <div class="date">
                            <li class="d">2015</li>
                            <span>University Name</span>
                            <li class="d">2015</li>
                            <span>University Name</span>
                            <li class="d">2015</li>
                            <span>University Name</span>
                        </div>
                        <div class="des">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    </ul>
                </div>
                <div class="co">
                    <ul class="t1">Contact
                        <li class="ph">Phone</li>
                        <li class="ph">*123-456-7890</li>
                    </ul>
                    <ul class="t1">Email
                        <li class="ph">himyemail@yahoo.com</li>
                    </ul>
                    <ul class="t1">Address
                        <li class="ph">123 Anywhere St., Any City</li >
                    </ul>
                    <ul class="t1">Expertise
                        <li class="ph1">UI/ UX</li>
                        <li class="ph1">User Flow</li>
                        <li class="ph1">Process Flow</li>
                        <li class="ph1">Visual Design</li>
                        <li class="ph1">Leadership</li>
                    </ul>
                    <ul class="t1">Language</ul>
                    <div style="display: flex;">
                        <div>
                    <li class="lang">Filipino (Tagalog)</li>
                    <li class="lang">English</li>
                    </div>
                    <div class="lin">
                        <div class="sta"><div class="blue"></div></div>
                        <div class="sta"><div class="blue1"></div></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
      </div>
</body>
</html>