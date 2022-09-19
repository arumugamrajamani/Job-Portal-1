<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Team</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> <!--Added--->
    <link rel="stylesheet" href="css/developer-backend.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <a href="https://www.flaticon.com/free-icons/graphic-design" title="graphic design icons">Graphic design icons created by Freepik - Flaticon</a>
    <a href="https://www.flaticon.com/free-icons/web-development" title="web development icons">Web development icons created by Freepik - Flaticon</a>
    <a href="https://www.flaticon.com/free-icons/development" title="development icons">Development icons created by Freepik - Flaticon</a>
    <a href="https://www.flaticon.com/free-icons/tester" title="tester icons">Tester icons created by Smashicons - Flaticon</a>
    <a href="https://www.flaticon.com/free-icons/maintenance" title="maintenance icons">Maintenance icons created by Freepik - Flaticon</a>
</head>
<body>
    <input type="checkbox" id="bar">
    <label for="bar">
        <i class="fas fa-bars" id="openbtn"></i>
        <i class="fas fa-times" id="closebtn"></i>
    </label>
    <div class="sidebar">
        <header>DEVELOPERS</header>
        <ul>
            <li>
                <img src="image/maintenance.png">
                <a href="developer-team.php">Maintenance & Upgrade</a>
            </li>
            <li>
                <img src="image/tester.png">
                <a href="developer-documentation.php">Documentation & Testers</a>
            </li>
            <li>
                <img src="image/graphic-design.png">
                <a href="developer-webdesign.php">Web Designers</a>
            </li>
            <li>
                <img src="image/improvement.png">
                <a href="developer-frontend.php">Front-End Developers</a>
            </li>
            <li>
                <img src="image/web-development.png">
                <a href="#">Back-End Developers</a>
            </li>
        </ul>
    </div>
    <div class="color-overlay">
        <div class="container">
            <nav class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow">
                <a href="index.php" class="navbar-brand ms-3">
                    <img src="image/light-logo.png" alt="Job Portal Logo"id="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="/Landing-Page/image/icons8-menu-60.png" alt="" width="40px" height="50px" id="burger">                    </button>
                    <div class="collapse navbar-collapse" id="toggleMobileMenu">
                        <ul class="navbar-nav ms-auto text-center">
                            <nav class="navbar navbar-light fw-bold">  
                                <li><a class="nav-link me-5 fs-5" href="index.php#home">Home</a></li>
                                <li><a class="nav-link me-5 fs-5" href="index.php#aboutus">About Us</a></li>
                                <li><a class="nav-link me-5 fs-5" href="index.php#contactus">Contact Us</a></li>            
                                <li><a class="nav-link me-5 fs-5" href="index.php#faq">FAQ</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle fs-5 me-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Signup</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item me-4 fs-5" href="companyregister.php">Employer</a></li>
                                        <li><a class="dropdown-item me-4 fs-5" href="jobseekersignup.php">JobSeeker</a></li>
                                    </ul>
                                </li>
                                <li><a class="nav-link fs-5 ms-3 me-5" href="login.php">Login</a></li>   
                                <li>
                                    <div class="swits me-5">
                                        <div class = 'toggle-switch'>
                                            <label class="lab">
                                              <input class="dar" type = 'checkbox' onclick="toggleImage()">
                                              <span id="icon2" class = 'slider'></span>
                                            </label>
                                          </div>
                                    </div>
                                </li>
                            </nav>
                        </ul>
                    </div>
                </nav>         
            </div>
        </div><br><br><br><br><br><br>
        <div class="container-responsive">
            <h1>MEET THE TEAM <br> JOP PORTAL DEVELOPERS</h1>
            <div class="container-box">
                <h5>Back-End Developers</h5>
                <div class="grid">
                    <div class="card">
                        <img class="image1" src="image/Carl Louie C. Cumpio.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Carl Louie C. Cumpio</h5>
                            <p class="card-text">Back-end Developer</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="image1" src="image/Alejandro B. Babilonia.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Alejandro B. Babilonia</h5>
                            <p class="card-text">Back-end Developer</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="image1" src="image/Mark Anthony S. Pandan.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mark Anthony S. Pandan</h5>
                            <p class="card-text">Back-end Developer</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="image1" src="image/Silas Samuel B. Baguhin.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Silas Samuel B. Baguhin</h5>
                            <p class="card-text">Back-end Developer</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="image1" src="image/Viel M. Asiddao.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Viel M. Asiddao</h5>
                            <p class="card-text">Back-end Developer</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="image1" src="image/Mark Ain James P. Ello.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mark Ain James P. Ello</h5>
                            <p class="card-text">Back-end Developer</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="image1" src="image/Raymwel Selibio.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Raymwel Selibio</h5>
                            <p class="card-text">Back-end Developer</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="image1" src="image/Sami L. Zine.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sami L. Zine</h5>
                            <p class="card-text">Back-end Developer</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="image" src="image/back-end2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Justine Rome M. Gullermo</h5>
                            <p class="card-text">Back-end Developer</p>
                        </div>
                    </div>
                    <div class="card" id="card2">
                        <img class="image1" src="image/Teodoro, James Philiph O.jpg" class="card-img-top" alt="...">
                        <div class="card-body" id="card3">
                                <h5 class="card-title">James Philiph D. Teodoro</h5>
                                <p class="card-text">Former Back-end Developer</p>
                            </div>
                        </div>
                    <div class="card" id="card2">
                        <img class="image1" src="image/Guiao.png" class="card-img-top" alt="...">
                        <div class="card-body" id="card3">
                            <h5 class="card-title">Roi P. Guiao</h5>
                            <p class="card-text">Former Back-End Developer</p>
                        </div>
                    </div>
                    <div class="card" id="card2">
                        <img class="image1" src="image/Obrero.png" class="card-img-top" alt="...">
                        <div class="card-body" id="card3">
                            <h5 class="card-title">Mark Frederick B. Obrero</h5>
                            <p class="card-text">Former Back-end Developer</p>
                        </div>
                    </div>
                    <div class="card" id="card2">
                        <img class="image" src="image/back-end1.jpg" class="card-img-top" alt="...">
                        <div class="card-body" id="card3">
                            <h5 class="card-title">Mark John B. Castillo</h5>
                            <p class="card-text">Former Back-end Developer</p>
                        </div>
                    </div>
                    <div class="card" id="card2">
                        <img class="image" src="image/back-end5.jpg" class="card-img-top" alt="...">
                        <div class="card-body" id="card3">
                            <h5 class="card-title">Kier John A. Manubay</h5>
                            <p class="card-text">Former Back-end Developer</p>
                        </div>
                    </div>
                    <div class="card" id="card2">
                        <img class="image" src="image/back-end3.png" class="card-img-top" alt="...">
                        <div class="card-body" id="card3">
                            <h5 class="card-title">Ralph Eriez I. Ronquillo</h5>
                            <p class="card-text">Former Back-end Developer</p>
                        </div>
                    </div>
                    <div class="card" id="card2">
                        <img class="image" src="image/back-end4.jpg" class="card-img-top" alt="...">
                        <div class="card-body" id="card3">
                            <h5 class="card-title">Philip Czar A. Abrero</h5>
                            <p class="card-text">Former Back-end Developer</p>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>
