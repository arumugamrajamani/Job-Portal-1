<?php
    $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],'/')+1);
    $subDisplaySettings = false;
    $subDisplayRecycle = false;

    if ($page == 'system-settings.php' || 
        $page == 'aboutus-settings.php' || 
        $page == 'faq-settings.php') $subDisplaySettings = true;

    if ($page == 'recycle-bin-employer.php' || 
        $page == 'recycle-bin-jobseeker.php' || 
        $page == 'recycle-bin-jobpost.php') $subDisplayRecycle = true;
?>

<div class="sidebar shadow-lg" id="mySidebar" class="sidebar">
    <div class="menu">
        <div class="item">
            <a href="javascript:void(0)" class="closebtn" title="Close Sidebar" onclick="closeNav()">×</a>
        </div>
        <div class="item">
            <a href="dashboard.php" id="dash-a" class="<?php if ($page == 'dashboard.php') echo 'highlight'; ?>">
                <img class="me-3" src="image/Vector1.png" id="dash">Dashboard
            </a><br>
            </div>
        <div class="item">
            <a href="employer-management.php" id="emp-a" class='<?php if ($page == 'employer-management.php') echo 'highlight'; ?>'>
                <img class="me-3" src="image/employers.png" id="emp">Employers Management
            </a><br>
        </div>
        <div class="item">
            <a href="jobseeker-management.php" id="jsm-a" class='<?php if ($page == 'jobseeker-management.php') echo 'highlight'; ?>'>
                <img class="me-3" src="image/jobseeker.png" id="job"> Job Seeker Management
            </a><br>
        </div>
        <div class="item">
            <a href="jobpost-management.php" id="jpm-a" class='<?php if ($page == 'jobpost-management.php') echo 'highlight'; ?>'>
                <img class="me-3" src="image/jobpost.png" id="post"> Job Post Management
            </a><br>
        </div>
        <div class="item">
            <a href="jobcategories-management.php" id="jcm-a" class='<?php if ($page == 'jobcategories-management.php') echo 'highlight'; ?>'>
                <img class="me-3" src="image/jobcategory.png" id="cate"> Job Categories Management
            </a><br>
        </div>
        <div class="item">
            <a class="sub-btn <?php if ($subDisplaySettings) echo 'highlight'; ?>">
                <img class="me-3" src="image/profilesetting.png" id="sett">Setting 
                <i class="fa fa-angle-right dropdown"></i>
            </a>
            <div class="sub-menu <?php if ($subDisplaySettings) echo 'sub-display'; ?>">
                <a href="system-settings.php" class="sub-item <?php if ($page == 'system-settings.php') echo 'highlight'; ?>">System Settings</a>
                <a href="aboutus-settings.php" class="sub-item <?php if ($page == 'aboutus-settings.php') echo 'highlight'; ?>">About Us Settings</a>
                <a href="faq-settings.php" class="sub-item <?php if ($page == 'faq-settings.php') echo 'highlight'; ?>">Faq Settings</a>
            </div>
        </div><br>
        <div class="item">
            <a class="sub-btn <?php if ($subDisplayRecycle) echo 'highlight'; ?>">
                <img class="me-3" src="image/recycle-bin.png" id="recycle"> Recycle Bin 
                <i class="fa fa-angle-right dropdown"></i>
            </a>
            <div class="sub-menu <?php if ($subDisplayRecycle) echo 'sub-display'; ?>">
                <a href="recycle-bin-employer.php" class="sub-item <?php if ($page == 'recycle-bin-employer.php') echo 'highlight'; ?>">Employers Management</a>
                <a href="recycle-bin-jobseeker.php" class="sub-item <?php if ($page == 'recycle-bin-jobseeker.php') echo 'highlight'; ?>">Job Seeker Management</a>
                <a href="recycle-bin-jobpost.php" class="sub-item <?php if ($page == 'recycle-bin-jobpost.php') echo 'highlight'; ?>">Job Post Management</a>
            </div>
        </div>
    </div>
</div>