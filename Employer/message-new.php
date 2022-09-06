<?php include_once 'include/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,455;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:wght@300&display=swap" rel="stylesheet">
	<!--Bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!--Icons-->
	<script src="https://kit.fontawesome.com/67c66657c7.js"></script>
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
	<!-- jQuery cdn link below -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/message-new.css">
	<title>Message</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container-fluid"> 
			<a class="navbar-brand me-1" href="#"></a>
			<img src="image/flogo.png" alt="Job Portal Logo" width="100" height="70"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<form class="d-flex ms-2">      
				<input class="form-control icon" type="search" placeholder="Search for a job title" aria-label="Search">
				<button class="btn text-dark search" type="submit"><i class="bi bi-search"></i></button>
			</form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item me-0">
						<a class="nav-link text-dark message active" aria-current="page" href="message-employer.php">MESSAGE</a>
					</li>
					<li class="nav-item me-0">
						<a class="nav-link text-dark about active" href="postajob.php">POST A JOB</a>
					</li>             
					<li class="nav-item account dropdown active">
					<a class="nav-link text-dark dropdown-toggle account active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<<img id="pfp" class="image" style="border-radius: 100px; object-fit: cover;" src="" alt="Profile" width="30" height="30"> ACCOUNT</a>
                    <ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
						<li><a id="name" class="dropdown-item text-light" href="company-profile.php"></a></li>
						<li><hr class="dropdown-divider bg-white"></li>
						<li><a class="dropdown-item text-light" href="jobmanage.php">JOB MANAGEMENT</a></li>
						<li><a class="dropdown-item text-light" href="manage-applicant-resume.php">MANAGE RESUME</a></li>
						<li><a class="dropdown-item text-light" href="manage-account-profile.php">MANAGE ACCOUNT PROFILE</a></li>
						<li><a class="dropdown-item logout text-light" href="../logout.php">LOGOUT</a></li>
					</ul>
				</ul>
            </div>
        </div>
    </nav>
	<div class="d-flex mt-5 ms-5">
		<div class="container con1 bg-white shadow " >
			<h5 class="text-center mt-3">MESSAGE</h5>
			<div class="block">
				<div class="d-flex ms-4">
					<i class="bi bi-caret-right-fill fa-2x mt-4"></i>
					<button class="mt-4 btn1 mb-4 ms-3" id="submit" > 
						<div class="d-flex">
							<i class="bi bi-envelope fa-2x me-1"></i> 
							<h6 class="mt-2 ps-1">JOB MESSAGES</h6>	
						</div>
					</button>
				</div>
				<div class="text-center">
					<button class="btn1 mb-4" id="submit" onclick="location.href='message-sent.php'"> 
						<div class="d-flex">
							<i class="bi bi-send-fill fa-2x me-1"></i>
							<h6 class="mt-2 ps-2">SENT</h6>	
						</div>
					</button>
				</div>
				<div class="text-center">
					<button class="btn1 mb-4" id="submit" onclick="location.href='recycle-bin-employer.php'" > 
						<div class="d-flex">
							<i class="bi bi-trash fa-2x me-1"></i>
							<h6 class="mt-2 ps-2">RECYCLE BIN</h6>	
						</div>
					</button>
				</div>
				<div class="text-center">
					<button class="btn1 mb-4" id="submit" onclick="location.href='message-spam.php'"> 
						<div class="d-flex">
							<i class="bi bi-envelope-exclamation-fill fa-2x me-1"></i>
							<h6 class="mt-2 ps-2">SPAM</h6>	
						</div>
					</button>
				</div>
			</div>
		</div>
	
		<div class="container-md bg-white shadow p-0">
            <div class="con2 row col-lg-12">
                <div class="col-lg-5">
					<button class="return" type="submit">
						<img src="image/arrow-left.png" class="mt-3" alt="" width="35px" height="30px" onclick="location.href='message-employer.php'">
					</button>
                </div>
                <div class="col-lg-7 mt-3">
					<h4>New Message</h4>
                </div>
            </div>
                <div class="div1 ms-5 mb-3 mt-4">
                    <div class="d-flex p-2 ">
                        <text class="">To:</text>
                        <input class="ms-2 text-decoration-underline email" placeholder="exampleuser2022@gmail.com">
                    </div>
                </div>
                <div class="d-flex div1 ms-5">
                    <div class="p-2">
                        <text><b>Subject:</b> SAMPLE SUBJECT</text>
                    </div>
                </div>
                <div class="d-flex div2 mt-5">
                    <button type="submit" class="me-2 img-b"><img src="image/B (1).png" alt=""></button>
                    <button type="submit" class="me-2 img-96"><img src="image/image 96.png" alt=""></button>
                    <button type="submit" class="me-2 img-96"><img src="image/image 97.png" alt=""></button>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle img-98" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="image/image 98.png" alt="">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li class="dropdown-item d-flex">
                                <button class="me-2 btn2"><img src="image/image 99.png" alt="" ></button>
                                <button class="me-2 btn2"><img src="image/image 100.png" alt="" ></button>
                                <button class="btn2"><img src="image/image 101.png" alt=""></button>
                            </li>
                        </ul>
                    </div>
                    <button type="submit" class="img-102 ms-2"><img src="image/image 102.png" alt=""></button>
                </div>
                    <textarea class="form-control reply pt-5 mt-4"  placeholder="Type a message" rows="4"></textarea>
					<button type="submit" class="btn-send fw-bold"><i class="bi bi-send-fill fa-2x me-1"></i>Send </button>
				
        </div>
	
	<script>
			function clickMe() {
		var checkbox = document.getElementById("popup");
		checkbox.classList.toggle("hide");
		checkbox.classList.toggle("show");
		var checkbox = document.getElementById("popup1");
		checkbox.classList.toggle("hide");
		checkbox.classList.toggle("show");
		var checkbox = document.getElementById("popup2");
		checkbox.classList.toggle("hide");
		checkbox.classList.toggle("show");
		var checkbox = document.getElementById("popup3");
		checkbox.classList.toggle("hide");
		checkbox.classList.toggle("show");
		var checkbox = document.getElementById("popup4");
		checkbox.classList.toggle("hide");
		checkbox.classList.toggle("show");
		var checkbox = document.getElementById("popup5");
		checkbox.classList.toggle("hide");
		checkbox.classList.toggle("show");
		var checkbox = document.getElementById("popup6");
		checkbox.classList.toggle("hide");
		checkbox.classList.toggle("show");
		}
	</script>
	<script src="js/pfp.js"></script>
</body>
</html>
