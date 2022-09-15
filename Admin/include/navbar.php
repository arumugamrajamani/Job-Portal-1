<?php
    $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],'/')+1);
?>
    
<nav class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow-sm">
    <a href="#" class="navbar-brand ms-5">
        <img src="image/light-logo.png" alt="Job Portal Logo" width="80" height="60" id="logo"></a>
    <h6 class="position-relative ms-auto header-text">
        <?php
            if ($page == 'dashboard.php') echo 'Admin Dashboard';
            else if ($page == 'employer-management.php') echo 'Employers Management';
            else if ($page == 'jobseeker-management.php') echo 'Job Seekers Management';
            else if ($page == 'jobpost-management.php') echo 'Job Post Management';
            else if ($page == 'jobcategories-management.php') echo 'Job Categories Management';
            else if ($page == 'system-settings.php') echo 'Settings';
            else if ($page == 'aboutus-settings.php') echo 'Settings';
            else if ($page == 'faq-settings.php') echo 'Settings';
            else if ($page == 'recycle-bin-employer.php') echo 'Recycle Bin Management';
            else if ($page == 'recycle-bin-jobseeker.php') echo 'Recycle Bin Management';
            else if ($page == 'recycle-bin-jobpost.php') echo 'Recycle Bin Management';
            else if ($page == 'admin-change-pass.php') echo 'Edit Profile';
            else if ($page == 'index.php') echo 'Admin Dashboard';
            else if ($page == 'admin-profile.php') echo 'Admin Profile';
            else if ($page == 'edit-profile.php') echo 'Edit Profile';
        ?>
    </h6>
    <div class="dropdown ms-auto d-flex">
        <h6 class="mt-2 fw-bold" id="adminFullName">
            <!-- Profile Picture and Account was loaded here  -->
        </h6>
        
        <button class="btn-dropdown ms-2 me-4" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="fa-solid fa-caret-down"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="admin-profile.php"><img id="mainDpDrop" src="image/profile.png"
                        alt="" class="me-2"> My Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="edit-profile.php"><i class="fa-solid fa-user-pen"></i>Edit
                    Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="admin-change-pass.php"> <i class="fa-solid fa-key "></i>Change
                    Password</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="../logout.php"><i class="fa-solid fa-right-from-bracket"></i>Sign
                    Out</a></li>
        </ul>
    </div>
</nav>