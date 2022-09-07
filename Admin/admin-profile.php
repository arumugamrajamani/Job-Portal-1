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

    <div class="container bg-white shadow block ms-auto" id="main">
        <div class="d-flex justify-content-center">
            <img id="profilepic" src="" alt="melham logo" class="image mt-5">
        </div>
        <div class="row mb-3 mt-5 fw-bold d-flex">
            <div class="row mb-3 mt-4 justify-content-center fw-bold ">
                <label for="name" class="col-sm-3 ">Name:</label>
                <div class="col-sm-3">
                    <text id="name"></text>
                </div>
            </div>
            <div class="row mb-3 mt-0 justify-content-center fw-bold">
                <label for="email" class="col-sm-3 ">Email:</label>
                <div class="col-sm-3">
                    <text id="email"></text>
                </div>
            </div>
            <div class="row mb-3 mt-0 justify-content-center fw-bold">
                <label for="contactnumber" class="col-sm-3 ">Contact Number:</label>
                <div class="col-sm-3">
                    <text id="contactnumber"></text>
                </div>
            </div>
            <div class="text-center justify-content-center mt-5">
                <button class="save-change me-5" type="submit" onclick="location.href='edit-profile.php'">EDIT PROFILE</button>
                <button class="save-change" type="submit" onclick="location.href='admin-change-pass.php'"> CHANGE PASSWORD</button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ms-5" id="exampleModalLabel">Are you sure you want to delete this?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="delete modal-body">
                    <button type="button" class="yes-no btn btn-success">Yes</button>
                    <button type="button" class="yes-no btn btn-danger">No</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/navbar.js"></script>
    <script src="js/adminprofile.js"></script>
</body>

</html>