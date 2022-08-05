function notLoggedIn() {
    toastr.options = {
        preventDuplicates : true,
        positionClass : "toast-top-center"}
    toastr.error('You must Login first', 'Sorry');
}
$(document).ready(function () {
    load_data();
    function load_data(search, page){
        $.ajax({
        url: 'php/searchjob-home.inc.php',
        type: 'POST',
        data: {
            fetchData: true,
            search: search,
            page: page
        },
        dataType: 'JSON',
        success: function (response) {
         console.log(response);
         $('#body-h').html(response.tableData);
        }
        });
    }
});