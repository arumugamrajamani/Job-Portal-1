<div class="container-fluid" id="inner" style="display: flex; justify-content: space-between;">
    <div style="margin-left: 10px;">
        <img class="img" src="image/Dark_Theme_Logo.png" alt="Job Portal Logo"id="logo" 
		style="max-width: 95px; max-height: auto;">
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border-color: transparent;">
        <img src="image/burger.png" alt="" width="40px" height="auto" id="burger">
    </button>
    <form class="d-flex searchbar" id="sea">
        <input class="form-control icon" type="search" placeholder="Search for a job title" aria-label="Search">
        <button class="btn text-dark fw-bold search" type="submit"><img src="image/bx-search.png" alt="Search" width="24" class="bts"></button>
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item1 me-0">
		        <a class="nav-link text-dark message active fw-bold" aria-current="page" href="../message-jobseekers.php">MESSAGE</a>
            </li>
            <li class="nav-item1 fw-bold">
                <a class="nav-link text-dark about active" href="../searchjob.php">JOB POST</a>
            </li>
            <li class="nav-item account dropdown active">
				<a class="nav-link text-dark fw-bold dropdown-toggle account active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<!-- <img class="image" id="pfp" src="image/Copy_of_Parungao_Fernando.png" alt="Profile" width="55" height="55"> Fernando Parungao -->
                    <img id="pfp" class="image" src="" alt="Profile" width="55" height="55" style="border-radius: 100px; object-fit: cover;"> <span id="name"></span>
				</a>
				<ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item text-light" href="../applicant-profile.php">FULL NAME</a></li>
					<li><hr class="dropdown-divider bg-white"></li>
					<li><a class="dropdown-item text-light" href="../manage-account-1.php">ACCOUNT SETTINGS</a></li>
					<li><a class="dropdown-item text-light" href="../jobapplication.php">JOB APPLICATIONS</a></li>
					<li><a class="dropdown-item logout text-light" href="../manage-account-2.php">CHANGE PASSWORD</a></li>
					<li><a class="dropdown-item text-light" href="../bookmark-job.php">BOOKMARKED JOBS</a></li>
					<li><a class="dropdown-item text-light" href="../manage-resume-jobseeker.php">MANAGE RESUME</a></li>
					<li><a class="dropdown-item logout text-light" href="../../logout.php">LOGOUT</a></li>
				</ul>
			</li>
        </ul>
    </div>
</div>