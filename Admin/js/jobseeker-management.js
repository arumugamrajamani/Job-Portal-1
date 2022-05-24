$(document).ready(function() {
    loadData();

    //fetch then load all the data from db to the table
    function loadData(){
        //fetching of data
        $.ajaxx({
            url: "php/jobseeker-management.inc.php",
            type: "POST",
            data: {
                loadData: true
            },
            //loading of the data to the table
            success: function(data){

            }
        })
    }
})