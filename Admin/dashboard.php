<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <link rel="stylesheet" href="css/dashboard.css">
  <title>dashboard</title>
</head>
<body>
  <div class="color-overlay">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow-sm">
                <a href="#" class="navbar-brand ms-5">
                <img src="image/flogo.png" alt="Job Portal Logo" width="80" height="60"></a>
                <h6 class="position-relative" style="font-size: 22px;color: #372732; margin-left: 700px; font-weight: 700; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">AdminDashboard</h6>
            
            <div class="collapse navbar-collapse" id="toggleMobileMenu">
                <ul class="navbar-nav ms-auto  text-center">
                    <li class="nav-item dropdown me-5">
                        <a class="nav-link dropdown-toggle fs-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle" style="font-size:30px;"></i></a>
                    <ul class="dropdown-menu account-drop dropdown-menu-end" aria-labelledby="navbarDropdown" >
                        <li><a class="dropdown-item  fs-5 text-white" href="#"><i class="bi bi-person-circle" style="font-size:30px;"></i> My Profile</a></li>
                        <li><hr class="dropdown-divider bg-white"></li>
                        <li><a class="dropdown-item fs-5 text-white" href="php/logout.php">Sign Out</a></li>
                    </ul>
                </ul>
            </div>
        </nav>         
    </div>
  </div>
  <br>
  
  <div class="sidebar shadow-lg"><br><br>
    <a href="dashboard.php" style="background-color: #00C2D6;"><i class="bi bi-speedometer"></i> Dashboard</a><br>
    <a href="employer-management.php"><i class="bi bi-person-workspace"></i> Employers Management</a><br>
    <a href="jobseeker-management.php"><i class="bi bi-search"></i> Job Seeker Management</a><br>
    <a href="jobpostmanagement.php"><i class="bi bi-file-earmark-post-fill"></i> Job Post Management</a><br>
    <a href="jobcategoriesmanagement.php"><i class="bi bi-briefcase"></i> Job Categories Management</a><br>
  </div>

<?php 
include '../php/db-connection.php';
?>

  <div style="margin-top: 100px; width: 1450px; margin-left: 380px; height: 820px; padding-top: 50px;" class="container-fluid bg-white">
    <div style="height: 350px; margin-left: 200px;"class="row">
      <div class="col-sm-5"style="border-radius: 24px; background: #ECECEC;">
        <form method="POST">
          <div style="background: #00C2D6; margin-left: -12px; margin-right: -12px; padding: 5px; border-radius: 24px 24px 0px 0px;" class="text-center">
            <h2><i class="bi bi-person-fill  fa-3x"></i> REGISTERED <br> EMPLOYERS</h2>
          </div>
            <?php
              $query = "SELECT * FROM employer";  
              $query_run = mysqli_query($conn, $query);
              $row = mysqli_num_rows($query_run);
                echo '<p>'.$row.' </p>';
            ?>
        </form>
      </div>

      <div style="background: #FDF6EC; width: 30px;" class="col-sm-1 bg-white"></div>

      <div class="col-sm-5" style="border-radius: 24px; background: #ECECEC;">
        <form method="POST">
        <div style="background: #00C2D6;  margin-left: -12px; margin-right: -12px; padding: 5px; border-radius: 24px 24px 0px 0px;" class="text-center">
          <h2><i class="bi bi-briefcase-fill"></i> REGISTERED <br> JOB SEEKERS</h2>
        </div>
            <?php
              $query = "SELECT * FROM jobseeker";  
              $query_run = mysqli_query($conn, $query);
              $row = mysqli_num_rows($query_run);
                echo '<p>'.$row.' </p>';
            ?>
      </form>
      </div>
    </div>
    <br>
    <div style="height: 350px; margin-left: 200px;" class="row">
      <div  class="col-sm-5"  style="border-radius: 24px; background: #ECECEC;">
        <form>
          <div style="background: #00C2D6;  margin-left: -12px; margin-right: -12px; padding: 5px;border-radius: 24px 24px 0px 0px;" class="text-center">
            <h2><i class="bi bi-bar-chart"></i> NUMBER OF JOBS <br> (Per Category)</h2>
          </div>
          <br>
          <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        </form>
      </div>
      <div style="background: #FDF6EC; width: 30px;"  class="col-sm-1 bg-white"></div>
      <div class="col-sm-5" style="border-radius: 24px; background: #ECECEC;">
        <form>
          <div style="background: #00C2D6;  margin-left: -12px; margin-right: -12px; padding: 5px; border-radius: 24px 24px 0px 0px;" class="text-center">
            <h2><i class="bi bi-bar-chart"></i> ACTIVE AND INACTIVE <br> JOBS</h2>
          </div>
          <canvas id="myChart1" style="width:100%;max-width:600px"></canvas>
        </form>
      </div>
    </div>
  </div>
  <script src="js/dashboard.js"></script>
</body>
</html>
