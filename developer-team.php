<!DOCTYPE html>
<html lang="en">
<hea>
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
    <link rel="stylesheet" href="css/developer-team.css">
</hea d>
<body>
    <div class="color-overlay">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0">
                <a href="index.html" class="navbar-brand ms-3">
                <img src="image/light-logo.png" alt="Job Portal Logo" width="120" height="95" id="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="/Landing-Page/image/icons8-menu-60.png" alt="" width="40px" height="50px" id="burger">
                    </button>
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
                            <li><a class="nav-link fs-5 ms-3 me-5" href="login.php">LOG IN</a></li>   
                        </nav>
                    </ul>
                </div>
            </nav>         
        </div>
    </div><br><br><br>
    <div class="swits">
        <div class = 'toggle-switch'>
            <label class="lab">
              <input class="dar" type = 'checkbox' onclick="toggleImage()">
              <span id="icon2" class = 'slider'></span>
            </label>
          </div>
        </div>
        <br>
    <div class="container-responsive">
        <h1>MEET THE TEAM <br> JOP PORTAL DEVELOPERS</h1>
        <!-- <img class="design" src="image/design.png" alt="">
        <br><br><br>
        <button>ICONSCOUT</button>
        <button>FLATICON</button>
        <button>WEB</button> -->

        <div id="card1" class="card">
            <img class="image1" src="image/Borromeo, Ma. Cielo A 1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Ma Cielo A. Borromeo</h5>
                <p class="card-text">Team Leader/Maintenance</p>
            </div>
        </div>
        <div id="card1" class="card">
            <img class="image1" src="image/Valenzuela_Kristelle_Asereht_DS.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Kristelle DS. Valenzuela</h5>
                <p class="card-text">Co-Leader/Maintenance</p>
            </div>
        </div><br>
        <h2>ONGOING MEMBERS</h2>
        <div id="card1" class="card">
            <img class="image1" src="image/Pelo, Denice O.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Denice O. Pelo</h5>
                <p class="card-text">Web Design</p>
            </div>
        </div>
        <div class="grid">
            <div class="card">
                <img class="image1" src="image/Landayan, Aldin P.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Aldin P. Landayan</h5>
                    <p class="card-text">Web Design/Documentation</p>
                </div>
            </div>
            <div class="card">
                <img class="image1" src="image/Mendoza, Jello.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Jello R. Mendoza</h5>
                    <p class="card-text">Front-end Developer</p>
                </div>
            </div>
            <div class="card">
                <img class="image1" src="image/Teodoro, James Philiph O.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">James Philiph D. Teodoro</h5>
                    <p class="card-text">Back-end Developer</p>
                </div>
            </div>
            <div class="card">
                <img class="image1" src="image/Manalo, Edward.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Edward B. Manalo</h5>
                    <p class="card-text">Front-end Developer</p>
                </div>
            </div>
            <div class="card">
                <img class="image1" src="image/Añonuevo, Kim Bryant Joshua 1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kim Bryant Joshua Añonuevo</h5>
                    <p class="card-text">Maintenance</p>
                </div>
            </div>
            <div class="card">
                <img class="image1" src="image/Obrero.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mark Frederick B. Obrero</h5>
                    <p class="card-text">Back-end Developer</p>
                </div>
            </div>
            <div class="card">
                <img class="image1" src="image/Parungao.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Fernando Parungao</h5>
                    <p class="card-text">Front-End Developer</p>
                </div>
            </div>
            <div class="card">
                <img class="image1" src="image/Guiao.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Roi P. Guiao</h5>
                    <p class="card-text">Back-End Developer</p>
                </div>
            </div><br>
        </div><br><br>
        <h2>OFFBOARDED MEMBERS</h2>
        <div class="grid">
            <div class="card">
                <img class="image" src="image/coleader.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Bryan D. Ubalde</h5>
                    <p class="card-text">Co-leader/Maintenance</p>
                </div>
            </div>
            <div class="card">
                <img class="image" src="image/webdes2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Daniela A. Torres</h5>
                    <p class="card-text">Web Design</p>
                </div>
            </div>
            <div class="card">
                <img class="image" src="image/front-end2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Adrian T. Palaganas</h5>
                    <p class="card-text">Front-end Developer/Upgrade</p>
                </div>
            </div>
            <div class="card">
                <img class="image" src="image/leader.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kimberly Ann S. Flores</h5>
                    <p class="card-text">Team leader/Maintenance</p>
                </div>
            </div>
            <div class="card">
                <img class="image" src="image/back-end1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mark John B. Castillo</h5>
                    <p class="card-text">Back-end Developer</p>
                </div>
            </div>
            <div class="card">
                <img class="image" src="image/back-end5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kier John A. Manubay</h5>
                    <p class="card-text">Back-end Developer</p>
                </div>
            </div>
            <div class="card">
                <img class="image" src="image/back-end3.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ralph Eriez I. Ronquillo</h5>
                    <p class="card-text">Back-end Developer</p>
                </div>
            </div>
            <div class="card">
                <img class="image" src="image/webdes1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Janver C. Miranda</h5>
                    <p class="card-text">Web Design</p>
                </div>
            </div>
            <div class="card">
                <img class="image" src="image/front-end1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Arnold S. Dela Cruz</h5>
                    <p class="card-text">Front-end Developer</p>
                </div>
            </div>
            <div class="card">
                <img class="image" src="image/webdes3.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Abraham B. Trayco</h5>
                    <p class="card-text">Web Design</p>
                </div>
            </div>
            <div class="card">
                <img class="image" src="image/back-end4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Philip Czar A. Abrero</h5>
                    <p class="card-text">Back-end Developer</p>
                </div>
            </div>
            <div class="card">
                <img class="image" src="image/doc1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Angelo Kenneth Arojo</h5>
                    <p class="card-text">Co-Leader/Maintenance</p>
                </div>
            </div>
            <div class="card">
                <img class="image" src="image/back-end2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Justine Rome M. Gullermo</h5>
                    <p class="card-text">Back-end Developer</p>
                </div>
            </div>
            <div class="card">
                <img class="image" src="image/doc3.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">John Christian G. Galang</h5>
                    <p class="card-text">Documentation</p>
                </div>
            </div>
            <div class="card">
                <img class="image" src="image/doc4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Adrian S. Nunag</h5>
                    <p class="card-text">Documentation</p>
                </div>
            </div>
            <div class="card">
                <img class="image" src="image/front-end3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">John Ronald G. Tiamzon</h5>
                    <p class="card-text">Front-end Developer</p>
                </div>
            </div>
            <div class="card">
                <img class="image" src="image/doc2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Jeanelle L. Cansino</h5>
                    <p class="card-text">Documentation</p>
                </div>
            </div>
            <div class="card">
                <img class="image" src="image/webdes4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Amir U. Monte</h5>
                    <p class="card-text">Web Design</p>
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
                        <li class="my-0"><a href="#" class="text-dark" >Register</a></li>
                        <li class="my-0"><a href="#" class="text-dark" >Job Search</a></li>
                        <li class="my-0"><a href="howitworks-jobseeker.html" class="text-dark" >How it works</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-lg-2 mx-auto mb-4">
                    <h6 class="text-uppercase">EMPLOYER</h6> 
                    <ul class="list-unstyled">
                        <li class="my-0"><a href="#" class="text-dark" >Register</a></li>
                        <li class="my-0"><a href="#" class="text-dark" >Post a job</a></li>
                        <li class="my-0"><a href="howitworks-employ.html" class="text-dark" >How it works</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-lg-2 mx-auto mb-4">
                    <h6 class="text-uppercase">OTHER INFORMATIONS</h6>
                    <ul class="list-unstyled">
                        <li class="my-0"></i> <a href="#aboutus" class="text-dark" >About us</a></li>
                        <li class="my-0"></i> <a href="#faq" class="text-dark" >FAQ</a></li>
                        <li class="my-0"></i> <a href="termsandcondition.html" class="text-dark" >Terms and conditions</a></li>
                        <li class="my-0"></i><a href="privacypolicy.html" class="text-dark" >Privacy Policy</a></li>
                        <li class="my-0"></i> <a href="termsofuse.html" class="text-dark" >Terms of use</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-lg-2 g-0 mx-auto mb-4">
                    <h6 class="text-uppercase">Credits</h6>
                    <ul class="list-unstyled">
                        <li class="my-0"><a href="companyregister.html" class="text-dark">Developer</a></li>
                        <li class="my-0"><a href="companyregister.html" class="text-dark">Iconscout</a></li>
                        <li class="my-0"><a href="howitworks-employ.html" class="text-dark">Flaticon</a></li>
                        <li class="my-0"><a href="howitworks-employ.html" class="text-dark">Web icons</a></li>
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
      </script>
</body>
</html>