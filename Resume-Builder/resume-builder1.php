<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/resume-builder1.css">
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
            <img src="image/burger.png" alt="" width="40px" height="auto" id="burger">
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
                <a class="nav-link text-dark about active" href="searchjob.php">POST A JOB</a>
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
                  <li><a class="dropdown-item text-light" href="../Jobseeker/jobapplication.php">JOB APPLICATIONS</a></li>
                  <li><a class="dropdown-item text-light" href="../Jobseeker/bookmark-job.php">BOOKMARKED JOBS</a></li>
                  <li><a class="dropdown-item text-light" href="../Jobseeker/manage-account-1.php">ACCOUNT SETTINGS</a></li>
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
              <a href="seemore.php" class="sidebar--links1">Show more resume builder...</a>
            </nav>
          </div>
        </div>
        <div class="cont2" style="width: 595px; height: 842px; display: flex; flex-direction: column;">
            <div class="cont2-1" style="width: 100%; height: 100%; background-color: #00D7E2; align-items: center;">
                <div class="header" style="width: 50%; margin-top: 35px; margin-left: 22px;">
                <h1 style="font-size: 30px; font-weight: 700;line-height: 37px; margin: 0;">Juan Dela Cruz</h1>
                <h2 style="font-size: 25px; font-weight: 200;line-height: 30px; margin: 0;">Business Analyst</h2>
                </div>
            </div>
            <div class="con2-2" style="width: 100%; height: 100%;display: flex; flex-direction: row;">
                <div class="con2-3" style="width: 65%; height: 701px; background-color: white; padding-left: 20px;">
                    <h3 style="font-size: 20px; margin-top: 35px; margin-bottom: 43px;">Background</h3>
                    <div>
                        <h4 style="font-size: 25px; font-weight: 600;">Work History</h4>
                    </div>
                    <div style="border-top: solid; margin-left: -20px;"></div>
                    <div class="hero" style=" width: 100%; padding-right: 10px; padding-top: 20px;">
                        <div>
                            <table>
                                <colgroup>
                                  <col span="2">
                                  <col >
                                </colgroup>
                                <tr>
                                  <th class="th1" style="width: 20%; text-align: left; font-size: 11px; font-weight: 400;">2016 -01 <br>- 2021-08</th>
                                  <th class="th2" style="font-size: 20px;">Business Analyst</th>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td><ul style="padding-left: 0;">
                                    <li class="lis" style="list-style:none;margin-bottom: 3px;">Dhillion & Kalita Solutions, New Delhi</li>
                                    <li class="lis">Gathered, cleaned, and analysed multi channel data to produce quarterly reports and identify areas for improvement.</li>
                                    <li class="lis">Gathered, cleaned, and analysed multi-channel data to produce quarterly reports and identify areas for improvement.</li>
                                    <li class="lis">Gathered, cleaned, and analysed multi-channel data to produce quarterly reports and identify areas for improvement.</li>
                                    <li class="lis">Gathered, cleaned, and analysed multi-channel data to produce quarterly reports and identify areas for improvement.</li>
                                    <div class="lit" style="font-size: 11px; margin-left: -8px;">
                                        <span id="key" style="font-weight: bold; font-size: 12px;">Key achievement: </span> <span>Conducted a full-scale audit of current procedures and saved 900 employee hours per month and $5,00,00/month in unnecessary expenses with no sacrifice in performance.</span>
                                    </div>

                                  </ul></td>
                                </tr>
                                <tr>
                                    <th class="th1" style="width: 20%; text-align: left; font-size: 11px; font-weight: 400;">2016 -01 <br>- 2021-08</th>
                                    <th class="th2" style="font-size: 20px;">Business Analyst</th>
                                  </tr>
                                  <tr>
                                    <td></td>
                                    <td><ul style="padding-left: 0;">
                                      <li class="lis1" style="list-style:none;margin-bottom: 3px;">Dhillion & Kalita Solutions, New Delhi</li>
                                      <li class="lis1">Gathered, cleaned, and analysed multi channel data to produce quarterly reports and identify areas for improvement.</li>
                                      <li class="lis1">Gathered, cleaned, and analysed multi-channel data to produce quarterly reports and identify areas for improvement.</li>
                                      <li class="lis1">Gathered, cleaned, and analysed multi-channel data to produce quarterly reports and identify areas for improvement.</li>
                                      <div class="lit" style="font-size: 11px; margin-left: -8px;">
                                          <span id="key" style="font-weight: bold; font-size: 12px;">Key achievement: </span> <span>Conducted a full-scale audit of current procedures and saved 900 employee hours per month and $5,00,00/month in unnecessary expenses with no sacrifice in performance.</span>
                                      </div>
                                    </ul></td>
                                  </tr>
                              </table>
                    
                        </div>
                    </div>
                </div>
                <div class="con2-4" style="width: 36%; height: 701px; background-color: #ECECEC;">
                        <div style="width: 100%; height: auto; align-self: center; padding: 15px;">
                        <img style="justify-self: center; width: 100%;" src="image/profile1.png" alt="">
                        </div>
                        <div class="con2-5" style="padding-left: 15px; padding-top: 25px;">
                        <span id="peri" style="font-size: 25px; font-weight: 700;">Personal Info</span>
                        <div class="bord" style="border-top: solid; margin-left: -15px;"></div>
                        <div>
                            <ul class="info">Email</ul>
                            <ul class="info">Phone</ul>
                            <ul class="info">Facebook</ul>
                            <ul class="info">Twitter</ul>
                            <ul class="info">Skills
                                <li class="skil"></li>
                                <li class="skil"></li>
                                <li class="skil"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>