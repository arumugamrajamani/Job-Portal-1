<!-- Bootstrap Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- jQuery cdn link below -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!-- Toast CDN for design of toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Scripts for Navbar -->
<script src="include/navbar-Employer.js"></script>
<!-- Script for Navbar Account Details -->
<script src="js/pfp.js"></script>

<?php
    switch ($page) {
        case 'company-profile.php': case 'index.php': 
            ?>
                <script src="js/company-profile.js"></script>
            <?php
        break;
        case 'change-password.php':
            ?>

            <?php
        break;
        case 'employer-message.php':
            ?>
                <!-- Deprecated -->
            <?php
        break;
        case 'jobmanage.php':
            ?>
                <script src="js/jobmanage.js"></script>
            <?php
        break;
        case 'manage-account-profile.php':
            ?>
                <script src="js/manage-account-profile.js"></script> 
            <?php
        break;
        case 'manage-applicant-resume.php':
            ?>  
                <script src="js/manage-applicant-resume.js"></script>
            <?php
        break;
        case 'postajob.php':
            ?>
                <!-- Reserved -->
            <?php
        break;
    }
?>