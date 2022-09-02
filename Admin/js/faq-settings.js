$(document).ready(function () {
    load_data();

    function load_data() {
        $.ajax({
            url: 'php/faq-settings.inc.php',
            type: 'POST',
            data: {
                loadData: true
            },
            dataType: 'JSON',
            success: function (data) {
                console.log(data);
                $('#body-system').html(data.tableDataSystem);
                $('#body-application').html(data.tableDataApplication);
                $('#body-interview').html(data.tableDataInterview);
                $('#body-general').html(data.tableDataGeneral);
            }
        });
    }

    $('#body-system').on('click', '.fetch-details', function () {
        let faqId = $(this).attr('data-id');
        $('#save-edit').val(faqId);

        $.ajax({
            url: "php/faq-settings.inc.php",
            type: "POST",
            data: {
                fetchDetails: true,
                faqId: faqId
            },
            dataType: "JSON",
            success: function (data) {
                console.log(data);
                // Insert the fetch information into edit modal inputs fields
                $('#faq-question').val(data.faqQuestion);
                $('#faq-answer').val(data.faqAnswer);
                // $('#e-jobseekername').val(data.jobseekerName);
                // $('#e-contactnumber').val(data.jobseekerNumber);
                // $('#e-emailaddress').val(data.jobseekerEmail);
            }
        });
    })

    // save details
    $('#save-edit').click(function() {
        // Get all the input values from the edit modal
        // alert('hello');
        let faqId = $(this).val();
        let faqQuestion = $('#faq-question').val();
        let faqAnswer = $('#faq-answer').val();

        $.ajax({
            url: "php/faq-settings.inc.php",
            type: "POST",
            data: {
                saveDetails: true,
                faqId: faqId,
                faqQuestion: faqQuestion,
                faqAnswer: faqAnswer,
            },
            dataType: 'json',
            success: function (data) {
                // console.log(data.status);
                if (data.status == 'success') {
                    console.log(data);
                    $('#modal-editdetails').modal('hide');
                    toastr.success('', 'Successfully Updated!');
                    load_data();
                } 
                // else {
                //     // if there is an error in fullname, display error message
                //     if (data.fullnameRR.status == 'error') {
                //         $('#e-jobseekername').removeClass().addClass('form-control border-danger');
                //         $('#e-jobseekername').popover({ placement: 'right', content: data.fullnameRR.message }).popover('show');
                //     } else {
                //         $('#e-jobseekername').removeClass().addClass('form-control border-success').popover('dispose');
                //     }

                //     // if there is an error in number, display error message
                //     if (data.mobilenumberRR.status == 'error') {
                //         $('#e-contactnumber').removeClass().addClass('form-control border-danger');
                //         $('#e-contactnumber').popover({ placement: 'right', content: data.mobilenumberRR.message }).popover('show');
                //     } else {
                //         $('#e-contactnumber').removeClass().addClass('form-control border-success').popover('dispose');
                //     }
                // }
            }
        })
    });
});