<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/resume-builder5.css">
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
                <img class="mg" src="/Resume-Builder/image/profile1.png" alt=""><br><br>
                <ul class="cc">CONTACTS
                  <li class="coninfo"><img class="ci" src="/Resume-Builder/image/Vectorlocation.png" alt="">Naga City, Camarines Sur</li>
                  <li class="coninfo"><img class="ci" src="/Resume-Builder/image/Vectormobilep.png" alt="">09123456789</li>
                  <li class="coninfo"><img class="ci" src="/Resume-Builder/image/email.png" alt="">user@examplemail.com</li>
                  <li class="coninfo"><img class="ci" src="/Resume-Builder/image/Vectorfb.png" alt="">facebook.com/username</li>
                </ul>
                <ul class="cc">LANGUAGES
                  <li class="coninfo">English</li>
                  <li class="coninfo">Filipino</li>
                </ul>
                <ul class="cc">SKILLS
                  <li class="coninfo">Microsoft Office</li>
                  <ul>
                    <li class="of">Word</li>
                    <li class="of">Excel</li>
                    <li class="of">PowerPoint</li>
                  </ul>
                  <li class="coninfo">Adobe Illsutrator</li>
                  <li class="coninfo">UI Design</li>
                </ul>
                <ul class="cc">HOBBIES
                  <li class="coninfo">Playing Chess</li>
                  <li class="coninfo">Reading Books</li>
                  <li class="coninfo">Wrting</li>
                  <li class="coninfo">Cooking</li>
                </ul>
              </div>
              <div class="cont3">
                <h1>Juan Dela Cruz</h1>
                <h2>UI Designer </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris maximus justo vitae metus facilisis dictum. Suspendisse vel nunc in magna pulvinar maximus blandit a velit. Aliquam erat volutpat. Morbi nec cursus lectus. </p>
                <div class="tit">
                  <div class="t">EDUCATION</div> 
                  <ul class="lu">
                    <li class="coninfo1">1995-1998</li>
                    <li class="coninfo1">Lorem ipsum dolor sit amet </li>
                    <li class="coninfo1">Dolor sit a met adipiscing elit. Mauris maximus justo 
                      vitae metus facilisis dictum. </li>
                  </ul>
                  <ul class="lu">
                    <li class="coninfo1">1998-2000</li>
                    <li class="coninfo1">Lorem ipsum dolor sit amet </li>
                    <li class="coninfo1">Dolor sit a met adipiscing elit. Mauris maximus justo 
                      vitae metus facilisis dictum. </li>
                  </ul>
                </div>
                <div class="tit">
                  <div class="t">WORK EXPERIENCE</div>
                  <ul class="lu">
                    <li class="coninfo1">2003-2008</li>
                    <li class="coninfo1">Lorem ipsum dolor sit amet </li>
                    <li class="coninfo1">Dolor sit a met adipiscing elit. Mauris maximus justo 
                      vitae metus facilisis dictum. </li>
                  </ul>
                  <ul class="lu">
                    <li class="coninfo1">2003-2008</li>
                    <li class="coninfo1">Lorem ipsum dolor sit amet </li>
                    <li class="coninfo1">Dolor sit a met adipiscing elit. Mauris maximus justo 
                      vitae metus facilisis dictum. </li>
                  </ul>
                  <ul class="lu">
                    <li class="coninfo1">2003-2008</li>
                    <li class="coninfo1">Lorem ipsum dolor sit amet </li>
                    <li class="coninfo1">Dolor sit a met adipiscing elit. Mauris maximus justo 
                      vitae metus facilisis dictum. </li>
                  </ul>
                </div>
                <div class="tit">
                  <div class="t">AWARDS</div>
                  <li class="award">July 20, 2009 - Lorem ipsum dolor sit amet </li>
                  <li class="award">June 20, 2010 - Lorem ipsum dolor sit amet </li>
                  <li class="award">February 3, 2015 - Lorem ipsum dolor sit amet </li>
                </div>
              </div>
            </div>
      </div>
</body>
</html>