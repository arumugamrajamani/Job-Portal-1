<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/e5ed048aee.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/jobseekermanagement.css">
    <title>Job seekers Management</title>
  </head>
  <body>
    <div class="color-overlay">
      <div class="container-fluid">
          <nav class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow-sm">
                  <a href="#" class="navbar-brand ms-5">
                  <img src="image/flogo.png" alt="Job Portal Logo" width="80" height="60"></a>
                  <h6 class="position-relative" style="font-size: 22px;color: #372732; margin-left: 700px; font-weight: 700; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">Job Seekers Management</h6>
              
              <div class="collapse navbar-collapse" id="toggleMobileMenu">
                  <ul class="navbar-nav ms-auto  text-center">
                          <li class="nav-item dropdown me-5">
                              <a class="nav-link dropdown-toggle fs-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle" style="font-size:30px;"></i></a>
                          <ul class="dropdown-menu account-drop dropdown-menu-end" aria-labelledby="navbarDropdown" >
                              <li><a class="dropdown-item  fs-5 text-white" href="#"><i class="bi bi-person-circle" style="font-size:30px;"></i> My Profile</a></li>
                              <li><hr class="dropdown-divider bg-white"></li>
                              <li><a class="dropdown-item fs-5 text-white"href="#">Sign Out</a></li>
                          </ul>
                  </ul>
              </div>
          </nav>         
      </div>
    </div>
    <br>
    <div class="sidebar"><br><br>
      <a href="dashboard.php"><i class="bi bi-speedometer"></i> Dashboard</a><br>
      <a href="employer-management.php"><i class="bi bi-person-workspace"></i> Employers Management</a><br>
      <a href="jobseeker-management.php.php" style="background-color: #00C2D6;"><i class="bi bi-search"></i> Job Seeker Management</a><br>
      <a href="jobpostmanagement.php"><i class="bi bi-file-earmark-post-fill"></i> Job Post Management</a><br>
      <a href="jobcategoriesmanagement.php"><i class="bi bi-briefcase"></i> Job Categories Management</a><br>
    </div>
<br><br><br>
          <div  style="width: 1450px; height: 800px; margin-left: 390px;" class="container-fluid p-md-5 mt-4 bg-white">
            <form class="d-flex">      
              <input style="border-radius: 0%; border-top-left-radius: 10px; border-bottom-left-radius: 10px; width: 300px;" class="form-control icon" type="search" placeholder="Search a jobseeker" aria-label="Search">
              <button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
            </form><br>
            <form id="main-form">
                <div style="width: inherit;" class=" col-auto ">
                  <section class="type p-1">
                    <div class="bg-color-header text-center">
                        
          
                      <div class="table-responsive" id="no-more-tables">
                          <table class="table basic-table table-headers table table-hover">
                            
                              <thead style="background: rgba(0, 194, 214, 0.5);" class="text-dark text-center" id="title-sub" style="text-align:center ;">
                                  <tr>
                                      <th>Profile Picture</th>
                                      <th>Jobseeker Name</th>
                                      <th>Contact Number</th>
                                      <th>Email Address</th>
                                      <th>Date Applied</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody class="bg-light text-dark" id="body-h" style="text-align: center; line-height: 70px;" >
                                  <tr style="height: 6rem; border: none; box-shadow: none;">
                                      <td data-title="profilepicture"><img src="image/male.png" alt="" style="width: 60px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#profile"></td>
                                      <td data-title="jobseekername">Bryan D. Ubalde</td>
                                      <td data-title="contactnumber">09*********</td>
                                      <td data-title="emailaddress">bryanubalde01@gmail.com</td>
                                      <td data-title="dateapplied">April 19, 2022</td>
                                      <td data-title="action">              
                                      <button style="width: 40px; border: 0;" class="btn-success" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-editdetails"><i class="fa-solid fa-pen-to-square"></i></button>                                  
                                      <button class="btn btn-danger" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash3"></i></button></td>
                                  </tr>
                                </tbody>
                                <tbody class="bg-light text-dark" id="body-h" style="text-align: center; line-height: 70px;" >
                                  <tr style="height: 6rem; border: none; box-shadow: none;">
                                      <td data-title="profilepicture"><img src="image/female.png" alt="" style="width: 60px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#profile"></td>
                                      <td data-title="jobseekername">Kimberly ann S. Flores</td>
                                      <td data-title="contactnumber">09*********</td>
                                      <td data-title="emailaddress">kimberlyannflores32@gmail.com</td>
                                      <td data-title="dateapplied">May 05, 2022</td>
                                      <td data-title="action">
                                        <button style="width: 40px; border: 0;" class="btn-success" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-editdetails"><i class="fa-solid fa-pen-to-square"></i></button>                                  
                                        <button class="btn btn-danger" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash3"></i></button></td>
                                  </tr>
                                </tbody>
                                <tbody class="bg-light text-dark" id="body-h" style="text-align: center; line-height: 70px;" >
                                  <tr style="height: 6rem; border: none; box-shadow: none;">
                                      <td data-title="profilepicture"><img src="image/female.png" alt="" style="width: 60px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#profile"></td>
                                      <td data-title="jobseekername">Daniela Torres</td>
                                      <td data-title="contactnumber">09*********</td>
                                      <td data-title="emailaddress">danielatorres24@gmail.com</td>
                                      <td data-title="dateapplied">May 13, 2022</td>
                                      <td data-title="action">
                                        <button style="width: 40px; border: 0;" class="btn-success" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-editdetails"><i class="fa-solid fa-pen-to-square"></i></button>                                  
                                        <button class="btn btn-danger" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash3"></i></button></td>
                                  </tr>
                                </tbody>
                          </table>
                          
                      </div>
                    </div>
                  </section>
                </div>  
            </form>

          </div>
  
  <!-- Delete button modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title ms-5" id="exampleModalLabel">Are you sure you want to delete this?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="margin-left: 170px;">
          <button type="button" class="btn btn-success" style="width: 70px;">Yes</button>
          <button type="button" class="btn btn-danger" style="width: 70px;">No</button>
        </div>
        
      </div>
    </div>
  </div>

  <!--Profile picture modal-->
  <div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 style="color: #00C2D6;">Profile Picture</h3>
         
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="margin-left: 110px;">
          <img src="image/male.png" style="width: 250px;" alt="">
          
        </div>
        
      </div>
    </div>
  </div>
  <!--Edit detail modal-->
  <div class="modal fade" id="modal-editdetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title ms-5" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container" style="width:700px;height: 400px;background-color: #FDF6EC;">
            <form class="container">
              <br>
              <h2 class="text-black text-center mt-2 fw-bold">JOBSEEKER DETAILS</h2>
              <hr>
              <div class="row mb-3 mt-0 ms-4 fw-bold">
                  <label for="jobseekername" class="col-sm-3 ">Jobseeker Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="jobseekername">
                  </div>
              </div>
              <div class="row mb-3 mt-0 ms-4 fw-bold">
                <label for="contactnumber" class="col-sm-3 ">Contact Number</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="contactnumber">
                </div>
              </div>
              <div class="row mb-3 mt-0 ms-4 fw-bold">
                <label for="emailaddress" class="col-sm-3 ">Email address</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" id="emailaddress">
                </div>
              </div>
              
              
              
              
            </form>
            
          </div><br>
          <div class="modal-footer">
            <button type="button" class="btn btn-success">Save Details</button>
            <button type="button" class="btn btn-secondary" style="width: 70px;" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>