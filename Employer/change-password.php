<?php
    include_once 'include/login-session-Employer.php';
    include_once 'include/header-Employer.php'; 
?>

<body>
    <?php 
        include_once '../include/preloader-display.php'; 
        include_once 'include/navbar-Employer.php';
    ?>

    <div class="container">
    <div id="sub-container"><br>
        <div class="container align-items-center text-center">
            <div id="mainBox" class="">
                <h4 class="p-3 fw-bold" id="subtitle">Change Your Password</h4><br>
            </div>
            <div id="subBox">
                <div class="mt-3 cons">
                    <span class="toggleShowHide1" onclick="showHide()">
                        <i class="bi bi-eye-slash toggleShowHide1" aria-hidden="true"></i>
                        <i class="bi bi-eye toggleShowHide1"></i>
                    </span>
                    <label for="currentpassword" class="fw-bold mt-3 desc">Current Password:</label>
                    <input type="password" id="currentpassword" class="inputColor">
                </div><br>
                <div class="mt-3 boxs">
                    <span class="toggleShowHide2" onclick="showHide1()">
                        <i class="bi bi-eye-slash toggleShowHide2" aria-hidden="true"></i>
                        <i class="bi bi-eye toggleShowHide2"></i>
                    </span>
                    <label for="newpassword" class="fw-bold mt-3 desc">New Password:</label>
                    <input type="password" id="newpassword" class="inputColor">
                </div>
                <div class="mt-3 boxs1">
                    <span class="toggleShowHide3" onclick="showHide2()">
                        <i class="bi bi-eye-slash toggleShowHide3"></i>
                        <i class="bi bi-eye toggleShowHide3"></i>
                    </span>
                    <label for="confirmpassword" class="fw-bold mt-3 desc">Confirm Password:</label>
                    <input type="password" id="confirmpassword" class="inputColor">
                </div><br>
            </div><br>
            <button class=" save fw-bold btn-operations" title="Save password" data-bs-toggle="modal" data-bs-target="#modal-save">Save</button>
                <button class="fw-bold btn-operations" onclick="window.location.href='company-profile.php'">Cancel</button>
        </div>    
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-save" tabindex="-1" aria-labelledby="passwordModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ms-2" id="passwordModalLabel">
                        Are you sure you want to change your password?
                    </h5>
                </div>
                <div class="delete modal-body">
                    <button id="confirm" class="yes-no btn btn-success">Yes</button>
                    <button class="yes-no btn btn-danger" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script>
        function showHide() {
            let icon = document.querySelector(".icon"),
                input = document.getElementById("currentpassword");
            if (input.type === "password") {
                input.type = "text";
            }
            else {
                input.type = "password"; 
            }
            icon.classList.toggle('is-active')
        }

        function showHide1() {
            let icon = document.querySelector(".icon1"),
                input = doucment.getElementById("newpassword");
            if (input.type === "password") {
                input.type = "text";
            }
            else {
                input.type = "password";
            }
            icon.classList.toggle('is-Active');
        }
        function showHide2() {
            let icon = document.querySelector(".icon2"),
                input = document.getElementById("confirmpassword");
            if (input.type === "password") {
                input.type = "text";
            }
            else {
                input.type = "password";
            }
            icon.classList.toggle('is-Active');
        }
    </script>

    <?php include_once 'include/footer-Employer.php' ?>
</body>