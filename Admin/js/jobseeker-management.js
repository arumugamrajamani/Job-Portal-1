$(document).ready(function() {

    // Call this function to reload the table data at first time
    load_data();
    // Function for loading of table data
    function load_data(){
        $.ajax({
            url: "php/jobseeker-management.inc.php",
            type: "POST",
            data: {
                loadData: true
            },
            success: function(data){
                $('#body-h').html(data);
            }
        })
    }
        // Function for searching of profile picture src and displaying to modal
        $('#body-h').on('click', '.view-pp', function(){
            let src = $(this).find('img').attr('src')
            $('#view-pp').attr('src', src)
        })
})