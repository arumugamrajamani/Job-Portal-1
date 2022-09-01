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
    var list_salary = [20000, 15000, 10000, 5000];
    

    // Function for getting the current value in search box
    function GetCheckBoxEMSTATUSValue() {
        if (list_emstatus.length != 0) {
            let sqlValue = `('${list_emstatus.join("','")}')`;
            // console.log(list_emstatus);
            return sqlValue;
        }
        else {
            console.log("Reached Here")
            return undefined;
        }
    }

    function GetCheckBoxSalaryValue() {
        if (list_salary.length != 0) {
            return list_salary;
        }
        else {
            return undefined;
        }
    }

    // Function for getting the search value in Company
    function GetSearchCompValue() {
        let search = $('#search_comp').val();
        if (search != '') {
            return search;
        }
        else {
            return undefined;
        }
        
    }

    // Function for getting the search value in Job Title
    function GetSearchJobtValue() {
        let search = $('#search_jobt').val();
        if (search != '') {
            return search;
        }
        else {
            return undefined;
        }
    }

    // Function for getting the current page number
    function getCurrentPage() {
        let page = $('#pagination').find('.active').attr('data-page');
        return page;
    }

    load_data(GetCheckBoxEMSTATUSValue(), GetCheckBoxSalaryValue(), GetSearchCompValue(), GetSearchJobtValue());

    function load_data(checkbox_emstatus, checkbox_salary, search_comp, search_jobt, page){
        $.ajax({
            url: 'php/searchjob.inc.php',
            type: 'POST',
            data: {
                fetchData: true,
                checkbox_emstatus: checkbox_emstatus,
                checkbox_salary: checkbox_salary,
                search_comp: search_comp,
                search_jobt: search_jobt,
                page: page
            },
            dataType: 'JSON',
            success: function (data) {
                // $('#pagination').html(response.pagination);
                // $('#entries').html(response.entries);
                $('#body-h').html(data.tableData);
                $('#pagination').html(data.pagination);
                $('#entries').html(data.entries);

                // console.log(data.check_salary);
                // console.log(data.statement);
                console.log(data.data_test);
            }
        });
    }

    $('#body-h').on('click', '#detail', function () {
        let postId = $(this).attr('data-id');
        $('#del-yes').val(postId);
    });

    $("#search_comp").keyup(function () {
        // console.log("Comp Tested");
        let search = $(this).val();
        if (search != '') {
            load_data(GetCheckBoxEMSTATUSValue(), GetCheckBoxSalaryValue(), search, GetSearchJobtValue());
        }
        else {
            load_data(GetCheckBoxEMSTATUSValue(), GetCheckBoxSalaryValue(), undefined, GetSearchJobtValue());
        }
    });

    $("#search_jobt").keyup(function () {
        // console.log("Jobt Tested");
        let search = $(this).val();
        if (search != '') {
            load_data(GetCheckBoxEMSTATUSValue(), GetCheckBoxSalaryValue(), GetSearchCompValue(), search);
        }
        else {
            load_data(GetCheckBoxEMSTATUSValue(), GetCheckBoxSalaryValue(), GetSearchCompValue(), undefined)
        }
    });
    
    $(".checkbox_emstatus").click(function() {
        let value = $(this).val();

        if ($(this)[0].checked) {
            list_emstatus.push(value);
        }
        else {
            list_emstatus = list_emstatus.filter(function(e) {return e !== value})
        }

        load_data(GetCheckBoxEMSTATUSValue(), GetCheckBoxSalaryValue(), GetSearchCompValue(), GetSearchJobtValue());
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
        load_data(GetCheckBoxEMSTATUSValue(), list_salary, GetSearchCompValue(), GetSearchJobtValue());
    });

    $('#pagination').on('click', '.page-item', function () {
        let page = $(this).attr('data-page');
        load_data(GetCheckBoxEMSTATUSValue(), list_salary, GetSearchCompValue(), GetSearchJobtValue(), page);
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