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
                // console.log(data.tableDataSystem);
                $('#body-system').html(data.tableDataSystem);
                $('#body-application').html(data.tableDataApplication);
                $('#body-interview').html(data.tableDataInterview);
                $('#body-general').html(data.tableDataGeneral);
            }
        });
    }

    $('.body-faq').on('click', '.fetch-details', function () {
        let faqId = $(this).attr('data-id');
        
        $('#save-edit').val(faqId);
        $('#del-yes').val(faqId);
        
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
            }
        });
    });

    let category = ''

    $('#add-faq-sys').click(function() {
        category = 'systems';
    });

    $('#add-faq-app').click(function() {
        category = 'application process';
    });

    $('#add-faq-int').click(function() {
        category = 'interview';
    });

    $('#add-faq-gen').click(function() {
        category = 'general questions';
    });

    $('#add-new-faq').click(function() {
        let add_question = $('#add-f-question').val();
        let add_answer = $('#add-f-answer').val()
        $.ajax({
            url: 'php/faq-settings.inc.php',
            type: 'POST',
            data: {
                addNewFaq: true,
                faqCategory: category,
                faqAddQuestion: add_question,
                faqAddAnswer: add_answer
            },
            dataType: 'JSON',
            success: function(data) {
                console.log(data.status)
                if (data.status == 'success') {
                    $('#modal-add').modal('hide');
                    toastr.success('', 'Successfully Updated!');
                    $('#add-f-question').val('');
                    $('#add-f-answer').val('');
                    load_data();
                } else {
                    toastr.error('', 'Empty Question and Answer!');
                }
            }
        });
    });

    // // save details
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

    $('#del-yes').click(function() {
        let faqId = $(this).val();
        
        $.ajax({
            url: 'php/faq-settings.inc.php',
            type: 'POST',
            data: {
                deleteData: true,
                faqId: faqId
            },
            dataType: 'JSON',
            success: function(data) {
                console.log(data.status)
                if (data.status == 'success') {
                    $('#modal-delete').modal('hide');
                    toastr.success('', 'Successfully Deleted!');
                    load_data();
                }
            }
        });
    });
});