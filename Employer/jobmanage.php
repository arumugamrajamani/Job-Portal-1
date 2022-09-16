<?php 
    include_once 'include/login-session-Employer.php';
    include_once 'include/header-Employer.php'; 
?>

<body>
    <?php include_once '../include/preloader-display.php'; ?>
    <div class="color-overlay">
        <?php include_once 'include/navbar-Employer.php'; ?>
    </div><br>

    <div class="container p-md-4 mt-4" id="container">
        <form id="main-form"> 
            <div class="col-auto text-center">
                <section class="type p-1"> 
                    <div class="bg-color-header"> 
                        <h1 class="text-start">Job Post</h1> 
                        <div class="input-group">
                            <div class="form-outline">
                              <input type="search" id="form1" placeholder="Search for a job title" class="form-control" />
                            </div>
                            <button type="button" class="btn3">
                              <i class="bi bi-search"></i>
                            </button>
                          </div>
                        <div class="column">
                            <!-- <div class="card"> 
                                <h3>0</h3>
                            </div> -->
                        </div>
                        <p>The job posting will stay available for as long  as <br> you have  an active  account or until you  delete it.</p>
                    </div>
                    <div class="table-responsive" id="no-more-tables">
                        <table class="table basic-table table-headers table table-hover">
                            <thead class="text-dark text-center" id="title-sub">
                                <tr>
                                    <th>Job title</th>
                                    <th>Number of Applicant/s</th>
                                    <th>Status (Active/Inactive)</th>
                                    <th>Drive</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-light text-dark " id="body-h" >
                            </tbody>
                        </table>
                       
                        <nav aria-label="Page navigation example">
                            <div class="entries" id="entries"></div>
                            <ul class="pagination" id="pagination"></ul>
                        </nav> 
                        <div class="text-end">
                            <!-- <button class="bt mt-1 text-dark"  type="button" id="button" onclick="location.href='postajob.php'">ADD JOB POST</button> -->
                        </div>
                    </div>
                </section>
            </div>  
        </form>
    </div>
    <!-- Delete button modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ms-5" id="exampleModalLabel">Are you sure you want to delete this?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <button type="button" id="del-yes" class="btn btn-success btn1">Yes</button>
                    <button type="button" class="btn btn-danger btn1" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    <!--Edit detail modal-->
    <div class="modal fade" id="modal-editdetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body edit-detail">
                    <div class="container">
                        <form class="container">
                                <h2 class="text-black text-center mt-0 fw-bold">EDIT DETAILS</h2>
                                <hr>
                                <div class="row mb-3 mt-0 ms-4 fw-bold">
                                    <label for="e-companyname" class="col-sm-3 ">Company Name:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="e-companyname">
                                    </div>
                                </div>
                                <div class="row mb-3 mt-0 ms-4 fw-bold">
                                    <label for="e-jobtitle" class="col-sm-3 ">Job Title:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="e-jobtitle">
                                    </div>
                                </div>
                                <div class="row mb-3 mt-0 ms-4 fw-bold">
                                    <label for="e-employment" class="col-sm-3 ">Employment:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="e-employment">
                                    </div>
                                </div>
                                <div class="row mb-3 mt-0 ms-4 fw-bold">
                                    <label for="e-jobcategory" class="col-sm-3 ">Job Category:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="e-jobcategory">
                                    </div>
                                </div>
                                <div class="row mb-3 mt-0 ms-4 fw-bold">
                                    <label for="e-jobdescription" class="col-sm-3 ">Job Description:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="e-jobdescription">
                                    </div>
                                </div>
                                <div class="row mb-3 mt-0 ms-4 fw-bold">
                                    <label for="e-salarywage" class="col-sm-3 ">Salary Wage:</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="e-salarywage">
                                    </div>
                                </div>
                                <div class="row mb-3 mt-0 ms-4 fw-bold">
                                    <label for="e-employeremail" class="col-sm-3 ">Employer Email:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="e-employeremail">
                                    </div>
                                </div>
                                <div class="row mb-3 mt-0 ms-4 fw-bold">
                                    <label for="e-primaryskill" class="col-sm-3 ">Primary Skill:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="e-primaryskill">
                                    </div>
                                </div>
                                <div class="row mb-3 mt-0 ms-4 fw-bold">
                                    <label for="e-secondaryskill" class="col-sm-3 ">Secondary Skill:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="e-secondaryskill">
                                    </div>
                                </div>
                        </form>
                        
                    </div><br>
                    <div class="modal-footer">
                        <button type="button" id="save-edit" class="btn btn-success">Save</button>
                        <button type="button" class="close btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <?php include_once 'include/footer-Employer.php' ?>
</body>
</html>