<?php
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/') + 1);
?>
<div class="container-fluid">
    <nav id="navbar-example2" class="navbar navbar-expand-lg navbar-light fixed-top shadow ">
        <div class="navbar-brand">
            <img src="image/light-logo.png" alt="Job Portal Logo" class="flogo" id="logos">
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="image/icons8-menu-60.png" alt="" id="men" width="40px" height="50px"></span>
        </button>
        <div class="collapse navbar-collapse" id="toggleMobileMenu">
            <ul class="navbar-nav ms-auto text-center fw-bold">
                <nav class="navbar navbar-light">
                    <li><a class="nav-link me-5" href="<?php if ($page == "index.php") echo '#home';
                                                        else echo 'index.php#home'; ?>">Home</a></li>
                    <li><a class="nav-link me-5" href="<?php if ($page == "index.php") echo '#aboutus';
                                                        else echo 'index.php#aboutus'; ?>">About Us</a></li>
                    <li><a class="nav-link me-5" href="<?php if ($page == "index.php") echo '#contactus';
                                                        else echo 'index.php#faq'; ?>">Contact Us</a></li>
                    <li><a class="nav-link me-5" href="<?php if ($page == "index.php") echo '#faq';
                                                        else echo 'index.php#faq'; ?>">FAQ</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mx-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Signup</a>
                        <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="companyregister.php">Employer</a></li>
                            <li><a class="dropdown-item " href="jobseekersignup.php">JobSeeker</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link me-4 ms-3" href="login.php">Login</a></li>
                </nav>
            </ul>
        </div>
    </nav>
</div>