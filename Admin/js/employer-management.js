$(document).ready(function() {
    // Call this function to reload the table data at first time
    load_data();
    // Function for loading of table data
    function load_data(){
        $.ajax({
            url: "php/employer-management.inc.php",
            type: "POST",
            data: {
                loadData: true
            },
            success: function(data){
                $('#body-h').html(data);
            }
        })
    }

    // Function for searching of company logo src and displaying to modal
    $('#body-h').on('click', '.view-logo', function(){
        let src = $(this).find('img').attr('src')
        $('#view-logo').attr('src', src)
    })
})