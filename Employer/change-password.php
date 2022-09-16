<?php 
    include_once 'include/login-session-Employer.php';
    include_once 'include/header-Employer.php'; 
?>

<body>
    <?php include_once '../include/preloader-display.php'; ?>
    <div class="color-overlay">
        <?php include_once 'include/navbar-Employer.php'; ?>
    </div><br>

    <div class="container contain"><br>
        <div class="container block align-items-center text-center">
          <h4 class="p-3 shadow-sm fw-bold head">Change Your Password</h4>
          <div class="mt-3 cons">
            <div class=" space">
              <span class="icon" onclick="showHide()">
                <i class='bi bi-eye-slash icon' aria-hidden="true"></i>
                <i class='bi bi-eye icon'></i>
              </span>
              <label class="fw-bold mt-3 box">Current Password:</label>
              <input type="password" id="currentpassword" class="Bcolor"><br><br>
            </div>
            <div class="mt-3 boxs">
              <span class="icon1" onclick="showHide1()">
                <i class='bi bi-eye-slash icon1' aria-hidden="true"></i>
                <i class='bi bi-eye icon1'></i>
              </span>
              <label class="fw-bold mt-3 box">New Password:</label>
              <input type="password" id="newpassword" class="Bcolor">
          
            </div>
            <div class=" mt-3 boxs1">
              <span class="icon2" onclick="showHide2()">
                <i class='bi bi-eye-slash icon2' aria-hidden="true"></i>
                <i class='bi bi-eye icon2'></i>
              </span>
              <label class="fw-bold mt-3 box1">Confirm Password:</label>
              <input type="password" id="confirmpassword" class="Bcolor">
            </div>
            <label class="characters text-danger"></label><br><br><br>
            <button type="button" class=" save fw-bold btn3" title="Save password" data-bs-toggle="modal" data-bs-target="#modal-save">Save</button>
            <button type="button" onclick="window.location.href='company-profile.php'" class="fw-bold btn3">Cancel</button>
          </div>
        </div>
    </div> 
    <div class="modal fade" id="modal-save" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title ms-2" id="exampleModalLabel">Are you sure you want to change your password?</h5>
              </div>
              <div class="delete modal-body">
                  <button type="button" id="confirm" class="yes-no btn btn-success">Yes</button>
                  <button type="button" class="yes-no btn btn-danger" data-bs-dismiss="modal">No</button>
              </div>
          </div>
      </div>
    </div>
    <div class = 'toggle-switch'>
        <label class="lab">
          <input class="dar" type = 'checkbox' onclick="toggleImage()">
          <span id="icon2" class = 'slider'></span>
        </label>
    </div>
    <script>
        function showHide() {
        let icon = document.querySelector(".icon"),
            input = document.getElementById("currentpassword");
        if (input.type === "password") {
            input.type = "text";
        } else {
            input.type = "password";
        }
        icon.classList.toggle('is-active');
        } function showHide1() {
        let icon = document.querySelector(".icon1"),
            input = document.getElementById("newpassword");
        if (input.type === "password") {
        } else {
            input.type = "password";
        }
        icon.classList.toggle('is-active');
        } function showHide2() {
        let icon = document.querySelector(".icon2"),
            input = document.getElementById("confirmpassword");
        if (input.type === "password") {
            input.type = "text";
        } else {
            input.type = "password";
        }
        icon.classList.toggle('is-active');
        }
        var icon2 = document.getElementById("icon2");

            icon2.onclick = function() {
                document.body.classList.toggle("dark-theme")
            }
            function toggleImage() {
            imgsrc= document.getElementById("logo").src;
            if (imgsrc.indexOf("image/light-logo.png") !=-1){
              document.getElementById("logo").src = "image/Techployment (7) 1.png";
            }
            else{
              document.getElementById("logo").src = "image/light-logo.png";
            }
        }
    </script>
    <script src="js/change-password.js"></script>
    <script src="js/pfp.js"></script>
</body>
</html>