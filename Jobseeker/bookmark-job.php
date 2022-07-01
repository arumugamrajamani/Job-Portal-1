<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/bookmark-job.css">
  <title>Bookmark</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
      <a class="navbar-brand me-1" href="#"></a>
      <img src="image/flogo.png" alt="Job Portal Logo" width="100" height="70"></a>
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
            <a class="nav-link text-dark message active " aria-current="page" href="message-jobseekers.php">MESSAGE</a>
          </li>
          <li class="nav-item me-5 px-5 ">
            <a class="nav-link text-dark about active" href="searchjob.php">JOB BOARD</a>
          </li>
          <li class="nav-item account dropdown active">
            <a class="nav-link text-dark  dropdown-toggle account active" href="#" id="navbarDropdown"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="image" src="image/profileicon1.png" alt="Profile" width="50" height="30"> ACCOUNT</a>
              <ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-light text-start" href="applicant-profile.php"><i class="bi bi-person-fill"></i> Full Name</a></li>
                <li>
                  <hr class="dropdown-divider bg-white">
                </li>
                <li><a class="dropdown-item text-light text-start" href="manage-account-1.php"><img src="image/edit-profile.png" alt=""> Edit Profile</a></li>
                <li><a class="dropdown-item text-light text-start" href="manage-account-2.php"><img src="image/change pass.png" alt=""> Change Password</a></li>
                <li><a class="dropdown-item text-light text-start" href="jobapplication.php"><img src="image/job application.png" alt=""> Job Applications</a></li>
                <li><a class="dropdown-item text-light text-start" href="bookmark-job.php"><img src="image/bookmark.png" alt=""> Bookmarked jobs</a></li>
                <li><a class="dropdown-item text-light text-start" href="resume.php"><img src="image/manage resume.png" alt=""> Manage Resume</a></li>
                <li><a class="dropdown-item logout text-light text-start" href="#"><img src="image/sign out.png" alt=""> LOGOUT</a></li>
              </ul>
        </ul>
      </div>
    </div>
  </nav><br>

  <div class="container p-md-5 mt-4" id="container">
    <form id="main-form">
      <div class=" col-auto cols">
        <section class="type p-1">
          <div class="bg-color-header">
            <h3 class="book"><b>BOOKMARKED JOBS</b><i class="fa-solid fa-bookmark bookmark"></i></h3>
            <div class="table-responsive tables" id="no-more-tables">
              <table class="table basic-table table-headers table table-hover">
                <thead class="text-dark text-center" id="title-sub">
                  <tr>
                    <th>Job Tittle</th>
                    <th>Job Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="bg-light text-dark text-center" id="body-h">
                  <tr class="tr1">
                    <td data-title="Job Tittle">Administrative Assistant</td>
                    <td data-title="Job Description" class="descript">Lorem ipsum dolor sit amet consectetur
                      adipisicing elit. Velit accusamus harum cupiditate quisquam quae dolorem non voluptatem minus.
                    </td>
                    <td data-title="Action" class="action"><button class="btn btn-info shadow" type="button"
                        id="btn-info">APPLY</button>
                      <button class="btn btn-dark btn-sm rounded-circle" type="button" data-toggle="tooltip"
                        data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                </tbody>
                <tbody class="bg-light text-dark text-center" id="body-h">
                  <tr class="tr1">
                    <td data-title="Job Tittle">Voice Over Artist</td>
                    <td data-title="Job Description" class="descript">Lorem ipsum dolor sit amet consectetur
                      adipisicing elit. Officia tenetur quis excepturi, commodi accusamus ad facere deserunt nulla quam
                      ratione?</td>
                    <td data-title="Action" class="action"><button class="btn btn-info shadow" type="button"
                        id="btn-info">APPLY</button>
                      <button class="btn btn-dark btn-sm rounded-circle" type="button" data-toggle="tooltip"
                        data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                </tbody>
                <tbody class="bg-light text-dark text-center" id="body-h">
                  <tr class="tr1">
                    <td data-title="Job Tittle">Youtube Video Script Writer</td>
                    <td data-title="Job Description" class="descript">Lorem ipsum dolor sit amet consectetur
                      adipisicing elit. Minus dolorum consectetur, animi explicabo libero recusandae vero blanditiis
                      dicta porro!</td>
                    <td data-title="Action" class="action"><button class="btn btn-info shadow" type="button"
                        id="btn-info">APPLY</button>
                      <button class="btn btn-dark btn-sm rounded-circle" type="button" data-toggle="tooltip"
                        data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </section>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>