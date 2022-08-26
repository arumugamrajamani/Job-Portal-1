<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,455;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:wght@300&display=swap"
		rel="stylesheet">
	<!--Bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
		integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/message-spam.css">
	<script src="https://kit.fontawesome.com/67c66657c7.js"></script>
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
	<!-- jQuery cdn link below -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<title>Spam</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
		<div class="container-fluid">
			<a class="navbar-brand me-1" href="#"></a>
			<img src="image/light-logo.png" alt="Job Portal Logo" width="100" height="70" id="logo"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<form class="d-flex">
				<input class="form-control icon" type="search" placeholder="Search for a job title" aria-label="Search">
				<button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
			</form>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item me-0">
						<a class="nav-link text-dark message active fw-bold menubar" aria-current="page"
							href="message-jobseekers.php">MESSAGE</a>
					</li>
					<li class="nav-item fw-bold">
						<a class="nav-link text-dark about active" href="jobcategories.php">JOB BOARD</a>
					</li>
					<li class="nav-item account dropdown active">
						<a class="nav-link text-dark fw-bold dropdown-toggle account active" href="#"
							id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img id="pfp" class="image" src="" alt="Profile" width="30" height="30" style="border-radius: 100px; object-fit: cover;"> ACCOUNT</a>
            <ul class="dropdown-menu account-drop drop" aria-labelledby="navbarDropdown">
                <li><a id="name" class="dropdown-item text-light text-start name" href="applicant-profile.php"></a></li>
							<li><hr class="dropdown-divider bg-black"></li>
							<li><a class="dropdown-item text-light text-start" href="manage-account-1.php"> Edit Profile</a></li>
							<li><a class="dropdown-item text-light text-start" href="manage-account-2.php"> Change Password</a></li>
							<li><a class="dropdown-item text-light text-start" href="jobapplication.php"> Job Applications</a></li>
							<li><a class="dropdown-item text-light text-start" href="bookmark-job.php"> Bookmarked jobs</a></li>
							<li><a class="dropdown-item text-light text-start" href="resume.php"> Manage Resume</a></li>
							<li><a class="dropdown-item logout text-light text-start" href="../logout.php"> LOGOUT</a></li>
						</ul>
				</ul>
			</div>
		</div>
	</nav>
	</nav>
	<div class="d-flex mt-5 ms-5">
		<div class="container con1 bg-white shadow ">
			<h5 class="text-center mt-3">MESSAGE</h5>
			<div class="block">
				<div class="d-flex">
					<button class="mt-4 btn1 mb-4 ms-3" id="submit" onclick="location.href='message-jobseekers.php'">
						<div class="d-flex">
							<i class="bi bi-envelope fa-2x me-1" ></i>
							<h6 class="mt-2 ps-1 jsr">JOB MESSAGES</h6>
						</div>
					</button>
				</div>
				<div class="text-center">
					<button class="btn1 mb-4" id="sent" onclick="location.href='message-sent.php'">
						<div class="d-flex">
							<i class="bi bi-send-fill fa-2x me-1"></i>
							<h6 class="mt-2 ps-2 jsr">SENT</h6>
						</div>
					</button>
				</div>
				<div class="text-center">
					<button class="btn1 mb-4" id="submit" onclick="location.href='recycle-bin-jobseekers.php'">
						<div class="d-flex">
							<i class="bi bi-trash fa-2x me-1"></i>
							<h6 class="mt-2 ps-2 jsr">RECYCLE BIN</h6>
						</div>
					</button>
				</div>
				<div class="text-center">
					<i class="bi bi-caret-right-fill fa-2x "></i>
					<button class="btn1 mb-4 highlight" id="submit" onclick="location.href='message-spam.php'">
						<div class="d-flex">
							<i class="bi bi-envelope-exclamation-fill fa-2x me-1"></i>
							<h6 class="mt-2 ps-2 jsr">SPAM</h6>
						</div>
					</button>
				</div>
				<div class="text-center">
					<button class="btn1 mb-4" id="submit" onclick="location.href='message-draft.php'">
						<div class="d-flex">
							<i class="bi bi-file-earmark-medical fa-2x me-1"></i>
							<h6 class="mt-2 ps-2 jsr">DRAFT</h6>
						</div>
					</button>
				</div>
				<div class="text-center">
					<button class="btn1 mb-4" id="submit" onclick="location.href='message-favorites.php'">
						<div class="d-flex">
							<i class="bi bi-star-fill fa-2x me-1"></i>
							<h6 class="mt-2 ps-2 jsr">FAVORITES</h6>
						</div>
					</button>
				</div>
			</div>
		</div>
		<br>
		<div class="container-md bg-white shadow">
			<form class="d-flex mt-4 mb-2 div1">
				<input class="form-control icon1" type="search" placeholder="Search for a message" aria-label="Search">
				<button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
			</form>
			<div id="" class="scroll">
				<div class="form-check">
					<input class="form-check-input hide mt-4" type="checkbox" value="" name="popup" id="popup">
					<section class="sec1">
						<div class="d-flex pt-3">
							<div>
								<img src="image/Mendoza, Jello.jpg" class="profim"alt="" width="60px" height="60px">
							</div>
							<h6 class="ms-4 mt-3">Jello R. Mendoza</h6>
							<p class="mt-2 ms-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo,
								consequuntur! Ad cum placeat temporibus, <br> officia minima voluptate beatae voluptates
								veniam.</p>
						</div>
					</section>
				</div>
				<div class="form-check">
					<input class="form-check-input hide mt-4" type="checkbox" value="" name="popup" id="popup1">
					<section class="sec1">
						<div class="d-flex pt-3">
							<div>
								<img src="image/Manalo, Edward.jpg" class="profim"alt="" width="60px" height="60px">
							</div>
							<h6 class="ms-4 mt-3">Edward B. Manalo</h6>
							<p class="mt-2 ms-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo,
								consequuntur! Ad cum placeat temporibus, <br> officia minima voluptate beatae voluptates
								veniam.</p>
						</div>
					</section>
				</div>
				<div class="form-check">
					<input class="form-check-input hide mt-4" type="checkbox" value="" name="popup" id="popup2">
					<section class="sec1">
						<div class="d-flex pt-3">
							<div>
								<img src="image/Parungao.png" class="profim" alt="" width="60px" height="60px">
							</div>
							<h6 class="ms-4 mt-3">Fernando Parungao</h6>
							<p class="mt-2 ms-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo,
								consequuntur! Ad cum placeat temporibus, <br> officia minima voluptate beatae voluptates
								veniam.</p>
						</div>
					</section>
				</div>
				<div class="form-check">
					<input class="form-check-input hide mt-4" type="checkbox" value="" name="popup" id="popup3">
					<section class="sec1">
						<div class="d-flex pt-3">
							<div>
								<img src="image/Borromeo, Ma. Cielo A 1.jpg" class="profim" alt="" width="60px" height="60px">
							</div>
							<h6 class="ms-4 mt-3">Ma. Cielo A. Borromeo</h6>
							<p class="mt-2 ms-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo,
								consequuntur! Ad cum placeat temporibus, <br> officia minima voluptate beatae voluptates
								veniam.</p>
						</div>
					</section>
				</div>
				<div class="form-check">
					<input class="form-check-input hide mt-4" type="checkbox" value="" name="popup" id="popup4">
					<section class="sec1">
						<div class="d-flex pt-3">
							<div>
								<img src="image/Valenzuela_Kristelle_Asereht_DS.jpg" class="profim" alt="" width="60px" height="60px">
							</div>
							<h6 class="ms-4 mt-3">Kristelle Asereht DS. Valenzuela</h6>
							<p class="mt-2 ms-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo,
								consequuntur! Ad cum placeat temporibus, <br> officia minima voluptate beatae voluptates
								veniam.</p>
						</div>
					</section>
				</div>
				<div class="form-check">
					<input class="form-check-input hide mt-4" type="checkbox" value="" name="popup" id="popup5">
					<section class="sec1">
						<div class="d-flex pt-3">
							<div>
								<img src="image/image 86.png" class="profim" alt="" width="60px" height="60px">
							</div>
							<h6 class="ms-4 mt-3">Juan Dela Cruz</h6>
							<p class="mt-2 ms-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo,
								consequuntur! Ad cum placeat temporibus, <br> officia minima voluptate beatae voluptates
								veniam.</p>
						</div>
					</section>
				</div>
				<div class="form-check">
					<input class="form-check-input hide mt-4" type="checkbox" value="" name="popup" id="popup6">
					<section class="sec1">
						<div class="d-flex pt-3">
							<div>
								<img src="image/image 86.png" class="profim" alt="" width="60px" height="60px">
							</div>
							<h6 class="ms-4 mt-3">Juan Dela Cruz</h6>
							<p class="mt-2 ms-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo,
								consequuntur! Ad cum placeat temporibus, <br> officia minima voluptate beatae voluptates
								veniam.</p>
						</div>
					</section>
				</div>
			</div>
			<div class="d-flex">
				<button class="btn btn-trash shadow" id="theButton" onclick="clickMe()">
					<i class="bi bi-trash-fill fa-2x px-1"></i>
				</button>
			</div>
		</div>
	</div>
	<div class = 'toggle-switch'>
		<label class="lab">
		  <input class="dar" type = 'checkbox' name="theme" onclick="toggleImage()">
		  <span id="icon2" class = 'slider'></span>
		</label>
	  </div>
	<script>
		function toggleImage() {
		imgsrc = document.getElementById("logo").src;
		if (imgsrc.indexOf("image/light-logo.png") !=-1){
		  document.getElementById("logo").src = "image/Techployment (7) 1.png";
		}
		else{
		  document.getElementById("logo").src = "image/light-logo.png";
		}
	  }
	  </script>
	  <script>
		var checkbox = document.querySelector('input[name=theme');
	
		checkbox.addEventListener('change', function(){
			if(this.checked){
				trans()
				document.documentElement.setAttribute('data-theme','dark')
			}else{
				trans()
				document.documentElement.setAttribute('data-theme','light')
			}
		});
		let trans = () => {
			document.documentElement.classList.add('transition');
			window.setTimeout(() => {
				document.documentElement.classList.remove('transition')
			}, 1000)
		}
	</script>
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