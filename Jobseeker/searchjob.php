<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <!-- jQuery cdn link below -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/eruda"></script>
      <script>eruda.init();</script>
<link rel="stylesheet" href="css/searchjob.css">
<title>Search Job</title>
</head>

<body>
<div class="color-overlay">
    <div class="container-fluid">
        <nav id="navbar-example2" class="navbar navbar-expand-lg navbar-light fixed-top mx-0 shadow " >
            <a href="#" class="navbar-brand ms-3">
            <img src="image/light-logo.png" alt="Job Portal Logo" width="120" height="95"></a>
<form class="search-first d-flex">
    <input class="form-control1 icon1" type="search" placeholder="Search for a job title" aria-label="Search">
    <button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
</form>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="toggleMobileMenu"> 
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item me-0">
            <a class="nav-link text-dark message active fw-bold" aria-current="page" href="message-jobseekers.php">MESSAGE</a>
            </li>
            <li class="nav-item fw-bold">
            <a class="nav-link text-dark about active" href="searchjob.php">JOB BOARD</a>
            </li>
            <li class="nav-item account dropdown active"><a class="nav-link text-dark fw-bold dropdown-toggle account active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img class="image" src="image/profileicon1.png" alt="Profile" width="50" height="30"> ACCOUNT</a>
            <ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-start" href="applicant-profile.php"><img src="image/profile.png" alt=""> Full Name</a></li>
            <li>
                <hr class="dropdown-divider bg-white">
            </li>
            <li><a class="dropdown-item text-start" href="manage-account-1.php"><img src="image/edit-profile-black.png" alt=""> Edit Profile</a></li>
            <li><a class="dropdown-item text-start" href="manage-account-2.php"><img src="image/change-pass-black.png" alt=""> Change Password</a></li>
            <li><a class="dropdown-item text-start" href="bookmark-job.php"><img src="image/job-management.png" alt=""> Job Management</a></li>
            <li><a class="dropdown-item text-start" href="jobapplication.php"><img src="image/job-applicant-black.png" alt=""> Job Applications</a></li>
            <li><a class="dropdown-item text-start" href="resume.php"><img src="image/manage resume.png" alt=""> Manage Resume</a></li>
            <li><a class="dropdown-item logout text-start" href="../logout.php"><img src="image/logout-black.png" alt=""> LOGOUT</a></li>
            </ul>
        </ul>
            </div>
        </nav>         
    </div>
