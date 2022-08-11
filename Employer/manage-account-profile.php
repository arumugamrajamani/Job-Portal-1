<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLOYER EDIT</title>
    <!--Font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,455;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/manage-account-profile.css">
    <!-- Sweet alert cdn link below -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- jQuery cdn link below -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Toast CDN for functionality of toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Toast CDN for design of toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
		<div class="container-fluid">
			<a class="navbar-brand me-1" href="#"></a>
			<img src="image/light-logo.png" alt="Job Portal Logo" width="100" height="70"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<form class="d-flex searches">
				<input class="form-control icon" type="search" placeholder="Search for a job title" aria-label="Search">
				<button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
			</form>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item me-0"><a class="nav-link text-dark message active menubar mes" aria-current="page" href="message-employer.php">MESSAGE</a></li>
					<li class="nav-item"><a class="nav-link text-dark about active" href="postajob.php">POST A JOB</a></li>
					<li class="nav-item account dropdown active">
						<a class="nav-link text-dark dropdown-toggle account active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<img id="pfp" class="image" style="border-radius: 100px; object-fit: cover;" src="" alt="Profile" width="30" height="30"> ACCOUNT</a>
                    <ul class="dropdown-menu account-drop" aria-labelledby="navbarDropdown">
						<li><a id="name" class="dropdown-item text-dark text-start" href="company-profile.php"><img alt=""></a></li>
							<li><hr class="dropdown-divider bg-white"></li>
							<li><a class="dropdown-item text-start Eprofile" href="manage-account-profile.php"><img src="image/edit-profile-black.png" alt="" class="l1"> Edit Profile</a></li>
							<li><a class="dropdown-item text-start" href="change-password.php"><img src="image/change-pass-black.png" alt="" class="l1"> Change Password</a></li>
                            <li><a class="dropdown-item text-start" href="jobmanage.php"><img src="image/job-management.png" alt="" class="l1"> Job Management</a></li>
							<li><a class="dropdown-item text-start" href="jobapplication.php"><img src="image/job-applicant-black.png" alt="" class="l1"> Job Applications</a></li>
							<li><a class="dropdown-item text-start" href="manage-applicant-resume.php"><img src="image/manage resume.png" alt="" class="l1"> Manage Resume</a></li>
							<li><a class="dropdown-item logout text-start" href="../logout.php"><img src="image/logout-black.png" alt="" class="l1"> LOGOUT</a></li>
						</ul>
				</ul>
			</div>
		</div>
	</nav><br><br>
        <form class="container" id="background">
            <div class="col-sm-9 text-start row mb-3" >
                <h1 class="text-dark">EDIT ACCOUNT DETAILS</h1>
            </div>
            <h2 class="text-black text-center mt-4">EMPLOYER DETAILS</h2>
            <br>
            <div class="row mb-3 mt-3 ms-4">
                <label for="employerfullname" class="col-sm-2 col-form-label" id="l1">Employer Full Name</label>
                <div class="col-sm-9 ms-5 c1">
                    <input type="text" class="form-control" id="employer_name">
                </div>
            </div>
            <div class="row mb-3 ms-4">
                <label for="employerposition" class="col-sm-2 col-form-label" id="l2">Employer Position</label>
                <div class="col-sm-9 ms-5 c1">
                    <input type="text" class="form-control" id="employer_position">
                </div>
            </div>
            <h2 class="text-black text-center mt-5">COMPANY DETAILS</h2>
            <br>
            <div class="row mb-3 mt-3 ms-4">
                <label for="companyname" class="col-sm-2 col-form-label" id="l3">Company Name</label>
                <div class="col-sm-9 ms-5 c1">
                    <input type="text" class="form-control" id="company_name">
                </div>
            </div>
            <div class="row mb-3 ms-4">
                <label for="companyaddress" class="col-sm-2 col-form-label" id="l4">Company Address</label>
                <div class="col-sm-9 ms-5 c1">
                    <input type="text" class="form-control" id="company_address">
                </div>
            </div>
            <div class="row mb-3 ms-4">
                <label for="companyceoname" class="col-sm-2 col-form-label" id="l5">Company CEO Name</label>
                <div class="col-sm-9 ms-5 c1">
                    <input type="text" class="form-control" id="company_ceo">
                </div>
            </div>
            <div class="row mb-3 ms-4">
                <label for="companysize" class="col-sm-2 col-form-label" id="l6">Company Size</label>
                <div class="col-sm-9 ms-5 c1">
                    <input type="text" class="form-control" id="company_size">
                </div>
            </div>
            <div class="row mb-3 ms-4">
                <label for="companyrevenue" class="col-sm-2 col-form-label" id="l7">Company Revenue</label>
                <div class="col-sm-9 ms-5 c1">
                    <input type="text" class="form-control" id="company_revenue">
                </div>
            </div>
            <div class="row mb-3 ms-4">
                <label for="industry" class="col-sm-2 col-form-label" id="l8">Industry</label>
                <div class="col-sm-9 ms-5 c1">
                    <input type="text" class="form-control" id="industry">
                </div>
            </div>
            <div class="row mb-3 ms-4">
                <label for="companydescription" class="col-sm-2 col-form-label" id="l9">Company Description</label>
                <div class="col-sm-9 ms-5 c1">
                    <textarea class="form-control descrip" placeholder="Description Here" id="company_description" rows="5"></textarea>
                </div>
            </div>
            <div class="row mb-3 ms-4">
                <label for="contactnumber" class="col-sm-2 col-form-label" id="l10">Contact Number</label>
                <div class="col-sm-9 ms-5 c1">
                    <input type="number" class="form-control" id="contact_number">
                </div>
            </div>
            <div class="row mb-3 ms-4">
                <label for="companyemail" class="col-sm-2 col-form-label" id="l11">Company Email</label>
                <div class="col-sm-9 ms-5 c1">
                    <input type="email" class="form-control" id="email">
                </div>
            </div>
            <div class="row mb-3 ms-4">
                <label for="companyLogo" class="col-sm-2 col-form-label" id="l12">Company Logo</label>
                <div class="col-sm-9 ms-5 c1">
                    <input type="file" class="form-control" id="companyLogo"><br>
                    <div class="div1">
                    <img class="company_logo" src="" id="company_logo_name" alt="logo" width="200px" height="100px">
                    </div>
                </div>
            </div>
            <div class="row mb-3 ms-4">
                <label for="qrCode" class="col-sm-2 col-form-label" id="qrcode">QR Code</label>
                <div class="col-sm-9 ms-5 c1">
                    <input type="file" class="form-control" id="qrCode">
                </div>
            </div>
            <div class="row mb-3 ms-4">
                <label for="permitOriginalName" class="col-sm-2 col-form-label" id="l13">DTI Business Registration & Permit</label>
                <div class="col-sm-9 ms-5 c1">
                    <input type="file" class="form-control" id="permit_original_name"><br>
                    <div class="input-container">
                        <input id="permit_original" class="input-field" type="text" placeholder="" name="email">
                    </div>
                </div>
            </div><br>
            <div class="text-center">
                <button type="submit" class="submits" id="save-now">UPDATE DETAILS</button>
            </div>
        </form>
        <br><br><br><br><br>

        <script src="js/manage-account-profile.js"></script>
        <script src="js/pfp.js"></script>
</body>
</html>