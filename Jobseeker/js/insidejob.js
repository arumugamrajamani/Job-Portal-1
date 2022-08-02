$(document).ready(function () {
    load_data();
   function load_data(){
       $.ajax({
       url: 'php/searchjob.inc.php',
       type: 'POST',
       data: {
           getData: true
       },
       dataType: 'JSON',
            success: function (response) {
            }
       });
   }
});