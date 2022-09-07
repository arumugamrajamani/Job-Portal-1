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
            <input class="form-control icon i-search" id="search" placeholder="Search a jobseeker" aria-label="Search">
            <button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
        </div><br>
        <div class="table col-auto ">
            <section class="type p-1">
                <div class="bg-color-header text-center">
                    <div class="table-responsive" id="no-more-tables">
                        <table class="table basic-table table-headers table table-hover">
                            <thead class="thead text-dark text-center" id="title-sub">
                                <tr>
                                    <th>Profile Picture</th>
                                    <th>Jobseeker Name</th>
                                    <th>Contact Number</th>
                                    <th>Email Address</th>
                                    <th>Date Applied</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="tbody bg-light text-dark" id="body-h">
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        <nav aria-label="Page navigation example" class="page-section">
            <div class="entries" id="entries"></div>
            <ul class="pagination" id="pagination"></ul>
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

    <!--Profile picture modal-->
    <div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Profile Picture</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="profile modal-body">
                    <img src="" class="img-logo" id="view-pp" alt="">
                </div>
            </div>
        </div>
    </div>

    <!--Edit detail modal-->
    <div class="modal fade" id="modal-editdetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body edit-detail">
                    <form class="container"><br>
                        <h2 class="text-black text-center mt-2 fw-bold">EDIT DETAILS</h2><hr>
                        <div class="row mb-3 mt-0 ms-4 fw-bold">
                            <label for="e-jobseekername" class="col-sm-3 ">Job Seeker Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="e-jobseekername">
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-4 fw-bold">
                            <label for="e-contactnumber" class="col-sm-3 ">Contact Number</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="e-contactnumber">
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-4 fw-bold">
                            <label for="e-emailaddress" class="col-sm-3 ">Email address</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control disabled" id="e-emailaddress" disabled>
                            </div>
                        </div>
                    </form><br>
                    <div class="modal-footer">
                        <button type="button" id="save-edit" class="btn btn-success">Save</button>
                        <button type="button" class="close btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/toggle-image.js"></script>
    <script src="js/jobseeker-management.js"></script>
    <script src="js/navbar.js"></script>
</body>

</html>