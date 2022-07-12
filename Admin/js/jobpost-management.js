function openNav() {
    document.getElementById("mySidebar").style.left = "0";
    document.getElementById("main").style.marginLeft = "390px";
}

function closeNav() {
    document.getElementById("mySidebar").style.left = "-100%";
    document.getElementById("main").style.marginLeft = "230px";
}

$(document).ready(function () {
    $.ajax({
        url: 'php/job-management.inc.php',
        type: 'POST',
        data: {
            fetchData: true
        },
        dataType: 'JSON',
        success: function (response) {
            $('#body-h').html(response.tableData);
        }
    });
});