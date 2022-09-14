<?php include_once 'include/header.php'; ?>

<body>
    <?php include_once '../include/preloader-display.php'; ?>
    <div class="color-overlay">
        <?php include_once 'include/navbar.php'; ?>
    </div><br><br>

    <button class="openbtn" title="Open Sidebar" onclick="openNav()">
        <i id="list-i" class="bi bi-list fa-2x"></i>
    </button>

    <?php include_once 'include/sidebar.php'; ?>

    <div class='toggle-switch'>
        <label class="lab">
            <input class="dar" type='checkbox' name="theme" onclick="toggleImage()">
            <span id="icon2" class='slider'></span>
        </label>
    </div><br><br>

    <div class="container-responsive p-md-5 mt-4" id="main">
        <div class="d-flex">
            <input class="form-control icon i-search" id="search" placeholder="Search an employer" aria-label="Search">
            <button class="btn text-dark fw-bold search" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </div>
        <div class="table col-auto ">
            <section class="type p-1">
                <div class="table-responsive pt-4" id="no-more-tables">
                    <table class="table basic-table table-headers table table-hover">
                        <thead class="thead text-dark text-center">
                            <tr>
                                <th>Company Logo</th>
                                <th>Company</th>
                                <th>Employer Name</th>
                                <th>Employer Position</th>
                                <th>Email address</th>
                                <th>DTI Business Permit</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-light text-dark" id="body-h"></tbody>
                    </table>
                </div>
            </section>
        </div>
        <nav aria-label="Page navigation" class="page-section">
            <div class="entries" id="entries"></div>
            <ul class="pagination" id="pagination"></ul>
        </nav>
    </div>

    <!--Company logo modal-->
    <div class="modal fade" id="companylogo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Company Logo</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="company-logo modal-body">
                    <img id="view-logo" src="" class="image" alt="">
                </div>
            </div>
        </div>
    </div>

    <!--Delete modal-->
    <div class="modal fade" id="modal-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ms-5" id="exampleModalLabel">Are you sure you want to delete this?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="delete modal-body">
                    <button type="button" id="yes-delete" class="yes-no btn btn-success">Yes</button>
                    <button type="button" class="yes-no btn btn-danger" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    <!--View detail modal-->
    <div class="modal fade" id="modal-viewdetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ms-5" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="container con1">
                        <form class="container">
                            <h2 class="text-black text-center mt-0 fw-bold">MORE DETAILS</h2>
                            <hr>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="companyaddress" class="col-sm-3 ">Company Address:</label>
                                <div class="col-sm-8">
                                    <h5 id="e-companyaddress"></h5>
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="companyceoname" class="col-sm-3 ">Company CEO Name:</label>
                                <div class="col-sm-8">
                                    <h5 id="e-companyceoname"></h5>
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="companysize" class="col-sm-3 ">Company Size:</label>
                                <div class="col-sm-8">
                                    <h5 id="e-companysize"></h5>
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="companyrevenue" class="col-sm-3 ">Company Revenue:</label>
                                <div class="col-sm-8">
                                    <h5 id="e-companyrevenue"></h5>
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="industry" class="col-sm-3 ">Industry:</label>
                                <div class="col-sm-8">
                                    <h5 id="e-industry"></h5>
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="companynumber" class="col-sm-3 ">Company Number:</label>
                                <div class="col-sm-8">
                                    <h5 id="e-companynumber"></h5>
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="companyemail" class="col-sm-3 ">Company Email:</label>
                                <div class="col-sm-8">
                                    <h5 id="e-companyemail"></h5>
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4">
                                <label for="companydescription" class="col-sm-3 fw-bold ">Company Description:</label>
                                <div class="col-sm-8">
                                    <p id="e-companydescription"></p>
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4">
                                <label for="datecreated" class="col-sm-3 fw-bold">Date/Time Created:</label>
                                <div class="col-sm-8">
                                    <h5 id="e-datecreated"></h5>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="close btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--Edit detail modal-->
    <div class="modal fade" id="modal-editdetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body company-details">
                    <form class="container">
                        <h2 class="text-black text-center mt-0 fw-bold">EDIT DETAILS</h2>
                        <hr>
                        <div class="row mb-3 mt-0 ms-4 fw-bold">
                            <label for="e-employerfullname" class="col-sm-3 ">Employer Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="e-employerfullname">
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-4 fw-bold">
                            <label for="e-employerposition" class="col-sm-3 ">Employer Position:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="e-employerposition">
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-4 fw-bold">
                            <label for="e-companyname" class="col-sm-3 ">Company Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="e-companyname">
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-4 fw-bold">
                            <label for="e-companyaddress" class="col-sm-3 ">Company Address:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="e-companyaddress">
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-4 fw-bold">
                            <label for="e-companyceoname" class="col-sm-3 ">Company CEO Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="e-companyceoname">
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-4 fw-bold">
                            <label for="e-companysize" class="col-sm-3 ">Company Size:</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="e-companysize">
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-4 fw-bold">
                            <label for="e-companyrevenue" class="col-sm-3 ">Company Revenue:</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="e-companyrevenue">
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-4 fw-bold">
                            <label for="e-industry" class="col-sm-3 ">Industry:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="e-industry">
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-4 fw-bold">
                            <label for="e-companynumber" class="col-sm-3 ">Company Number:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="e-companynumber">
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-4 fw-bold">
                            <label for="e-companyemail" class="col-sm-3 ">Company Email:</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="e-companyemail">
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-4">
                            <label for="e-companydescription" class="col-sm-3 fw-bold ">Company Description:</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" placeholder="Description Here" id="e-companydescription" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-4">
                            <label for="verify" class="col-sm-3 fw-bold">Verification Status:</label>
                            <div class="col-sm-8 ">
                                <select class="form-select" aria-label="Default select example" id="verify">
                                    <option value="1">Verified</option>
                                    <option value="0">Not verified</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="save-edit" class="save btn btn-success">Save</button>
                    <button type="button" class="save-close btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/toggle-image.js"></script>
    <script src="js/employer-management.js"></script>
    <script src="js/navbar.js"></script>
</body>

</html>