<footer class="page-footer shadow"><br>
        <div class="container-fluid text-start text-md-left mt-5 px-5">
            <div class="row">
				<div class="col-md-2 col-lg-2 mx-auto mb-4">
                    <h6 class="text-uppercase">JOB SEEKER</h6>
                    <ul class="list-unstyled">
                        <li class="my-0"><a href="jobseekersignup.php" class="text-dark" >Register</a></li>
                        <li class="my-0"><a href="searchjob-home.php" class="text-dark" >Job Search</a></li>
                        <li class="my-0"><a href="howitworks-jobseeker.php" class="text-dark" >How it works</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-lg-2 mx-auto mb-4">
                    <h6 class="text-uppercase">EMPLOYER</h6> 
                    <ul class="list-unstyled">
                        <li class="my-0"><a href="companyregister.php" class="text-dark" >Register</a></li>
                        <li class="my-0"><a href="../Job-Portal/Employer/postajob.php" class="text-dark" >Post a job</a></li>
                        <li class="my-0"><a href="howitworks-employ.php" class="text-dark" >How it works</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-lg-2 mx-auto mb-4">
                    <h6 class="text-uppercase">OTHER INFORMATIONS</h6>
                    <ul class="list-unstyled">
                        <li class="my-0"></i> <a href="index.php#aboutus" class="text-dark" >About us</a></li>
                        <li class="my-0"></i> <a href="index.php#faq" class="text-dark" >FAQ</a></li>
                        <li class="my-0"></i> <a href="termsandcondition.php" class="text-dark" >Terms and conditions</a></li>
                        <li class="my-0"></i><a href="privacypolicy.php" class="text-dark" >Privacy Policy</a></li>
                        <li class="my-0"></i> <a href="termsofuse.php" class="text-dark" >Terms of use</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-lg-2 g-0 mx-auto mb-4">
                    <h6 class="text-uppercase">Credits</h6>
                    <ul class="list-unstyled">
                        <li class="my-0"><a href="#" class="text-dark">Developer</a></li>
                        <li class="my-0"><a href="credit-iconscout.php" class="text-dark">Iconscout</a></li>
                        <li class="my-0"><a href="credit-flaticon.php" class="text-dark">Flaticon</a></li>
                        <li class="my-0"><a href="credit-otherinfo.php" class="text-dark">Web icons</a></li>
                    </ul>
                </div>
                <div class="contact-us col-md-2 col-lg-2 mx-auto mb-4 text-center">
                    <h6 class="text-uppercase">CONTACT US</h6>
                    <ul class="contact-me list-unstyled d-flex">
                        <img class="my-0" src="image/gmail.png" alt="logo" href="#">
                        concerns.techploymentph@gmail.com
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script>
        var icon2 = document.getElementById("icon2")
    
        icon2.onclick = function(){
          document.body.classList.toggle("dark-theme");
        }
        
        function toggleImage(){
          imgsrc= document.getElementById("logo").src;
        if (imgsrc.indexOf("image/light-logo.png") !=-1){
          document.getElementById("logo").src = "image/Techployment (7) 1.png";
        }
        else{
          document.getElementById("logo").src = "image/light-logo.png";
        }
        imgsrc= document.getElementById("burger").src;
        if (imgsrc.indexOf("/Landing-Page/image/icons8-menu-60.png") !=-1){
          document.getElementById("burger").src = "/Landing-Page/image/selection.png";
        }
        else{
          document.getElementById("burger").src = "/Landing-Page/image/icons8-menu-60.png";
        }
        }
        
        // For the content to change position when the sidebar is open or not
        $(document).ready(function() {
            $('#openbtn').click(function() {
                if (!$('.sidebar').hasClass('minimize')) {
                    $('.sidebar').addClass('minimize');
                    $('.container-responsive').addClass('minimize');
                }
            });
            $('#closebtn').click(function() {
                if ($('.sidebar').hasClass('minimize')) {
                    $('.sidebar').removeClass('minimize');
                    $('.container-responsive').removeClass('minimize');
                } 
            })
        });

      </script>
</body>
</php>