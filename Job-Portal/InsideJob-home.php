<?php include_once 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- jQuery cdn link below -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <!-- Toast CDN for functionality of toastr -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Toast CDN for design of toastr -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
  <title>Inside the Job</title>
  <link rel="stylesheet" href="css/InsideJob.css">

</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example2">
    <div class="color-overlay">
        <?php include_once 'include/navbar.php'; ?>
    </div>


    <div class="swits">
    <div class = 'toggle-switch'>
      <label class="lab">
        <input class="dar" type = 'checkbox' onclick="toggleImage()">
        <span id="icon2" class = 'slider'></span>
      </label>
    </div>
    </div>
    <div class="container shadow-lg" id="content">
      <div class="container-fluid" id="ITS">
        <div class="support">
          <h4><b id="jobTitle"></h4></b>
          <p id="companyName"> </p>
          <p id="address"></p>
        </div>
      </div>
      <div class="container-fluid" id="sal">
        <div class="salary">
          <h4><b id="salaryy"></h4></b>
          <h5>JOB TYPE</h5>
        <p id="employment"></p>
        </div>  
      </div>
      <div class="container-fluid" id="job">
        <div class="job desc">
          <h5><b>JOB DESCRIPTION</b> (Includes skill requirements/text type)</h5>
          <p><u id="description"></u></p>
        </div>
      </div>
      <div class="container-fluid" id="hire">
        <div class="hiring">
          <h4><b>HIRING INSIGHTS</h4></b>
          <p>Hiring 1 candidate for this role</p>
        </div>
      </div>
      <div class="container-fluid" id="act">
        <div class="activity">
          <h4><b>JOB ACTIVITY</b></h4>
          <p>Employer reviewed job/date</p>
          <h5>Date Posted</h5>
          <h6><b id="datePosted"></b></h6>
        </div>
      </div>
    </div>
    <div class="container shadow-lg" id="content1">
      <div class="container-fluid" id="app">
        <div class="apply now">
          <h3><b id="jobTitle1"></b></h3>
          <p id="companyName1"></p>
         <p id="address1"></p>
        </div>
      </div><br>
      <div class="container-fluid" id="sal1">
        <div class="salary1">
          <h4><b id="salaryy1"></b></h4>
          <p>You must qualified to this position</p>
          <div class="butt">
            <button id="applyJob" class="logapp appnow" onclick="window.location.href='login.php'" style="text-decoration: none;"></button>
            <button id="bookmarkJob" onclick="window.location.href='login.php'" class="markb">
              <a><img id="bmark" src="image/Vector.png" alt=""></a>
            </button>
          </div>
        </div>
      </div>
    </div><!-- <a class="appnow" onclick="apply()" style="text-decoration: none;">APPLY NOW</a> -->
    <div class="container shadow-lg" id="content2">
      <div class="container-fluid" id="req">
        <div class="requirements">
          <ul id="bullet"></ul>
          <h4><b>SKILL REQUIREMENTS</b></h4><br>
          <p>• Expert knowledge in operating systems<br>
          • Expert knowledge in working system<br>
          • Ability to prioritize your workload<br>
          • Capacity to clearly explain a technical problem</p>
        </div>
      </div>
    </div>  

    
    <script>
      <?php 
        $postId = isset($_GET['postId']) ? $_GET['postId'] : '';  
      ?>

      var postId = "<?= $postId ?>";

      var icon2 = document.getElementById("icon2")
  
      icon2.onclick = function() {
        document.body.classList.toggle("dark-theme");
      }
      
      function toggleImage(){
        imgsrc= document.getElementById("logo").src;
        if (imgsrc.indexOf("image/light-logo.png") !=-1){
          document.getElementById("logo").src = "image/Techployment (7) 1.png";
        }
        else{
          document.getElementById("logo").src = "image/logo.png";
        }
        imgsrc= document.getElementById("bmark").src;
        if (imgsrc.indexOf("image/Vector.png") !=-1){
          document.getElementById("bmark").src = "image/Vectorlight.png";
        }
        else{
          document.getElementById("bmark").src = "image/Vector.png";
        }
        imgsrc= document.getElementById("Selection").src;
        if (imgsrc.indexOf("image/selection.png") !=-1){
          document.getElementById("Selection").src = "image/icons8-menu-60.png";
        }
        else{
          document.getElementById("Selection").src = "image/selection.png";
        }
      }
    </script>
    <script src="js/insidejob.js"></script>
    <script src="js/pfp.js"></script>
</body>
</html>