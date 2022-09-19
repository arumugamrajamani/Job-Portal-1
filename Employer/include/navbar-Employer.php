<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid"> 
        <a class="navbar-brand me-1" href="#"></a>
        <img class="logo" src="image/light-logo.png" alt="Job Portal Logo" width="100" height="70" id="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <form class="d-flex">      
            <input class="form-control icon navsearch" id="navsearch" type="search" placeholder="Search for a job title" aria-label="Search">
            <button class="btn text-dark" id="btn-navsearch" type="submit"><i class="bi bi-search"></i></button>
        </form> -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-4">
                    <a class="nav-link text-dark message active" aria-current="page" href="message-employer.php">MESSAGE</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link text-dark about active" href="postajob.php">POST A JOB</a>
                </li>             
                <li class="nav-item account dropdown active">
                    <a class="nav-link text-dark dropdown-toggle account active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="image" id="pfp" src="image/profileicon1.png" alt="Profile" width="50" height="30">
                    ACCOUNT
                    </a>
                    <ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" id="name" href="company-profile.php"> employer_name </a></li>
                        <li><hr class="dropdown-divider bg-black"></li>
                        <li><a class="dropdown-item" href="manage-account-profile.php"> Edit Profile</a></li>
                        <li><a class="dropdown-item" href="change-password.php"> Change Password</a></li>
                        <li><a class="dropdown-item" href="manage-applicant-resume.php"> Manage Resume</a></li>
                        <li><a class="dropdown-item" href="jobmanage.php"> Job Management</a></li>
                        <li><a class="dropdown-item logout" href="../logout.php"> Log Out</a></li>
                    </ul>
                </li>
                <li>
                    <div class="swits me-5">
                        <div class = 'toggle-switch'>
                            <label class="lab">
                                <input class="dar" type = 'checkbox' onclick="toggleImage()">
                                <span id="toggle_slider" class = 'slider'></span>
                            </label>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav><br>