$(document).ready(function () {
    fetchData();

    function fetchData() {
        $.ajax({
            url: 'php/postajob.inc.php',
            type: 'POST',
            data: {
                fetchData: true
            },
            dataType: "JSON",
            success: function (data) {
                console.log(data.tableData);
                //assign got value to the html ids
                // $('#company_logo_name').attr('src', data.company_logo_name);
                // $('#employer_name').html(data.employer_name);
                // $('#contact_number').html("Number: "+data.contact_number);
                // $('#email').html("Email: "+data.email);
                // $('#employer_position').html(data.employer_position);
                // $('#company_address').html('<i class="bi bi-geo-alt"></i> ' + data.employerAddress);
                // $('#company_name').html(data.companyName);
                $('#body-h').html(data.tableData);
            }
        });
    }

    $('.delete-Btn').click(function () {
        let postId = $(this).attr('data-id');
        $('#del-yes').val(postId);
    });

    // Trigger this when user click yes on delete modal
    $('#del-yes').click(function () {

        let postId = $('.delete-Btn').attr('data-id');
        $.ajax({
            url: "php/postajob.inc.php",
            type: "POST",
            data: {
                deleteJobPost: true,
                postId: postId
            },
            success: function (response) {
                $('#exampleModal').modal('hide');
                console.log(postId);
                toastr.success('', 'Successfully Deleted!');
                fetchData();
            }
        });
    });









    
});



