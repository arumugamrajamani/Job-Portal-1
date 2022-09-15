<div class="navbar">
    <nav>
        <div class="navbar-logo">
            <img src="../image/flogo.png" alt="" srcset="">
        </div>

        <div class="searchbar-job">
            <input type="text" name="" id="" placeholder="search for a job">
            <i class="fas fa-search"></i>
        </div>

        <div class="header-title">
            <h2 style="color: transparent;">Admin Dashboard</h2>
        </div>

        <div class="button-message-postajob">
            <button class="message-job">Message</button>  
            <button class="message-job">Post a Job</button>
        </div>
        
        <div class="right-container">
            <div class="user">
                <div class="profile">
                    <div class="image-profile">
                        <img src="../image/flogo.png" height="45" width="45" alt="">
                    </div>

                    <div>
                        <small>
                            Full Name of the user
                        </small>
                    </div>
                    <i class="fas fa-angle-down fa-color"></i>
                </div>

                <?php 
                    if ($pageArray[0] == 'jobseeker-message.php') { ?>
                        <div class="dropdown">
                            <ul>
                                <li><a href="">FULL NAME</a></li>
                                <li><a href="">Edit Profile</a></li>
                                <li><a href="">Change Password</a></li>
                                <li><a href="">Job Applications</a></li>
                                <li><a href="">Bookmarked Jobs</a></li>
                                <li><a href="">Manage Resume</a></li>
                                <li><a href="">Logout</a></li>
                            </ul>
                        </div>
                <?php } ?>
                
                <?php 
                    if ($pageArray[0] == 'employer-message.php') { ?>
                        <div class="dropdown">
                            <ul>
                                <li><a href="">JUJUTSU HIGH</a></li>
                                <li><a href="">Edit Profile</a></li>
                                <li><a href="">Change Password</a></li>
                                <li><a href="">Manage Resume</a></li>
                                <li><a href="">Job Management</a></li>
                                <li><a href="">Job Applicants</a></li>
                                <li><a href="">Logout</a></li>
                            </ul>
                        </div>
                <?php } ?>
                
            </div>
            <label class="switch">
                <input type="checkbox" id="toggle-switch">
                <span class="slider round"></span>
            </label>
        </div>
    </nav>
</div>