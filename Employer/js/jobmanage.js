$(document).ready(function () {
    fetchData();

    // Function for getting the current page number
    function getCurrentPage() {
        var page = $('#pagination').find('.active').attr('data-page');
        return page;
    }

    // Function for getting the current value in search box
    function GetSearchValue() {
        var search = $('#search').val();
        return search;
    }

    function fetchData(search, page) {
        $.ajax({
            url: 'php/jobmanage.inc.php',
            type: 'POST',
            data: {
                fetchData: true,
                search: search,
                page: page
            },
            dataType: "JSON",
            success: function (data) {
                // console.log(data.entries)
                
                $('#body-h').html(data.tableData);
                $('#pagination').html(data.pagination)
                $('#entries').html(data.entries)
            }
        });
    }

    // Trigger this when user started to type in the search bar
    $('#form1').keyup(function () {
        let search = $(this).val();
        if (search != '') {
            fetchData(search);
        } else {
            fetchData();
        }
    });

    // Trigger this when user click on the pagination 
    $('#pagination').on('click', '.page-item', function () {
        let page = $(this).attr('data-page');
        console.log(page)
        fetchData(GetSearchValue(), page);
    });

    $('.delete-Btn').click(function () {
        let postId = $(this).attr('data-id');
        $('#del-yes').val(postId);
    });

    // Trigger this when user click yes on delete modal
    $('#del-yes').click(function () {

        let postId = $('.delete-Btn').attr('data-id');
        $.ajax({
            url: "php/jobmanage.inc.php",
            type: "POST",
            data: {
                deleteJobPost: true,
                postId: postId
            },
            dataType: "JSON",
            success: function (response) {
                $('#exampleModal').modal('hide');
                console.log(postId);
                toastr.success('', 'Successfully Deleted!');
                fetchData();
            },
            error: function (jqXHR, status, description) {
                console.log(jqXHR.responseText);
                console.log(status);
            }
        });
    });

    // Trigger this when user click edit button and get the jobseeker data to be assigned in edit modal inputs
    $('#body-h').on('click', '.fetch-details', function () {
        let postId = $(this).attr('data-id');
        $('#save-edit').val(postId);

        $.ajax({
            url: "php/jobmanage.inc.php",
            type: "POST",
            data: {
                fetchDetails: true,
                postId: postId
            },
            dataType: "JSON",
            success: function (data) {
                // Insert the fetch information into edit modal inputs fields
                $('#e-companyname').val(data.companyName);
                $('#e-jobtitle').val(data.jobTitle);
                $('#e-employment').val(data.employment);
                $('#e-jobcategory').val(data.jobCategory);
                $('#e-jobdescription').val(data.jobDescription);
                $('#e-salarywage').val(data.salaryWage);
                $('#e-employeremail').val(data.employerEmail);
                $('#e-primaryskill').val(data.primarySkill);
                $('#e-secondaryskill').val(data.secondarySkill);
            }
        })
    });

    // Trigger this when user click the save details in edit modal
    $('#save-edit').click(function () {
        // Get all the input values from the edit modal
        let postId = $(this).val();
        let companyName = $('#e-companyname').val();
        let jobTitle = $('#e-jobtitle').val();
        let employment = $('#e-employment').val();
        let jobCategory = $('#e-jobcategory').val();
        let jobDescription = $('#e-jobdescription').val();
        let salaryWage = $('#e-salarywage').val();
        let employerEmail = $('#e-employeremail').val();
        let primarySkill = $('#e-primaryskill').val();
        let secondarySkill = $('#e-secondaryskill').val();

        $.ajax({
            url: "php/jobmanage.inc.php",
            type: "POST",
            data: {
                saveDetails: true,
                postId: postId,
                companyName: companyName,
                jobTitle: jobTitle,
                employment: employment,
                jobCategory: jobCategory,
                jobDescription: jobDescription,
                salaryWage: salaryWage,
                employerEmail: employerEmail,
                primarySkill: primarySkill,
                secondarySkill: secondarySkill
            },
            dataType: 'json',
            success: function (data) {
                if (data.status == 'success') {
                    $('#modal-editdetails').modal('hide');
                    toastr.success('', 'Successfully Updated!');
                    // load_data(GetSearchValue(), getCurrentPage());
                    fetchData(GetSearchValue(), getCurrentPage());
                }
            },
            error: function (jqXHR, status, description) {
                console.log(jqXHR.responseText);
                console.log(status);
            }
        })
    })
});