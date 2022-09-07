<?php include_once 'include/header.php'; ?>
<body>
    <?php include_once '../include/preloader-display.php'; ?>
    <div class="color-overlay">
        <?php include_once 'include/navbar.php'; ?>
    </div><br>

    <button class="openbtn" title="Open Sidebar" onclick="openNav()">
        <i id="list-i" class="bi bi-list fa-2x"></i>
    </button>

    <?php include_once 'include/sidebar.php'; ?><br><br><br>

    <div class="background-white container-responsive p-md-5 mt-4" id="main">
        <div class="d-flex">
            <div class="container block align-items-center text-center">
                <h4 class="change-your-password p-3 shadow-sm fw-bold">Change Your Password</h4>
                <div class="back-white bg-white mt-3">
                    <div class="current-password d-flex">
                        <span class="icon" onclick="showHide()">
                            <i class='eye bi bi-eye-slash icon' aria-hidden="true"></i>
                            <i class='eye bi bi-eye icon'></i>
                        </span>
                        <label class="current-pass fw-bold mt-3">Current Password:</label>
                        <input type="password" id="currentpassword" class="current-new-confirm"><br><br>
                    </div>
                    <div class="new-confirm d-flex mt-4">
                        <span class="icon1" onclick="showHide1()">
                            <i class='eye bi bi-eye-slash icon1' aria-hidden="true"></i>
                            <i class='eye bi bi-eye icon1'></i>
                        </span>
                        <label class="new-password fw-bold mt-3">New Password:</label>
                        <input type="password" id="newpassword" class="current-new-confirm ms-4"><br><br>
                    </div>
                    <div class="new-confirm d-flex mt-4">
                        <span class="icon2" onclick="showHide2()">
                            <i class='eye bi bi-eye-slash icon2' aria-hidden="true"></i>
                            <i class='eye bi bi-eye icon2'></i>
                        </span>
                        <label class="confirm-password fw-bold mt-3">Confirm Password:</label>
                        <input type="password" id="confirmpassword" class="current-new-confirm">
                    </div>
                    <div class="block">
                        <div>
                            <button type="button" class="save mt-4 fw-bold" title="Save password" 
                                data-bs-toggle="modal" data-bs-target="#modal-save">Save</button>
                        </div>
                    </div>
                </div>
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

    <script src="js/changepassword.js"></script>
    <script src="js/navbar.js"></script>
</body>

</html>