$(document).ready(function () {
    load_data();
       function load_data(){
            $.ajax({
                url: 'php/insidejob.inc.php',
                type: 'POST',
                data: {
                    asdf: true,
                },
                dataType: 'JSON',
                success: function (response) {
                 console.log(response);
                $('#body-h').html(response.tableData);
    
                }
                });
       }
    });