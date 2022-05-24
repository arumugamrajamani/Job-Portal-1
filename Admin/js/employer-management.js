$(document).ready(function() {
    // Call this function to reload the table data at first time
    load_data();
    // Function for loading of table data
    function load_data(search){
        $.ajax({
            url: "php/employer-management.inc.php",
            type: "POST",
            data: {
                loadData: true,
                search: search
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

    // Trigger this when user started to search in the search bar
    $('#search').keyup(function () {
        let search = $(this).val();
        if(search != ''){
            load_data(search);
        } else {
            load_data();
        }
    });
})