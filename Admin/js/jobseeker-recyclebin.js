$(document).ready(function(){
    // Call this function to reload the table data at first time
    load_data();
    // Function for loading of table data
    function load_data(search, page) {
        $.ajax({
            url: "php/recycle-bin-jobseeker.inc.php",
            type: "POST",
            data: {
                loadData: true,
                search: search,
                page: page
            },
            dataType: "JSON",
            success: function (data) {
                $('#body-h').html(data.tableData);
                $('#pagination').html(data.pagination);
                $('#entries').html(data.entries);
            }
        })
    }
    // Trigger this when user started to search in the search bar
    $('#search').keyup(function () {
        let search = $(this).val();
        if (search != '') {
            load_data(search);
        } else {
            load_data();
        }
    });
    // Trigger this when user click on the pagination 
    $('#pagination').on('click', '.page-item', function () {
        let page = $(this).attr('data-page');
        load_data(GetSearchValue(), page);
    });
    function GetSearchValue() {
        var search = $('#search').val();
        return search;
    }
    // Function for getting the current page number
    function getCurrentPage() {
        var page = $('#pagination').find('.active').attr('data-page');
        return page;
    }


    // Function for searching of profile picture src and displaying to modal
    $('#body-h').on('click', '.view-pp', function () {
        let src = $(this).find('img').attr('src')
        $('#view-pp').attr('src', src)
    });

});
