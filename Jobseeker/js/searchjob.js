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
});