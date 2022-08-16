$(document).ready(function () {

    $(document).on('click', '#sub', function (event) {
        let Full_name = $('#hey').val();
        let Email = $('#Email').val();
        let Resume = $('#Resume').prop('files')[0];
        let form_data = new FormData();
        form_data.append('Full_name', Full_name);
        form_data.append('Email', Email);
        form_data.append('Resume', Resume);
        form_data.append('saveNow', true);
        //console.log (form_data.Resume);
        //event.preventDefault();
        // alert ('testing');
        $.ajax({
        url: 'php/resume.inc.php',
        type: 'POST',
        data: form_data, 
        contentType: false, 
        processData: false,
       // dataType: 'JSON',
        success: function (data) {
            console.log(data);
                    swal({
                        title: "Update Account Succesfull!",
                        icon: "success",
                        button: "Okay",
                    })
                    .then(function() {
                        window.location = "applicant-profile.php";
                    });
                    // Call this function to clear border color
                    //clearBorderColor();
                } 
        })
    })
 });