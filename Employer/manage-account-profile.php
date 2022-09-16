
<?php 
    include_once 'include/login-session-Employer.php';
    include_once 'include/header-Employer.php'; 
?>

<body>
    <?php include_once '../include/preloader-display.php'; ?>
    <div class="color-overlay">
        <?php include_once 'include/navbar-Employer.php'; ?>
    </div><br>

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
            <label for="company_logo_name" class="col-sm-2 col-form-label" id="l12">Company Logo</label>
            <div class="col-sm-9 ms-5 c1">
                <input type="file" class="form-control" id="companyLogo"><br>
                <div class="div1">
                <img class="company_logo" src="" id="company_logo_name" alt="logo" width="200px" height="100px">
                </div>
            </div>
        </div>
        <div class="row mb-3 ms-4">
            <label for="qr_Code" class="col-sm-2 col-form-label" id="qrcode">QR Code</label>
            <div class="col-sm-9 ms-5 c1">
                <input type="file" class="form-control" id="qrCode">
                <div class="div1">
                <img class="qr" src="" id="qr_name" alt="logo" width="200px" height="100px">
                </div>
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

    <?php include_once 'include/footer-Employer.php' ?>
</body>
</html>