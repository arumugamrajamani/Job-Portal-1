$(document).ready(function () {
    //toggle sub-menu
    $('.sub-btn').click(function () {
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
    });

    fetchData();
    //fetch the admin's data from the database
    function fetchData() {
        $.ajax({
            url: 'php/admin-edit-profile.inc.php',
            type: 'POST',
            data: {
                fetchData: true
            },
            dataType: "JSON",
            success: function (data) {
                // insert the data into the input fields
                $('#adminFullName').html('<img id="mainDp" src="" alt="DispPic" class="pfp">' + data.fullName);
                $('#mainDp').attr('src', data.profilePic);
                $('#mainDpDrop').attr('src', data.profilePic);
            }
        });
    }
});
