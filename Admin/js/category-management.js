function openNav() {
    document.getElementById("mySidebar").style.left = "0";
    document.getElementById("main").style.marginLeft = "390px";
}

function closeNav() {
    document.getElementById("mySidebar").style.left = "-100%";
    document.getElementById("main").style.marginLeft= "230px";
}

$(document).ready(function() {

    // Call this function to reload the table data at first time
    load_data();
    // Function for loading of table data
    function load_data(search, page){
        $.ajax({
            url: "php/category-management.inc.php",
            type: "POST",
            data: {
                loadData: true,
                search: search,
                page: page
            },
            dataType: "JSON",
            success: function(data){
                $('#body-h').html(data.tableData);
                $('#pagination').html(data.pagination)
                $('#entries').html(data.entries)
            }
        })
    }

    function isCategoryExist($jobcategory) {
        $jobcategory = mysqli_real_escape_string($GLOBALS['conn'], $jobcategory);
        $CheckCategoryQuery = mysqli_query($GLOBALS['conn'], "SELECT * FROM category WHERE job_title = '$jobcategory'");
        if(mysqli_num_rows($CheckCategoryQuery) > 0) {
            return true;
        } else {
            return false;
        }
    } 


    // Function for getting the current value in search box
    function GetSearchValue(){
        var search = $('#search').val();
        return search;
    }
    
    // Function for getting the current page number
    function getCurrentPage(){
        var page = $('#pagination').find('.active').attr('data-page');
        return page;
    }

     // Function to used to check if name is valid string, return boolean result(true or false)
    function isValidCategory(category) {
        var regex = new RegExp(/^[a-zA-Z0-9 .]+$/);
        return regex.test(category);
    }

    // Function for clearing input value, border color and error message
    function clearFields() {
        // Clear the fields
        $('input').val(null);
         // Clear the error borders
        $('.form-control').removeClass().addClass('form-control');
    }

    // Trigger this when user started to type in edit modal of Job Category input and validate it
    $('#e-jobcategory').on('keyup', function() {
        let jobcategory = $('#e-jobcategory').val();
        if(jobcategory.length == 0) {
            $('#e-jobcategory').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-jobcategory').popover({ placement: 'right', content: 'Job Category is required.'}).popover('show');
        } else if(!isValidCategory(jobcategory)) {
            $('#e-jobcategory').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-jobcategory').popover({ placement: 'right', content: 'Only characters and numbers are allowed.' }).popover('show');
        } else {
            $('#e-jobcategory').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in add modal of Job Category input and validate it
    $('#a-jobcategory').on('keyup', function() {
        let jobcategory = $('#a-jobcategory').val();
        if(jobcategory.length == 0) {
            $('#a-jobcategory').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#a-jobcategory').popover({ placement: 'right', content: 'Job Category is required.'}).popover('show');
        } else if(!isValidCategory(jobcategory)) {
            $('#a-jobcategory').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#a-jobcategory').popover({ placement: 'right', content: 'Only characters and numbers are allowed.' }).popover('show');
        } else {
            $('#a-jobcategory').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })


    // Trigger this when user click on the pagination 
    $('#pagination').on('click', '.page-item', function(){
        let page = $(this).attr('data-page');
        load_data(GetSearchValue(), page);
    });
    // Trigger this when user started to search in the search bar
    $('#search').keyup(function () {
        let search = $(this).val();
        if(search != ''){
            load_data(search);
        } else {
            load_data();
        }
    });

    // Trigger this when user click add button
    $('#add-Category').on('click', '#addCategory', function (e) {
        e.preventDefault();
        // Get all the input values from the Add modal
        let formData = new FormData(this);
            formData.append("addCategory", true);

        $.ajax({
            url: 'php/category-management.inc.php',
            type: 'POST',
            data: formData,
            success: function(data) {
                if(data.status == 'success') {
                    $('#modal-add').modal('hide');
                    toastr.success('', 'Successfully Added!');
                    load_data(GetSearchValue(), getCurrentPage());
                } else {
                    // if there is an error in fullname, display error message
                    if(res.jobcategoryRR.status == 'error') {
                        $('#jobcategory').removeClass().addClass('form-control border-danger');
                        $('#jobcategory').popover({ placement: 'right', content: data.jobcategoryRR.message }).popover('show');
                    } else {
                        $('#jobcategory').removeClass().addClass('form-control border-success').popover('dispose');
                    }
                }
            }
        })
    });
    // Trigger this when user click delete button and pass the data-id value on selected button to yes button in delete modal
    $('#body-h').on('click', '.delete-Btn', function(){
        let categoryId = $(this).attr('data-id');
        $('#del-yes').val(categoryId);
    });

    // Trigger this when user click yes on delete modal
    $('#del-yes').click(function(){
        let categoryId = $(this).val();
        $.ajax({
            url: "php/category-management.inc.php",
            type: "POST",
            data: {
                deleteCategory: true,
                categoryId: categoryId
            },
            success: function(data){
                $('#modal-delete').modal('hide');
                toastr.success('', 'Successfully Deleted!');
                load_data(GetSearchValue(), getCurrentPage());
            }
        })
    });

    // Trigger this when user click edit button and get the jobseeker data to be assigned in edit modal inputs
    $('#body-h').on('click', '.fetch-details', function(){
        let categoryId = $(this).attr('data-id');
        // Pass the jobseeker Id to the save details button in edit modal
        $('#save-edit').val(categoryId);
        $.ajax({
            url: "php/category-management.inc.php",
            type: "POST",
            data: {
                fetchDetails: true,
                categoryId: categoryId
            },
            success: function(data){
                // Insert the fetch information into edit modal inputs fields
                $('#e-jobcategory').val(data);
            }
        })
    })

    // Trigger this when user click the save-details in edit modal
    $('#save-edit').click(function() {
        let categoryId = $(this).val();
        let jobcategory = $('#e-jobcategory').val();

        $.ajax({
            url: "php/category-management.inc.php",
            type: "POST",
            data: {
                saveDetails: true,
                categoryId: categoryId,
                jobcategory: jobcategory
            },
            dataType: 'json',
            success: function (data) {
                if(data.status == 'success') {
                    $('#modal-editdetails').modal('hide');
                    toastr.success('', 'Successfully Updated!');
                    load_data(GetSearchValue(), getCurrentPage());
                } else {
                    if(data.jobcategoryRR.status == 'error'){
                        $('#e-jobcategory').removeClass().addClass('form-control border-danger');
                        $('#e-jobcategory').popover({ placement: 'right', content: data.jobcategoryRR.message}).popover(show);
                    } else {
                        $('#e-jobcategory').removeClass().addClass('form-control border-success');
                    }
                }
            }
        })  
    })

    // Trigger this when user click add
    $('#add-category').click(function(){
        let jobcategory = $('#a-jobcategory').val();
        $.ajax({
                url: 'php/category-management.inc.php',
                type: 'POST',
                data: {
                    addCategory: true,
                    jobcategory: jobcategory
                },
                dataType: 'json',
                success: function (data) {
                    if(data.status == 'success') {
                        clearFields();
                        $('#modal-add').modal('hide');
                        toastr.success('', 'Successfully Added!');
                        load_data(GetSearchValue(), getCurrentPage());
                    } else {
                        if(data.jobcategoryRR.status == 'error'){
                            $('#a-jobcategory').removeClass().addClass('form-control border-danger');
                            $('#a-jobcategory').popover({ placement: 'right', content: data.jobcategoryRR.message}).popover(show);
                        } else {
                            $('#a-jobcategory').removeClass().addClass('form-control border-success');
                        }
                    }
                }
            })
    })
})