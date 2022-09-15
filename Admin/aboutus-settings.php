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
    
    <!-- toggle switch -->
    <div class = 'toggle-switch'>
        <label class="lab">
            <input class="dar" type = 'checkbox' name="theme" onclick="toggleImage()">
            <span id="icon2" class = 'slider'></span>
        </label>
    </div>

    <!-- content -->
    <div class="container-fluid shadow block" id="main">
        <div class="text-center">
            <h3 class="div1">ABOUT US SETTINGS</h3>
        </div><br>
        <div class="row mb-3 mt-0 justify-content-center">
            <label for="meetourteam" class="col-sm-2 ">Meet our team:</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="meetourteam" rows="4"></textarea>
            </div>
        </div>
        <div class="row mb-3 mt-0 justify-content-center">
            <label for="vision" class="col-sm-2 ">Vision:</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="vision" rows="3"></textarea>
            </div>
        </div>
        <div class="row mb-3 mt-0 justify-content-center">
            <label for="mission" class="col-sm-2 ">Mission:</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="mission" rows="3"></textarea>
            </div>
        </div>
        <div class="row mb-3 mt-0 justify-content-center">
            <label for="goal" class="col-sm-2 ">Goal:</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="goal" rows="3"></textarea>
            </div>
        </div>
        <div class="row mb-3 mt-0 justify-content-center">
            <label for="services" class="col-sm-2 ">Our services:</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="services" rows="4"></textarea>
            </div>
        </div>
        <div class="text-center">
            <button class="save-change" type="submit" id="save-now">SAVE CHANGES</button>
        </div><br>
    </div>
    
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.left = "0";
            document.getElementById("main").style.marginLeft = "370px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.left = "-100%";
            document.getElementById("main").style.marginLeft = "220px";
        }
    </script>

	<script src="js/toggle-image.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/aboutus-settings.js"></script>
</body>

</html>