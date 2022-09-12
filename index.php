<!-- hello testing -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techployment</title>
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,455;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <!--JS CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JQuery CDN below -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Toast CDN for functionality of toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Toast CDN for design of toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/index.css">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example2">
    <div class="color-overlay">
        <?php include_once 'include/navbar.php'; ?>
    </div>

    <div data-bs-offset="0" class="scrollspy-example" tabindex="0">

        <div class="swits">
            <div class='toggle-switch'>
                <label class="lab">
                    <input class="dar" type='checkbox' onclick="toggleImage()">
                    <span id="icon2" class='slider'></span>
                </label>
            </div>
        </div>
        <section class="masthead" id="home">
            <?php include_once 'include/home.php'; ?>
        </section>

        <section id="aboutus">
            <?php include_once 'include/about_us.php'; ?>
        </section>

        <section class="con0" id="contactus"><br><br><br><br>
            <?php include_once 'include/contact_us.php'; ?>
        </section>

        <section class="masthead mh1" id="faq">
            <?php include_once 'include/faq.php'; ?>
        </section>

    </div>


    <footer class="page-footer shadow-sm"><br>
        <div class="container-fluid text-start text-md-left mt-5 px-4">
            <div class="row">
                <div class="col-md-2 col-lg-2 g-0  mb-4">
                    <h6 class="text-uppercase ">JOB SEEKER</h6>
                    <ul class="list-unstyled">
                        <li class="my-0"><a href="jobseekersignup.php" class="text-dark">Register</a></li>
                        <li class="my-0"><a href="searchjob-home.php" class="text-dark">Job Search</a></li>
                        <li class="my-0"><a href="howitworks-jobseeker.php" class="text-dark">How it works</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-lg-2 g-0  mb-4">
                    <h6 class="text-uppercase ">EMPLOYER</h6>
                    <ul class="list-unstyled">
                        <li class="my-0"><a href="companyregister.php" class="text-dark">Register</a></li>
                        <li class="my-0"><a href="../Job-Portal/Employer/postajob.php" class="text-dark">Post a job</a></li>
                        <li class="my-0"><a href="howitworks-employ.php" class="text-dark">How it works</a></li>

                    </ul>
                </div>
                <div class="col-md-2 col-lg-2 g-0  mb-4 me-5">
                    <h6 class="text-uppercase ">OTHER INFORMATIONS</h6>

                    <ul class="list-unstyled">
                        <li class="my-0"></i> <a href="index.php#faq" class="text-dark">FAQ</a></li>
                        <li class="my-0"></i> <a href="index.php#aboutus" class="text-dark">About us</a></li>
                        <li class="my-0"></i><a href="privacypolicy.php" class="text-dark">Privacy Policy</a></li>
                        <li class="my-0"></i> <a href="termsofuse.php" class="text-dark">Terms of use</a></li>
                        <li class="my-0"></i> <a href="termsandcondition.php" class="text-dark">Terms and conditions</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-lg-2 g-0  mb-4">
                    <h6 class="text-uppercase ">Credits</h6>
                    <ul class="list-unstyled">
                        <li class="my-0"><a href="developer-team.php" class="text-dark">Developer</a></li>
                        <li class="my-0"><a href="credit-iconscout.php" class="text-dark">Iconscout</a></li>
                        <li class="my-0"><a href="credit-flaticon.php" class="text-dark">Flaticon</a></li>
                        <li class="my-0"><a href="credit-otherinfo.php" class="text-dark">Web icons</a></li>

                    </ul>
                </div>
                <div class="col-md-2 col-lg-3 g-0 mb-4 text-center contact-us">
                    <h6 class="text-uppercase ">CONTACT US</h6>

                    <ul class="list-unstyled d-flex justify-content-center con-img">
                        <img class="my-0" src="image/gmail.png" alt="logo" href="#" style="width: 50px; height: 25px">
                        concerns.techploymentph@gmail.com
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="container-fluid d-flex bg-white pt-3">
        <div class="d-flex justify-content-start">
            <h5> Copyrignt © TechPloyment 2022. All Rights Reserved.</h5>
        </div>
        <div class="ms-auto">
            <h5>Developed by MCC Interns 2022, Job Portal</h5>
        </div>
        <br>
    </div>

    <script>
        var scrollSpy = new bootstrap.ScrollSpy(document.body, {
            target: '#navbar-example2'
        })
    </script>

    <script>
        var icon2 = document.getElementById("icon2")

        icon2.onclick = function() {
            document.body.classList.toggle("dark-theme");
        }

        function toggleImage() {
            imgsrc = document.getElementById("logos").src;
            if (imgsrc.indexOf("image/light-logo.png") != -1) {
                document.getElementById("logos").src = "image/Techployment (7) 1.png";
            } else {
                document.getElementById("logos").src = "image/light-logo.png";
            }
            imgsrc = document.getElementById("men").src;
            if (imgsrc.indexOf("/Landing-Page/image/icons8-menu-60.png") != -1) {
                document.getElementById("men").src = "/Landing-Page/image/selection.png";
            } else {
                document.getElementById("men").src = "/Landing-Page/image/icons8-menu-60.png";
            }
        }
    </script>

    <script src="js/faq.js"></script>
    <script src="js/contactus.js"></script>
    <script src="js/faqsearch.js"></script>
    <script src="js/system-info.js"></script>
</body>

</html>