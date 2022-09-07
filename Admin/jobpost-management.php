<?php include_once 'include/header.php'; ?>

<body>
    <?php include_once '../include/preloader-display.php'; ?>
    <div class="color-overlay">
        <?php include_once 'include/navbar.php'; ?>
    </div><br>
    <button class="openbtn" title="Open Sidebar" onclick="openNav()">
        <i id="list-i" class="bi bi-list fa-2x"></i>
    </button>

    <?php include_once 'include/sidebar.php'; ?>
    
    <div class = 'toggle-switch'>
        <label class="lab">
            <input class="dar" type = 'checkbox' name="theme" onclick="toggleImage()">
            <span id="icon2" class = 'slider'></span>
        </label>
    </div><br><br><br>
    
    <div class="container-responsive p-md-5 mt-4" id="main">
        <div class="d-flex">
            <input class="form-control icon i-search" id="search" placeholder="Search a jobpost" aria-label="Search">
            <button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
        </div><br>
        <div class="table col-auto">
            <section class="type p-1">
                <div class="bg-color-header text-center">
                    <div class="table-responsive" id="no-more-tables">
                        <table class="table basic-table table-headers table table-hover">
                            <thead class="thead text-dark text-center">
                                <tr>
                                    <th>Employer</th>
                                    <th>Company</th>
                                    <th>Job Category</th>
                                    <th>Date Posted</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="tbody bg-light text-dark" id="body-h"></tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        <nav aria-label="Page navigation example">
            <div class="entries" id="entries">
                <!--</span>Show 1 to 3 of 3 entries</span>-->
            </div>
            <ul class="pagination" id="pagination">
                <!--<li class="page-item"><a class="page-link bg-info text-dark" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                <li class="page-item"><a class="page-link bg-info text-dark" href="#">Next</a></li>-->
            </ul>
        </nav>
    </div>

    <!-- Delete button modal -->
    <div class="modal fade" id="modal-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ms-5" id="exampleModalLabel">Are you sure you want to delete this?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="delete modal-body">
                    <button type="button" id="del-yes" class="yes-no btn btn-success">Yes</button>
                    <button type="button" class="yes-no btn btn-danger" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit button modal -->
    <div class="modal fade" id="modal-editdetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body edit-detail">
                    <form class="container"><br>
                        <h2 class="text-black text-center mt-2 fw-bold">EDIT DETAILS</h2>
                        <hr>
                        <div class="row mb-3 mt-0 ms-4 fw-bold">
                            <label for="employername" class="col-sm-3 ">Employer Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="employername" disabled>
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-4 fw-bold">
                            <label for="company" class="col-sm-3 ">Company</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="company">
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-4 fw-bold">
                            <label for="jobcategory" class="col-sm-3 ">Job Category</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="jobcategory">
                            </div>
                        </div>
                    </form><br>
                    <div class="modal-footer">
                        <button id="save-edit" type="button" class="btn btn-success" >Save Details</button>
                        <button type="button" class="close btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/toggle-image.js"></script>
    <script src="js/jobpost-management.js"></script>
    <script src="js/navbar.js"></script>
</body>

</html>