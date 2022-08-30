$(document).ready(function() {
    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
    function isValidName(name) {
        var regex = new RegExp(/^[a-zA-Z .]+$/);
        return regex.test(name);
    }
    function isCurrency(value) {
        var regex = /[A-Z]{1,3}\s\d{1,3}(,\d{3})*(.\d+)?$/;
        return regex.test(value);
    }
     // Function for getting the current page number
     function getCurrentPage() {
        var page = $('#pagination').find('.active').attr('data-page');
        return page;
    }
     // Trigger this when user click on the pagination 
     $('#pagination').on('click', '.page-item', function () {
        let page = $(this).attr('data-page');
        load_data(GetSearchValue(), page);
    });
     // Function for loading of table data
     function load_data(search, page) {
        $.ajax({
            url: "../Employer/php/postajob.inc.php",
            type: "POST",
            data: {
                loadData: true,
                search: search,
                page: page
            },
            dataType: "JSON",
            success: function (data) {
                $('#body-h').html(data.tableData);
                $('#pagination').html(data.pagination);
                $('#entries').html(data.entries);
            }
        })
    }
    
    
    $('#companyname').on('keyup', function() {
        let fullname = $('#companyname').val();
        if(fullname.length == 0) {
            $('#companyname').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#companyname').popover({ placement: 'right', content: 'Company Name is required.'}).popover('show');
        } else if(!isValidName(fullname)) {
            $('#companyname').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#companyname').popover({ placement: 'right', content: 'Only characters are allowed.' }).popover('show');
        } else {
            $('#companyname').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })
    $('#first').on('keyup', function() {
        let fullname = $('#first').val();
        if(fullname.length == 0) {
            $('#first').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#first').popover({ placement: 'right', content: 'Job Title is required.'}).popover('show');
        } else if(!isValidName(fullname)) {
            $('#first').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#first').popover({ placement: 'right', content: 'Only characters are allowed.' }).popover('show');
        } else {
            $('#first').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })
    $('#jobcategory').on('keyup', function() {
        let fullname = $('#jobcategory').val();
        if(fullname.length == 0) {
            $('#jobcategory').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#jobcategory').popover({ placement: 'right', content: 'Category is required.'}).popover('show');
        } else if(!isValidName(fullname)) {
            $('#jobcategory').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#jobcategory').popover({ placement: 'right', content: 'Only characters are allowed.' }).popover('show');
        } else {
            $('#jobcategory').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })
    $('#url').on('keyup', function() {
        let email = $('#url').val();
        if (email.length == 0) {
            $('#url').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#url').popover({ placement: 'right', content: 'Email is required.'}).popover('show');
        } else if(isEmail(email) == false) {
            $('#url').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#url').popover({ placement: 'right', content: 'Email is invalid.'}).popover('show');
        } else {
            $('#url').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })
    $('#exampleFormControlTextarea1').on('keyup', function() {
        let fullname = $('#exampleFormControlTextarea1').val();
        if(fullname.length == 0) {
            $('#exampleFormControlTextarea1').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#exampleFormControlTextarea1').popover({ placement: 'right', content: 'Description is required.'}).popover('show');
        } else if(!isValidName(fullname)) {
            $('#exampleFormControlTextarea1').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#exampleFormControlTextarea1').popover({ placement: 'right', content: 'Only characters are allowed.' }).popover('show');
        } else {
            $('#exampleFormControlTextarea1').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })
    $('#salarywage').on('keyup', function() {
        let fullname = $('#salarywage').val();
        if(fullname.length == 0) {
            $('#salarywage').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#salarywage').popover({ placement: 'right', content: 'Amount is required.'}).popover('show');
        } else if(isNaN(fullname)) {
            $('#salarywage').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#salarywage').popover({ placement: 'right', content: 'Only characters are allowed.' }).popover('show');
        } else {
            $('#salarywage').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })
    $("form.ajax-form" ).submit(function(event) {
        //prevents the page to load 
        event.preventDefault();
        //getting the attributes in the form tag
        var jobForm = $(this), url = jobForm.attr('action'), type = jobForm.attr('method'), data = {};
        //finding all  elements with name attribute within the form and iterating each element
        jobForm.find('[name]').each(function(i, value){
            //saving all the values of the form in the data array
            var element = $(this), name = element.attr('name'), value = element.val();
            data[name] = value;
        });
        $.ajax({
            url : url, type: type, data : data, dataType:'json', success: function(response){
               if (response.status == "success"){
                 // Create sweet alert to display successfull message and return to company-profile page
                swal({
                    title: "Job Posted",
                    icon: "success",
                    button: "Okay",
                })
                .then(function() {
                    console.log(response);
                    window.location = "company-profile.php";
                });
                }
                else if (response.status == 'error'){
                    if(response.companyName.status == 'error') {
                        $('#companyname').removeClass().addClass('form-control border-danger');
                        $('#companyname').popover({ placement: 'right', content: response.companyName.message }).popover('show');
                    } else {
                        $('#companyname').removeClass().addClass('form-control border-success').popover('dispose');
                    }
                    if(response.jobTitle.status == 'error') {
                        $('#first').removeClass().addClass('form-control border-danger');
                        $('#first').popover({ placement: 'right', content: response.jobTitle.message }).popover('show');
                    } else {
                        $('#first').removeClass().addClass('form-control border-success').popover('dispose');
                    }
                    if(response.jobCategory.status == 'error') {
                        $('#jobcategory').removeClass().addClass('form-control border-danger');
                        $('#jobcategory').popover({ placement: 'right', content: response.jobCategory.message }).popover('show');
                    } else {
                        $('#jobcategory').removeClass().addClass('form-control border-success').popover('dispose');
                    }
                    if(response.employerEmail.status == 'error') {
                        $('#url').removeClass().addClass('form-control border-danger');
                        $('#url').popover({ placement: 'right', content: response.employerEmail.message }).popover('show');
                    } else {
                        $('#url').removeClass().addClass('form-control border-success').popover('dispose');
                    }
                    if(response.jobDescription.status == 'error') {
                        $('#exampleFormControlTextarea1').removeClass().addClass('form-control border-danger');
                        $('#exampleFormControlTextarea1').popover({ placement: 'right', content: response.jobDescription.message }).popover('show');
                    } else {
                        $('#exampleFormControlTextarea1').removeClass().addClass('form-control border-success').popover('dispose');
                    }
                    if(response.salaryWage.status == 'error') {
                        $('#salarywage').removeClass().addClass('form-control border-danger');
                        $('#salarywage').popover({ placement: 'right', content: response.salaryWage.message }).popover('show');
                    } else {
                        $('#salarywage').removeClass().addClass('form-control border-success').popover('dispose');
                    }
                }
            }
        });
      });
});