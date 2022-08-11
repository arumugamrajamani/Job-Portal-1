function openNav() {
    document.getElementById("mySidebar").style.left = "0";
    document.getElementById("main").style.marginLeft = "390px";
}
    
function closeNav() {
    document.getElementById("mySidebar").style.left = "-100%";
    document.getElementById("main").style.marginLeft= "230px";
}

// $(document).ready(function(){
//     //toggle sub-menu
//     $('.sub-btn').click(function(){
//         $(this).next('.sub-menu').slideToggle();
//         $(this).find('.dropdown').toggleClass('rotate');
//     });
// });
$(document).ready(function () {
   load_data();
   function load_data(search, page){
       $.ajax({
       url: 'php/searchjob.inc.php',
       type: 'POST',
       data: {
           fetchData: true,
           search: search,
           page: page
       },
       dataType: 'JSON',
       success: function (response) {
        console.log(response);
        // $('#pagination').html(response.pagination);
        // $('#entries').html(response.entries);
        $('#body-h').html(response.tableData);
       }
       });
   }
   $('#body-h').on('click', '#detail', function () {
    let postId = $(this).attr('data-id');
    $('#del-yes').val(postId);
    });

    $('#del-yes').click(function () {
        let postId = $(this).val();
        console.log(postId);
        $.ajax({
        url: 'php/searchjob.inc.php',
        type: 'POST',
        data: {
            details: true,
            postId: postId
        },
        success: function (response) {
        //alert ('nagana');
        window.location = 'insidejob.php';
        }
        });
    });
    $('#body-h').on('click', '#qr', function () {
        let postId = $(this).attr('data-id');
        $('#data-val').val(postId);
        data = $('#data-val').val();
        $.ajax({
            url: 'php/searchjob.inc.php',
            type: 'POST',
            data: {
                qr: true,
                data: data
            },
            dataType: 'JSON',
            success: function (response) {
                $('#qrCode').attr('src', response.qr);
            }
            });
        });
});