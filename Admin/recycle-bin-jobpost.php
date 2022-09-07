<?php include_once 'include/header.php'; ?>

<body>

    <?php include_once '../include/preloader-display.php'; ?>
    <div class="color-overlay">
        <?php include_once 'include/navbar.php'; ?>
    </div>

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
        <div class="d-flex justify-content-end">
            <div class="d-flex">
                <input class="form-control icon" type="search" id="search" placeholder="Search a jobpost" aria-label="Search">
                <button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
            </div>
        </div><br>
        <div class=" col-auto ">
            <section class="type p-1">
                <div class="bg-color-header text-center">
                    <div class="table-responsive" id="no-more-tables">
                        <table class="table basic-table table-headers table table-hover">
                            <thead class="thead text-dark text-center" id="title-sub">
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
            <div class="entries" id="entries"></div>
            <ul class="pagination" id="pagination"></ul>
        </nav>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ms-5" id="exampleModalLabel">Are you sure you want to delete this?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="delete modal-body">
                    <button id="del-yes" type="button" class="yes-no btn btn-success" title="Delete">Yes</button>
                    <button type="button" class="yes-no btn btn-danger" title="Cancel" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
	
	<script src="js/toggle-image.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/jobpost-recyclebin.js"></script>
</body>

</html>