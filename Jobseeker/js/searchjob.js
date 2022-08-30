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
    var list_emstatus = ['Full-Time', 'Freelancer', 'Part-Time'];
    var list_salary = [5000, 10000, 15000, 20000];

    // Function for getting the current value in search box
    function GetCheckBoxEMSTAUSValue() {
        let sqlValue = `('${list_emstatus.join("','")}')`;
        return sqlValue;
    }

    function GetSearchValue() {
        var search = $('#search').val();
        return search;
    }

    // Function for getting the current page number
    function getCurrentPage() {
        var page = $('#pagination').find('.active').attr('data-page');
        return page;
    }

    load_data(GetCheckBoxEMSTAUSValue(), list_salary);

    function load_data(checkbox_emstaus, checkbox_salary, search, page){
        $.ajax({
            url: 'php/searchjob.inc.php',
            type: 'POST',
            data: {
                fetchData: true,
                checkbox_emstaus: checkbox_emstaus,
                checkbox_salary: checkbox_salary,
                search: search,
                page: page
            },
            dataType: 'JSON',
            success: function (data) {
                // $('#pagination').html(response.pagination);
                // $('#entries').html(response.entries);
                $('#body-h').html(data.tableData);
                console.log(data.check_salary);
            }
        });
    }

    $('#body-h').on('click', '#detail', function () {
        let postId = $(this).attr('data-id');
        $('#del-yes').val(postId);
    });
    
    $(".checkbox_emstatus").click(function() {
        let value = $(this).val();

        if ($(this)[0].checked) {
            list_emstatus.push(value);
        }
        else {
            list_emstatus = list_emstatus.filter(function(e) {return e !== value})
        }

        console.log(list_emstatus);
        let sqlValue = `('${list_emstatus.join("','")}')`;
        load_data(sqlValue);
    });

    $(".checkbox_salary").click(function() {
        let value = $(this).val();
        value = parseInt(value);

        if ($(this)[0].checked) {
            list_salary.push(value);
        }
        else {
            list_salary = list_salary.filter(function(e) {return e !== value})
        }

        // let sqlValue = `('${list_salary.join("','")}')`;
        load_data(GetCheckBoxEMSTAUSValue(), list_salary);
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
            success: function (data) {
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
            success: function (data) {
                $('#qrCode').attr('src', data.qr);
            }
        });
    });
});