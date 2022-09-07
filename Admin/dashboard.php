<?php 
include_once 'include/header.php'; 
include_once "../php/db-connection.php";
?>

<body>
    <?php include_once '../include/preloader-display.php'; ?>
    <div class="color-overlay">
        <?php include_once 'include/navbar.php'; ?>
    </div>

    <button class="openbtn" title="Open Sidebar" onclick="openNav()">
        <i id="list-i" class="bi bi-list fa-2x"></i>
    </button>

	<?php include_once 'include/sidebar.php'; ?>

    <div class = 'toggle-switch'>
        <label class="lab">
            <input class="dar" type = 'checkbox' name="theme" onclick="toggleImage()">
            <span id="icon2" class = 'slider'></span>
        </label>
    </div><br><br><br>
    
    <section class="chart-section" id="main">
        <div class="container-responsive">
            <div class="kk">
                <img class="homie" id="homie" src="image/Vector1.png" alt="">
                <div class="dash"><h1>DASHBOARD</h1></div>
            </div>
            <div class="employers-jobseekers row">
                <div id="registered-employer" class="col-sm-5 me-1">
                    <div>
                        <div class="registered-employers text-center">
                            <img src="image/businessman (1) 1.png" alt="">
                            <h2>REGISTERED <br> EMPLOYERS</h2>
                        </div>
                        <?php
                            $query = mysqli_query($GLOBALS['conn'], "SELECT * FROM employer");
                            $row = mysqli_num_rows($query);
                            echo '<p>' . $row . '</p>';
                        ?>
                    </div>
                </div>
                <div id="registered-jobseekers" class="col-sm-5 ms-4">
                    <div>
                        <div class="registered-jobseekers text-center">
                            <img src="image/portfolio 3.png" alt="">
                            <h2>REGISTERED <br> JOB SEEKERS</h2>
                        </div>
                        <?php
                            $query = mysqli_query($GLOBALS['conn'], "SELECT * FROM jobseeker");
                            $row = mysqli_num_rows($query);
                            echo '<p>' . $row . '</p>';
                        ?>
                    </div>
                </div>
            </div><br>
            <div id="numberofjob-active" class="row">
                <div id="numberofjobs" class="col-sm-5 me-1">
                    <div>
                        <div class="numberofjob text-center">
                            <img src="image/signal 2.png" alt="">
                            <h2> NUMBER OF JOBS <br> (Per Category)</h2>
                        </div><br>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
                <div id="active-inactive" class="col-sm-5 ms-4">
                    <div>
                        <div class="active-inactive text-center">
                            <img src="image/signal 2.png" alt="">
                            <h2>ACTIVE AND INACTIVE <br> JOBS</h2>
                        </div>
                        <canvas id="myChart1"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<script src="js/toggle-image.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/navbar.js"></script>
</body>
</html>