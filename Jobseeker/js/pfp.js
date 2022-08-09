$(document).ready(function (){
    $.ajax({
        url: 'php/pfp.inc.php',
        type: 'POST',
        data: {
            fetchData: true
        },
        dataType: "JSON",
        success: function (data) {
            console.log(data);
            //assign got value to the html ids
            $('#pfp').attr('src', data.pfp);
            $('#name').html(data.name.toUpperCase());
        }
    });
});