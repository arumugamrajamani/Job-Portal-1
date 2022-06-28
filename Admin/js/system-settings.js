$(document).ready(function () {

    // Set option for toaster function
    toastr.options = {
        "preventDuplicates": true,
        "timeOut": 2000,
    };

    fetchData()
    function fetchData() {
        $.ajax({
            url: 'php/system-settings.inc.php',
            type: 'POST',
            data: {
                fetchData: true
            },
            dataType: "JSON",
            success: function (data) {
                $('#logo').attr('src', "image/" + data.systemPicture);
                $('#name').val(data.systemName);
                $('#tagline').val(data.systemTagline);
                $('#contactnumber').val(data.conatactNumber);
                $('#email').val(data.email);
                $('#description').val(data.systemDescription);
            }
        });
    }

    // Trigger this when user clic save now 
    $(document).on('click', '#save-now', function () {
        let systemName = $('#name').val();
        let systemTagline = $('#tagline').val();
        let conatactNumber = $('#contactnumber').val();
        let email = $('#email').val();
        let systemDescription = $('#description').val();
        $.ajax({
            url: 'php/system-settings.inc.php',
            type: 'POST',
            data: {
                systemName: systemName,
                systemTagline: systemTagline,
                conatactNumber: conatactNumber,
                email: email,
                systemDescription: systemDescription,
                saveNow: true
            },
            dataType: 'JSON',
            success: function (data) {
                if (data.status == "success") {
                    toastr.success('', data.message);
                } else {
                    toastr.error('', data.message);
                }
            }
        })
    })


})