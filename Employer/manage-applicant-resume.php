<?php 
    include_once 'include/login-session-Employer.php';
    include_once 'include/header-Employer.php'; 
?>

<!-- Navigation bar -->
<body>
    <?php 
        include_once '../include/preloader-display.php';
        include_once 'include/navbar-Employer.php'; 
    ?>

    <!-- Manage Resume Table -->
    <div class="container-responsive p-md-5 mt-4" id="container">
        <form id="main-form">
            <div class=" col-auto text-center">
                <section class="type p-1">
                    <div class="bg-color-header">
                    <div class="bg-header">
                            <!--transfer class=form2 outside h2-->
                            <h2 class="text-start"><b>MANAGE APPLICANTS RESUME</b></h2>
                            <form class="d-flex">
                                <input class="form-control icon1" type="search" id="search" placeholder="Search for an applicant" aria-label="Search">
                                <button class="btn text-dark fw-bold search1" type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div>

                        <div class="table-responsive" id="no-more-tables">
                            <table class="table basic-table table-headers table table-hover">
                                <thead class="text-dark text-center" id="title-sub">
                                    <tr>
                                        <th>Applicant Name</th>
                                        <th>Resume</th>
                                        <th>Job Applied</th>
                                        <th>Date Applied</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-dark" id="body-h" >
                                    <!-- <tr>
                                        <td  data-title="Applicant Name"><b>Applicant's Full name</b></td>  
                                        <td  data-title="Resume"><b>Resume</b></td>                                
                                        <td data-title="Job Applied"><b>Job Applied</b></td>
                                        <td data-title="Date Applied"><b>5/04/2022</b></td>
                                        <td  data-title="Status"><b>Status</b></td>
                                        <td data-title="Action"><button  class="btn btn-info" type="button" id="btn-info">Accept</button>
                                        <button class="btn btn-info" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Reject</button></td>
                                    </tr> -->
                                    <!-- <tr>
                                        <td  data-title="Application Name"><b>Application's Full name</b></td>
                                        <td data-title="View Resume"><i class="fa-brands fa-google-drive"></i><b>Gdrive link</b></td>
                                        <td data-title="Date Applied"><b>5/04/2022</b></td>
                                        <td data-title="Action"><button  class="btn btn-info" type="button" id="btn-info">Bookmark</button>
                                        <button class="btn btn-info" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Reject</button></td>
                                    </tr> -->
                                </tbody>  
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <nav aria-label="Page navigation" class="page-section">
                <div class="entries" id="entries"></div>
                <ul class="pagination" id="pagination"></ul>
            </nav>
            <!-- <nav aria-label="Page navigation example">
                <div class="entries" id= "entries">
                    </span>Show 1 to 3 of 3 entries</span> 
                </div>
                <ul class="pagination" id = 'pagination'>
                     <li class="page-item"><a class="page-link next text-dark" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link num text-dark" href="#">1</a></li>
                    <li class="page-item"><a class="page-link num text-dark" href="#">2</a></li>
                    <li class="page-item"><a class="page-link num text-dark" href="#">3</a></li>
                    <li class="page-item"><a class="page-link next text-dark" href="#">Next</a></li> 
                </ul>
            </nav>    -->
        </form>
    </div>

    <!-- edit button -->
    <div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ms-3" id="editModalLabel">Edit Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="status">Choose a status:</label>
                <select name="status" id="status">
                    <option value="Pending">Pending</option>
                    <option value="Received">Received</option>
                    <option value="Viewed">Viewed</option>
                    <option value="Accepted">Accepted</option>
                </select><br>
            </div>
            <div class="modal-footer">
                <button id="edit-yes" type="button" class="btn btn-success btn1" value=''>Yes</button>
                <button type="button" class="btn btn-danger btn1" data-bs-dismiss="modal">No</button>
            </div>
        </div>
        </div>
    </div>

    <!-- bookmark button -->
    <div class="modal fade" id="bookmark-modal" tabindex="-1" aria-labelledby="bookmarkModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title ms-3" id="bookmarkModalLabel">Are you sure you want to bookmark this applicant?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button id="bookmark-yes" type="button" class="btn btn-success btn1" value=''>Yes</button>
                <button type="button" class="btn btn-danger btn1" data-bs-dismiss="modal">No</button>
            </div>
        </div>
        </div>
    </div>

    <!-- reject button -->
    <div class="modal fade" id="reject-modal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title ms-3" id="rejectModalLabel">Are you sure you want to reject this applicant?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button id="reject-yes" type="button" class="btn btn-success btn1" value=''>Yes</button>
                <button type="button" class="btn btn-danger btn1" data-bs-dismiss="modal">No</button>
            </div>
        </div>
        </div>
    </div>

    <!-- remove bookmark button -->
    <!-- <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title ms-3" id="exampleModal3Label">Are you sure you want to remove the bookmark in this applicant?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <button id="accept1" type="button" class="btn btn-success btn1">Yes</button>
                    <button type="button" class="btn btn-danger btn1" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div> -->

    <?php include_once 'include/footer-Employer.php' ?>
</body>
</html>