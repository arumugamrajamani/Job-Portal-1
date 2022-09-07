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

    <section class="edit-section" id="main">
        <div class="container-responsive p-md-5 mt-4">
            <div class="d-flex">
                <div class="backg bg-white ms-5 shadow block">
                    <img src="" id="profile-pic-view" alt="Your Profile Picture" class="image mt-5">
                    <div class="row mb-3 mt-5 ms-5 fw-bold">
                        <label for="profilePic" class="profile-picture col-sm-2">Profile Picture:</label>
                        <div class="col-sm-7">
                            <input type="file" id="profilePic" class="file form-control" name="filename">
                        </div>
                        <div class="row mb-3 mt-4 ms-5 fw-bold">
                            <label for="fullname" class="col-sm-3 ">Name:</label>
                            <div class="col-sm-7">
                                <input type="text" id="fullname" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-5 fw-bold">
                            <label for="email" class="col-sm-3 ">Email:</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" id="email" readonly>
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-5  fw-bold">
                            <label for="contactnumber" class="col-sm-3 ">Contact Number:</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="contactnumber">
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="save-change" id="save-now" type="submit">SAVE CHANGES</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/admin-edit-profile.js"></script>
    <script src="js/navbar.js"></script>
    <script src="../js/preloader.js"></script>
</body>

</html>