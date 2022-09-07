<?php include_once 'include/header.php'; ?>

<body>
    <?php include_once '../include/preloader-display.php'; ?>
    <div class="color-overlay">
        <?php include_once 'include/navbar.php'; ?>
    </div><br>
    <button class="openbtn" title="Open Sidebar" onclick="openNav()">
        <i id="list-i" class="bi bi-list fa-2x"></i>
    </button>
    
    <?php include_once 'include/sidebar.php'; ?><br><br><br>

    <div class="container-fluid bg-white shadow block" id="main">
        <div class="d-flex div1 justify-content-between px-4">
            <div>
                <h3 class="">FAQ SETTINGS</h3>
            </div>
            <div class="d-flex searchbox">
                <input class="form-control icon i-search" type="search" placeholder="Search a question" aria-label="Search">
                <button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
            </div>
        </div>
        <!-- System FAQ -->
        <div class="d-flex justify-content-between px-4 div2 pt-3">
            <div>
                <h6 class="systems mt-2">Systems:</h6>
            </div>
            <div>
                <button type="submit" id="add-faq-sys" class="btn-add" data-bs-toggle="modal" data-bs-target="#modal-add">ADD</button>
            </div>
        </div>
        <table class="table-spacing text-center scroll">
            <thead>
                <tr>
                    <th class="col-lg-4">Questions</th>
                    <th class="col-lg-4">Answers</th>
                    <th class="col-lg-4">Actions</th>
                </tr>
            </thead>
            <tbody class="body-faq" id="body-system"></tbody>
        </table>
        <!-- Application FAQ -->
        <div class="d-flex justify-content-between px-4 div2 pt-3">
            <div>
                <h6 class="systems mt-2">Application Process:</h6>
            </div>
            <div>
                <button type="submit" id="add-faq-app"  class="btn-add" data-bs-toggle="modal" data-bs-target="#modal-add">ADD</button>
            </div>
        </div>
        <table class="table-spacing text-center">
            <thead>
                <tr>
                    <th class="col-lg-4">Questions</th>
                    <th class="col-lg-4">Answers</th>
                    <th class="col-lg-4">Actions</th>
                </tr>
            </thead>
            <tbody class="body-faq" id="body-application">
            </tbody>
        </table>
        <!-- Interview FAQ -->
        <div class="d-flex justify-content-between px-4 div2 pt-3">
            <div>
                <h6 class="systems mt-2">Interview:</h6>
            </div>
            <div>
                <button type="submit" id="add-faq-int" class="btn-add" data-bs-toggle="modal" data-bs-target="#modal-add">ADD</button>
            </div>
        </div>
        <table class="table-spacing text-center">
            <thead>
                <tr>
                    <th class="col-lg-4">Questions</th>
                    <th class="col-lg-4">Answers</th>
                    <th class="col-lg-4">Actions</th>
                </tr>
            </thead>
            <tbody class="body-faq" id="body-interview">
            </tbody>
        </table>
        <!-- General FAQ -->
        <div class="d-flex justify-content-between px-4 div2 pt-3">
            <div>
                <h6 class="systems mt-2">General Questions for Job Seekers:</h6>
            </div>
            <div>
                <button type="submit" id="add-faq-gen" class="btn-add" data-bs-toggle="modal" data-bs-target="#modal-add">ADD</button>
            </div>
        </div>
        <table class="table-spacing text-center">
            <thead>
                <tr>
                    <th class="col-lg-4">Questions</th>
                    <th class="col-lg-4">Answers</th>
                    <th class="col-lg-4">Actions</th>
                </tr>
            </thead>
            <tbody class="body-faq" id="body-general">
            </tbody>
        </table>
    </div>

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

    <div class="modal fade" id="modal-add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body edit-detail">
                    <form class="container"><br>
                        <h2 class="text-black text-center mt-2 fw-bold">ADD FAQ</h2>
                        <hr>
                        <div class="row mb-3 mt-0 ms-4 fw-bold">
                            <label for="jobcategory" class="col-sm-3 ">Question</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="add-f-question">
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-4 fw-bold">
                            <label for="jobcategory" class="col-sm-3 ">Answer</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" style="resize:none;" id="add-f-answer" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </form><br>
                    <div class="modal-footer">
                        <button type="button" id="add-new-faq" class="btn btn-success save">ADD</button>
                        <button type="button" class="close btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-editdetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body edit-detail">
                    <form class="container"><br>
                        <h2 class="text-black text-center mt-2 fw-bold">EDIT DETAILS</h2>
                        <hr>
                        <div class="row mb-3 mt-0 ms-4 fw-bold">
                            <label for="Faq Setting" class="col-sm-3 ">Question</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="faq-question">
                            </div>
                        </div>
                        <div class="row mb-3 mt-0 ms-4 fw-bold">
                            <label for="Faq Setting" class="col-sm-3 ">Answer</label>
                            <div class="col-sm-8">
                                <!-- <input type="text" class="form-control" id="faq-answer"> -->
                                <textarea class="form-control" style="resize:none;" id="faq-answer" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </form><br>
                    <div class="modal-footer">
                        <button type="button" id="save-edit" class="btn btn-success save">Save Details</button>
                        <button type="button" class="close btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
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
        var icon2 = document.getElementById("icon2");

            icon2.onclick = function() {
            document.body.classList.toggle("dark-theme")
        }

        function openNav() {
            document.getElementById("mySidebar").style.left = "0";
            document.getElementById("main").style.marginLeft = "400px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.left = "-100%";
            document.getElementById("main").style.marginLeft = "250px";
        }
    </script>

	<script src="js/toggle-image.js"></script>
    <script src="js/faq-settings.js"></script>
    <script src="js/navbar.js"></script>
</body>

</html>