</div>



    <button class="openbtn" title="Open Sidebar" onclick="openNav()"><i id="list-i" class="bi bi-list fa-2x"></i></button>
    <div class="sidebar shadow-lg" id="mySidebar" class="sidebar">
        <div class="menu">
            <div class="item"><a href="javascript:void(0)" class="closebtn text-dark" title="Close Sidebar" onclick="closeNav()">×</a></div>
            <div class="d-flex">
            <div class="div1">
                <h5 class="fw-bold mt-3 text-center">JOB CATEGORIES</h5><br>
                <select class="form-select ms-2 " aria-label="Default select example">
                    <option selected>Choose Job Categories</option>
                    <option value="1">Web developer</option>
                    <option value="2">Customer Support</option>
                    <option value="3">Virtual Assistant</option>
                </select>
                <ul class="list-group mt-2 ps-4" >
                    <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                    FULL-TIME    
                    </li>
                    <li class="list-group-item" >
                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                    PART-TIME
                    </li>
                    <li class="list-group-item" >
                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                    FREELANCER
                    </li>
                </ul>
                    <select class="form-select mt-2 ms-2" aria-label="Default select example">
                        <option selected>Choose Location</option>
                    
                        <option disabled>Region 1: The Ilocos Region</option>
                        <option value="1">Ilocos Norte</option>
                        <option value="2">Ilocos Sur</option>
                        <option value="3">La Union</option>
                        <option value="4">Pangasinan</option>
                        <option disabled>Region 2: Cagayan Valley Region</option>
                        <option value="5">Batanes</option>
                        <option value="6">Cagayan</option>
                        <option value="7">Isabela</option>
                        <option value="8">Nueva Vizcaya</option>
                        <option value="9">Quirino</option>
                        <option disabled>Region 3: Central Luzon</option>
                        <option value="10">Aurora</option>
                        <option value="11">Bataan</option>
                        <option value="12">Bulacan</option>
                        <option value="13">Pampanga</option>
                        <option value="14">Tarlac</option>
                        <option value="15">Zambales</option>
                        <option value="16">Nueva Ecija</option>
                        <option disabled>Region 4-A: CALABARZON</option>
                        <option value="17">Cavite</option>
                        <option value="18">Laguna</option>
                        <option value="19">Batangas</option>
                        <option value="20">Rizal</option>
                        <option value="21">Quezon</option>
                        <option disabled>Region 4-B: MIMAROPA</option>
                        <option value="22">Occidental Mindoro</option>
                        <option value="23">Oriental Mindoro</option>
                        <option value="24">Marinduque</option>
                        <option value="25">Romblon</option>
                        <option value="26">Palawan</option>
                        <option disabled>Region 5: Bicol Region</option>
                        <option value="22">Camarines Norte</option>
                        <option value="23">Camarines Sur</option>
                        <option value="24">Catanduanes</option>
                        <option value="25">Masbate</option>
                        <option value="26"> Sorsogon</option>
                        <option value="26"> Albay</option>
                        <option disabled>Region 6: Western Visayas</option>
                        <option value="27"> Aklan</option>
                        <option value="28">Antique</option>
                        <option value="29">Guimaras</option>
                        <option value="30"> Capiz</option>
                        <option value="31"> Iloilo</option>
                        
                        <option disabled>Region 7: Central Visayas Region</option>
                        <option value="32">Bohol</option>
                        <option value="33">Cebu</option>
                        <option value="34">Siquijor</option>
                        <option disabled>Negros Island Region</option>
                        <option value="35">Negros Oriental</option>
                        <option value="36">Negros Occidental</option>
                        <option disabled>Region 8: Eastern Visayas Region</option>
                        <option value="37">Biliran</option>
                        <option value="38">Leyte</option>
                        <option value="39">Northern Samar</option>
                        <option value="40">Samar</option>
                        <option value="41">Southern Leyte</option>
                        <option value="42">Eastern Samar</option>
                        <option disabled>Region 9:Zamboanga Peninsula</option>
                        <option value="43">Zamboanga Del Norte</option>
                        <option value="44">Zamboanga del Sur</option>
                        <option value="44">Zamboanga Sibugay</option>
                        <option disabled>Region 10: Northern Mindanao</option>
                        <option value="45">Camiguin</option>
                        <option value="46">Zamboanga del Sur</option>
                        <option value="47">Bukidnon</option>
                        <option value="48">Lanao Del Norte</option>
                        <option value="49">Misamis Oriental</option>
                        <option value="50">Misamis Occidental</option>
                        <option disabled>Region 11: Davao Region</option>
                        <option value="51">Compostela Valley</option>
                        <option value="52">Davao del Norte</option>
                        <option value="53">Davao del Sur</option>
                        <option value="54">Davao Oriental</option>
                        <option value="55">Davao Occidental</option>
                        <option disabled>Region 12:South Central Mindanao</option>
                        <option value="56">South Cotabato</option>
                        <option value="57">Cotabato</option>
                        <option value="47">Sultan Kudarat</option>
                        <option value="58">Sarangani</option>
                        <option disabled>Region 13: The Caraga Region</option>
                        <option value="59">Agusan del Norte</option>
                        <option value="60">Agusan del Sur</option>
                        <option value="62">Surigao del Norte</option>
                        <option value="62">Surigao del Sur</option>
                        <option value="63">Dinagat Islands</option>
                        <option disabled>Region 14: CAR</option>
                        <option value="64">Apayao</option>
                        <option value="65">Abra</option>
                        <option value="66">Benguet</option>
                        <option value="67">Ifugao</option>
                        <option value="68">Kalinga</option>
                        <option value="69">Mountain Province</option>
                        <option disabled>ARMM</option>
                        <option value="70">Basilan</option>
                        <option value="71">Lanao del Sur</option>
                        <option value="72">Maguindanao</option>
                        <option value="73">Sulu</option>
                        <option value="74">Tawi-Tawi</option>
                    </select><br>
                    <h5 class="fw-bold text-center mt-3">SALARY RANGES</h5>
                    <ul class="list-group mt-4 ps-4" >
                        <li class="list-group-item fw-bold " >
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        ₱5,000 - 10,000   
                        </li>
                        <li class="list-group-item fw-bold" >
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        ₱10,000 - 15,000
                        </li>
                        <li class="list-group-item fw-bold" >
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        ₱15,000 - 20,000
                        </li>
                        <li class="list-group-item fw-bold" >
                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                            ₱20,000+
                        </li>
                    </ul><br>
                    <span class="input-icons"><i class="bi bi-search ps-2 pt-1 ms-3" ></i>
                        <input class="form-control me-2 ps-5 ms-2" type="search" placeholder="Enter specific company" aria-label="Search">
                    </span>
                    <div class="d-flex mt-5 refine">
                        <button type="submit" class=" text-dark btn4"> Refine Search Outcomes</button>
                        <button type="submit" class="ms-2 text-white btn5">Clear</button>
                    </div>
            </div>
                </div>
            </div>
        </div>

            
            <div class="container1 div2">
                <h3 class="fw-bold">SEARCH RESULTS</h3>
                <div id="body-h"></div>
                <!--<div class="bg-white shadow-sm d-flex div3"><br>
                    <img src="image/comlogo.png" alt="company logo" class="ms-3 mt-4 logo">
                    <div class="block mt-2">
                        <div class="d-flex">
                            <h5 class="mt-3 fw-bold ms-4 job">Software Engineer Team Lead - 3PEF And Economics</h5>
                            <button class="mt-2 p-2 px-3 text-dark btn1" data-bs-toggle="modal" data-bs-target="#qr-code" type="button">Company QR Code</button>
                            <button class="mt-2 p-2 px-3 text-dark btn1" id="details1" type="button">View Details</button>
                        </div>
                        <h6 class="ms-4 fw-bold">FactSet Philippines, Inc.</h6>
                        <div class="ms-4">
                            <i class="bi bi-geo-alt-fill fw-bold"> Taguig City, NCR</i>
                            <i class="bi bi-briefcase-fill ms-3 fw-bold"> Supervisor / Senior Associate (5 yrs and up experience)</i>
                            <i class="bi bi-currency-dollar ms-3 fw-bold"> Salary Undisclosed</i>
                        </div><br>
                        <p class="ms-4">- A Software  Engineering Team Lead for FactSet’s Content Engineering Team reports to the Engineeering Manager <br>and coordinates with anshore...</p>
                    </div>
                </div>
                <div class="bg-white shadow-sm d-flex mt-4 div3"><br>
                    <img src="image/smlogo.png" alt="company logo" class="ms-3 mt-4 logo">
                    <div class="block mt-2">
                        <div class="d-flex">
                            <h5 class="mt-3 fw-bold ms-4 job">Senior Full-Stack Web Developer (Head Office, Pasay City)</h5>
                            <button class="mt-2 p-2 px-3 text-dark btn2" data-bs-toggle="modal" data-bs-target="#qr-code" type="button">Company QR Code</button>
                            <button class="mt-2 p-2 px-3 text-dark btn2" onclick="location.href='insidejob.php'" type="button">View Details</button>
                        </div>
                        <h6 class="ms-4 fw-bold">SM Prime Holdings, Inc.</h6>
                        <div class="ms-4">
                            <i class="bi bi-geo-alt-fill fw-bold"> Pasay City, NCR</i>
                            <i class="bi bi-briefcase-fill ms-3 fw-bold"> Senior Manager / Manager</i>
                            <i class="bi bi-currency-dollar ms-3 fw-bold"> Salary Undisclosed</i>
                        </div><br>
                        <p class="ms-4">- A Senior Web Software Engineer who transforms passion to efficient and robust web technology platform. Reports to: Product Development Lead...</p>
                    </div>
                </div>
                <div class="bg-white shadow-sm d-flex mt-4 div3"><br>
                    <img src="image/smlogo.png" alt="company logo" class="ms-3 mt-4 logo">
                    <div class="block mt-2">
                        <div class="d-flex">
                            <h5 class="mt-3 fw-bold ms-4 job">Associate Software Developer For Digital Commerce <br> (Head Office, Pasay City)</h5>
                            <button class="mt-2 p-2 px-3 text-dark btn3" type="button" data-bs-toggle="modal" data-bs-target="#qr-code">Company QR Code</button>
                            <button class="mt-2 p-2 px-3 text-dark btn3" type="button" onclick="location.href='insidejob.php'">View Details</button>
                        </div>
                        <h6 class="ms-4 fw-bold">FactSet Philippines, Inc.</h6>
                        <div class="ms-4">
                            <i class="bi bi-geo-alt-fill fw-bold"> Taguig City, NCR</i>
                            <i class="bi bi-briefcase-fill ms-3 fw-bold"> Junior Associate (1-4 yrs experience)</i>
                            <i class="bi bi-currency-dollar ms-3 fw-bold"> Salary Undisclosed</i>
                        </div><br>
                        <p class="ms-4">- A Software Developer who transforms passion into a beautiful and robust web platform. Software Developement develops web apps for SM...</p>
                    </div> -->
                <!-- </div> -->
                <!-- <nav aria-label="Page navigation example">
                    <div class="entries" id="entries">
                        </span>Show 1 to 3 of 3 entries</span>
                    </div>
                    <ul class="pagination" id="pagination">
                    <li class="page-item num1"><a class="page-link page1" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    <li class="page-item"><a class="page-link" href="#">Last</a></li>
                    </ul>
                </nav> -->
            </div>
    </div>
</div>
    <div class="modal fade" id="modal-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ms-5" id="exampleModalLabel">View Details?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="delete modal-body">
                    <button type="button" id="del-yes" class="yes-no btn btn-success">Yes</button>
                    <button type="button" class="yes-no btn btn-danger" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
<div class="modal fade" id="qr-code" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Please scan this <b class="q-r" >QR CODE </b> for<br> more information about me.</h5>
        <a href="#" data-bs-dismiss="modal" aria-label="Close"><img src="image/close.png" class="close-button" alt="" srcset=""></a>
        </div>
        <div id="dialog1" class="triangle_down"></div>
        <div class="qr modal-body">
        <img class="qrcolor" src="image/Qr-Code.png" alt="">
        </div>
    </div>
    </div>
</div>

</body>
<script src="js/searchjob.js"></script>    
</html>