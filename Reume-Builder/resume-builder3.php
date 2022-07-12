<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Resume Builder 3</title>
    <link rel="stylesheet" href="css/resume-builder3.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3" id="nav0">
        <div class="container-fluid" id="inner">
          <a class="navbar-brand me-1" href="#"></a>
          <img class="img" src="image/Dark_Theme_Logo.png" alt="Job Portal Logo" width="95" height="90" id="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="image/burger.png" alt="" width="40px" height="50px" id="burger">
          </button>
          <form class="d-flex searchbar" id="sea">
            <input class="form-control icon" type="search" placeholder="Search for a job title" aria-label="Search">
            <button class="btn text-dark fw-bold search" type="submit"><img src="image/bx-search.png" alt="Search" width="24" class="bts"></button>
          </form>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item1 me-0">
                <a class="nav-link text-dark message active fw-bold" aria-current="page" href="message-jobseekers.php">MESSAGE</a>
              </li>
              <li class="nav-item1 fw-bold">
                <a class="nav-link text-dark about active" href="searchjob.php">POST A JOB</a>
              </li>
              <li class="nav-item account dropdown active">
                <a class="nav-link text-dark fw-bold dropdown-toggle account active" href="#" id="navbarDropdown"
                  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img class="image" src="image/Copy_of_Parungao_Fernando.png" alt="Profile" width="55" height="55"> Fernando Parungao</a>
                <ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item text-light" href="applicant-profile.php">FULL NAME</a></li>
                  <li>
                    <hr class="dropdown-divider bg-white">
                  </li>
                  <li><a class="dropdown-item text-light" href="jobapplication.php">JOB APPLICATIONS</a></li>
                  <li><a class="dropdown-item text-light" href="bookmark-job.php">BOOKMARKED JOBS</a></li>
                  <li><a class="dropdown-item text-light" href="manage-account-1.php">ACCOUNT SETTINGS</a></li>
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
              <a href="seemore.php" class="sidebar--links1">Show more resume builder...</a>
            </nav>
          </div>
        </div>
        <div class="cont2" style="width: 595px; height: 842px; display: flex; flex-direction: column; background-color:#00d7e2;">
          <div class="cont2-1">
            <div class="cont2-2" style="margin-right: 10px;">
              <img class="pic" src="image/profile1.png" alt="">
            </div>
            <div class="juan" style="margin-top: 40px;">
              <h1>Juan Dela Cruz</h1>
              <h2>Bussiness Analyst</h2>
              <div class="contact" style="display: flex; height: 21px; background-color: white;">
                <h3>Phone: 09167341489</h3>
                <h3>-Email: hamztrayco0808@gmail.com</h3>
              </div>
            </div>
          </div>
          <div class="marg" style="margin-top: 63px;">
          <div class="cont3">
            <img class="pee" src="image/user 1.png" alt="" style="margin-top: 5px;">
            <span>PROFILE</span>
          </div>
          <div>
            <h4>No, I don't say it often And I probably should've told you I hurt this bad, I know And I probably shouldn't want this so bad It's weighing, weighing on me Don't wanna wake up in the morning Cannot undo what we did in this bed And I can't get you out  So I gotta go No, I'm not ready for You want me all alone. But I'm undecided, excited, ignited And I don't wanna feel the way I do. No, I don't say it often And I probably should've told you I hurt this bad, I know And I probably. No, I don't say it often And I probably should've told you I hurt this bad, I know And I probably . No, I don't say it often And I probably should've told you I hurt this bad, I know.</h4>
          </div>
          <div class="cont3">
            <img class="pee" src="image/portfolio 3.png" alt="">
            <span>EDUCATION</span>
          </div>
          <table style="font-size: 11px;">
            <tr>
              <td>1999 - 2004</td>
              <td>School 1: University of Rizal Sytem Cainta</td>
            </tr>
            <tr>
              <td>2004 - 2010</td>
              <td>School 2: Sumulong Memorial High School</td>
            </tr>
          </table>
          <div class="cont3" style="margin-bottom: 25px; margin-top: 15px;"id="exp">
            <img class="pee" src="image/star 1.png" alt="">
            <span>EXPERIENCE</span>
          </div>
          <div style="display: flex; font-size: 11px;list-style: none;">
          <div class="comp" style="width: 100px;">
            <li>Company 1</li>
            <li>2006 - 2009</li>
          </div>
            <li style="align-self: center;">And I don't wanna feel the way I do But I like it Look at all these sparks flying But I'm still indecisive And she want me to wife it.</li>
        </div><br>
        <div style="display: flex; font-size: 11px;list-style: none;">
          <div class="comp" style="width: 100px;">
            <li>Company 2</li>
            <li>2006 - 2009</li>
          </div>
            <li style="align-self: center;">And I don't wanna feel the way I do But I like it Look at all these sparks flying But I'm still indecisive And she want me to wife it.</li>
        </div>
      </div>
      </div>
    </div>
      
</body>
</html>