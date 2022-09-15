<?php include_once 'include/login_session.php'; ?>
<!doctype html>
<html lang="en" data-theme="light">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/jobapplication.css">
  <title>Job application</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container-fluid">
      <a class="navbar-brand me-1" href="#"></a>
      <img src="image/flogo.png" onclick="window.location.href='applicant-profile.php'" alt="Job Portal Logo" width="100" height="70">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="d-flex">
        <input class="form-control icon" type="search" placeholder="Search for a job title" aria-label="Search">
        <button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
      </form>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item me-0">
            <a class="nav-link  message active " aria-current="page" href="message-jobseekers.php">MESSAGE</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  about active text-center" href="jobcategories.php">JOB BOARD</a>
          </li>
          <li class="nav-item account dropdown active">
            <a class="nav-link dropdown-toggle account active" href="#" id="navbarDropdown"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="image" src="image/profileicon1.png" alt="Profile" width="50" height="30"> ACCOUNT</a>
              <ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-start" href="applicant-profile.php"> Full Name</a></li>
                <li>
                  <hr class="dropdown-divider bg-black">
                </li>
                <li><a class="dropdown-item text-start" href="manage-account-1.php"> Edit Profile</a></li>
                <li><a class="dropdown-item text-start" href="manage-account-2.php"> Change Password</a></li>
                <li><a class="dropdown-item text-start" href="jobapplication.php"> Job Applications</a></li>
                <li><a class="dropdown-item text-start" href="bookmark-job.php"> Bookmarked jobs</a></li>
                <li><a class="dropdown-item text-start" href="resume.php"> Manage Resume</a></li>
                <li><a class="dropdown-item logout text-start" href="#"> LOGOUT</a></li>
              </ul>
              <li>
                <!-- Transferred -->
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
  <!--<div class = 'toggle-switch'>
    <label class="lab">
      <input class="dar" type = 'checkbox' name="theme" onclick="toggleImage()">
      <span id="icon2" class = 'slider'></span>
    </label>
  </div>-->
  <br>

  <div class="container p-md-5 mt-4" id="container">
    <form id="main-form">
      <div class=" col-auto cols">
        <section class="type p-1">
          <div class="bg-color-header">
            <h3 class="job-A"><b>JOB APPLICATIONS</b>
              <div class="input-group">
                <div div class="form-outline">
                  <input type="search" id="form1" placeholder="Search here" class="form-control"/>
                </div>
                <button type="button" class="btn2">
                  <i class="bi bi-search"></i>
                </button>
              </div>
            </h3>
            <div class="table-responsive" id="no-more-tables">
              <table class="table basic-table table-headers table table-hover">
                <thead class="text-dark text-center" id="title-sub">
                  <tr>
                    <th>Employer</th>
                    <th>Job Tittle</th>
                    <th>Job Description</th>
                    <th>Date Applied</th>
                    <th>Status</th>
                    <th>Interview Schedule</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="text-dark text-center" id="body-h">
                  <tr class="tr1">
                    <td data-title="Employer" class="employ"><i class="fa-solid fa-circle-user profile"></i>Full Name
                    </td>
                    <td data-title="Job Tittle">Administrative Assistant</td>
                    <td data-title="Job Description">Lorem, ipsum dolor.</td>
                    <td data-title="Date Applied">5/04/2022</td>
                    <td data-title="Job Description">Received</td>
                    <td data-title="Interview Schedule"></td>
                    <td data-title="Action"><button class="btn" type="button" id="btn-info"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">Withdrawn</button></td>
                  </tr>
                </tbody>
                <tbody class="text-dark text-center" id="body-h">
                  <tr class="tr1">
                    <td data-title="Employer" class="employ"><i class="fa-solid fa-circle-user profile"></i>Full Name
                    </td>
                    <td data-title="Job Tittle">Voice Over Artist</td>
                    <td data-title="Job Description">Lorem ipsum dolor sit.</td>
                    <td data-title="Date Applied">5/05/2022</td>
                    <td data-title="Job Description">Viewed</td>
                    <td data-title="Interview Schedule"></td>
                    <td data-title="Action"><button class="btn" type="button" id="btn-info"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">Withdrawn</button></td>
                  </tr>
                </tbody>
                <tbody class="text-dark text-center" id="body-h">
                  <tr class="tr1">
                    <td data-title="Employer" class="employ"><i class="fa-solid fa-circle-user profile"></i>Full Name
                    </td>
                    <td data-title="Job Tittle">Youtube Video Script Writer</td>
                    <td data-title="Job Description">Lorem ipsum dolor sit.</td>
                    <td data-title="Date Applied">5/05/2022</td>
                    <td data-title="Job Description">For Interview</td>
                    <td data-title="Interview Schedule">06/13/2022</td>
                    <td data-title="Action"><button class="btn" type="button" id="btn-info"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">Withdrawn</button></td>
                  </tr>
                </tbody>
                <tbody class="text-dark text-center" id="body-h">
                  <tr class="tr1">
                    <td data-title="Employer" class="employ"><i class="fa-solid fa-circle-user profile"></i>Full Name
                    </td>
                    <td data-title="Job Tittle">Administrative Assistant</td>
                    <td data-title="Job Description">Lorem ipsum dolor sit.</td>
                    <td data-title="Date Applied">5/05/2022</td>
                    <td data-title="Job Description">Shortlisted</td>
                    <td data-title="Interview Schedule"></td>
                    <td data-title="Action"><button class="btn" type="button" id="btn-info"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">Withdrawn</button></td>
                  </tr>
                </tbody>
                <tbody class="text-dark text-center" id="body-h">
                  <tr class="tr1">
                    <td data-title="Employer" class="employ"><i class="fa-solid fa-circle-user profile"></i>Full Name
                    </td>
                    <td data-title="Job Tittle">Administrative Assistant</td>
                    <td data-title="Job Description">Lorem ipsum dolor sit amet.</td>
                    <td data-title="Date Applied">5/05/2022</td>
                    <td data-title="Job Description">For Reference</td>
                    <td data-title="Interview Schedule"></td>
                    <td data-title="Action"><button class="btn" type="button" id="btn-info"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">Withdrawn</button></td>
                  </tr>
                </tbody>
              </table>
              <nav aria-label="Page navigation example">
                <div class="entries">
                  </span>Show 1 to 3 of 3 entries</span>
                </div>
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    <a class="page-link previous" href="#" tabindex="-1">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link num text-dark" href="#">1</a></li>
                  <li class="page-item">
                    <a class="page-link next " href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </section>
      </div>
    </form>
  </div>
  
  <!--Modal for withdraw application-->
  <div class="modal fade" tabindex="-1" id="exampleModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body mt-3">
          <h5 class="modal-title text-center">Are you sure you want to withdraw your job application?</h5>
        </div>
        <div class="modal-body" id="modal1">
          <button type="button" class="btn btn-danger px-4">Yes</button>
          <button type="button" class="btn btn-secondary px-3 " data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <script>
    function toggleImage() {
    imgsrc = document.getElementById("logo").src;
    if (imgsrc.indexOf("image/light-logo.png") !=-1){
      document.getElementById("logo").src = "image/Techployment (7) 1.png";
    }
    else{
      document.getElementById("logo").src = "image/light-logo.png";
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>
</html>