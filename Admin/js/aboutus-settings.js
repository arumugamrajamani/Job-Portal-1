$(document).ready(function () {




    //--------------------------------------- Functions --------------------------------------------------------->
    // Function to clear border color
    function clearBorderColor() {
        $("#meetourteam").removeClass().addClass("form-control");
        $("#vision").removeClass().addClass("form-control");
        $("#mission").removeClass().addClass("form-control");
        $("#goal").removeClass().addClass("form-control");
        $("#services").removeClass().addClass("form-control");
    }


    ////--------------------------------------- END OF Functions -------------------------------------------------->


    //<-----------------------------------------VALIDATIONS------------------------------------------------------->



    // Trigger this when user started to type in the text field.
    $('#meetourteam').on('keyup', function () {
        let meetourteam = $('#meetourteam').val();
        if (meetourteam.length == 0) {
            $('#meetourteam').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#meetourteam').popover({ placement: 'right', content: 'This field is required' }).popover('show');
        } else {
            $('#meetourteam').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })
    // Trigger this when user started to type in the text field.
    $('#vision').on('keyup', function () {
        let vision = $('#vision').val();
        if (vision.length == 0) {
            $('#vision').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#vision').popover({ placement: 'right', content: 'This field is required' }).popover('show');
        } else {
            $('#vision').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in the text field.
    $('#mission').on('keyup', function () {
        let mission = $('#mission').val();
        if (mission.length == 0) {
            $('#mission').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#mission').popover({ placement: 'right', content: 'This field is required' }).popover('show');
        } else {
            $('#mission').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in the text field.
    $('#goal').on('keyup', function () {
        let goal = $('#goal').val();
        if (goal.length == 0) {
            $('#goal').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#goal').popover({ placement: 'right', content: 'This field is required' }).popover('show');
        } else {
            $('#goal').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in the text field.
    $('#services').on('keyup', function () {
        let services = $('#services').val();
        if (services.length == 0) {
            $('#services').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#services').popover({ placement: 'right', content: 'This field is required' }).popover('show');
        } else {
            $('#services').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })




    //<-----------------------------------------END OF VALIDATIONS------------------------------------------------->



    //----------------------------------------------- AJAX -------------------------------------------------------->


    // calls the fetch data on page load.
    fetchData();
    //fetch the admin's data from the database then show the data into the text fields
    function fetchData() {
        $.ajax({
            url: 'php/aboutus-settings.inc.php',
            type: 'POST',
            data: {
                fetchData: true
            },
            dataType: "JSON",
            success: function (data) {
                // insert the data into the input fields
                $('#meetourteam').val(data.meetourteam);
                $('#vision').val(data.vision);
                $('#mission').val(data.mission);
                $('#goal').val(data.goal);
                $('#services').val(data.services);

            }
        });
    }

    fetchDataIndex();
    //This function is for the index.php page this will update or fetch the data from the database and it will place it on the index page
    function fetchDataIndex() {
        $.ajax({
            url: 'admin/php/aboutus-settings.inc.php',
            type: 'POST',
            data: {
                fetchData: true
            },
            dataType: "JSON",
            success: function (data) {
                // insert the data into the input fields
                $('#meetourteam').html(data.meetourteam);
                $('#vision').html(data.vision);
                $('#mission').html(data.mission);
                $('#goal').html(data.goal);
                $('#services').html(data.services);

            }
        });
    }


    // Trigger this when user click save now 
    $(document).on('click', '#save-now', function () {
        let meetourteam = $('#meetourteam').val();
        let vision = $('#vision').val();
        let mission = $('#mission').val();
        let goal = $('#goal').val();
        let services = $('#services').val();

        $.ajax({
            url: 'php/aboutus-settings.inc.php',
            type: 'POST',
            data: {
                meetourteam: meetourteam,
                vision: vision,
                mission: mission,
                goal: goal,
                services: services,
                saveNow: true
            },
            dataType: 'JSON',
            success: function (data) {
                if (data.status == "success") {
                    toastr.success('', data.message);
                    // Call this function to clear border color
                    clearBorderColor();
                } else {
                    toastr.error('', data.message);
                }
            }
        })
    })


    //--------------------------------------------END OF AJAX -------------------------------------------------------->
});