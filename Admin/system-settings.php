<?php include_once 'include/header.php'; ?>

<body>
    <?php include_once '../include/preloader-display.php'; ?>
    <div class="color-overlay">
        <?php include_once 'include/navbar.php'; ?>
    </div>
    <br>
    <button class="openbtn" title="Open Sidebar" onclick="openNav()"><i id="list-i" class="bi bi-list fa-2x"></i></button>
    <?php include_once 'include/sidebar.php'; ?>
    <div class = 'toggle-switch'>
        <label class="lab">
          <input class="dar" type = 'checkbox' name="theme" onclick="toggleImage()">
          <span id="icon2" class = 'slider'></span>
        </label>
      </div>
    <br><br><br>
    <div class="container-fluid" id="main">
        <div class="text-center">
            <h3 class="div1">SYSTEM SETTINGS</h3>
        </div>
        <div class="d-flex justify-content-center">
            <img src="" class="image" id="_logo">
        </div>
        <div class="row mb-3 mt-5 fw-bold justify-content-center">
            <label for="name" class="profile-picture col-sm-2">System Picture:</label>
            <div class="col-sm-8">
                <input type="file" id="myFile" class="file form-control" name="filename">
            </div>
        </div>
        <div class="row mb-3 mt-4  fw-bold justify-content-center">
            <label for="name" class="col-sm-2 ">System Name:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="name" placeholder="System Name">
            </div>
        </div>
        <div class="row mb-3 mt-0 fw-bold justify-content-center">
            <label for="tagline" class="col-sm-2 ">System Tagline:</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="tagline" rows="3" placeholder="System Tagline"></textarea>
            </div>
        </div>
        <div class="row mb-3 mt-0 fw-bold justify-content-center">
            <label for="contactnumber" class="col-sm-2 ">Contact Number:</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="contactnumber" placeholder="Contact Number">
            </div>
        </div>
        <div class="row mb-3 mt-0 fw-bold justify-content-center">
            <label for="email" class="col-sm-2 ">Email:</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" id="email" placeholder="Email@email.com">
            </div>
        </div>
        <div class="row mb-3 mt-0 fw-bold justify-content-center">
            <label for="description" class="col-sm-2 ">System Description:</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="description" rows="4" placeholder="System Description"></textarea>
            </div>
        </div>
        <div class="text-center">
            <button class="save-change" id="save-now" type="submit">SAVE CHANGES</button>
        </div><br>
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
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.left = "0";
            document.getElementById("main").style.marginLeft = "370px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.left = "-100%";
            document.getElementById("main").style.marginLeft = "170px";
        }
    </script>
    
    <script src="js/toggle-image.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/system-settings.js"></script>
</body>

</html>