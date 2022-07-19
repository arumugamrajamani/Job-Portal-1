function openNav() {
    document.getElementById("mySidebar").style.left = "0";
    document.getElementById("main").style.marginLeft = "10px";
}

function closeNav() {
    document.getElementById("mySidebar").style.left = "-100%";
    document.getElementById("main").style.marginLeft = "-170px";
}

 $.ajax({
        url: "php/dashboard.inc.php",
        type: "POST",
        data:{
            getCategory: true
        },
        dataType: "JSON",
        success: function (data) {
            //array to store the values needed for the chart
            new Array(values = []);
            values.push(data.virtual);
            values.push(data.web);
            values.push(data.graphic);
            values.push(data.projMnmt);
            values.push(data.count);
            values.push(data.low);
            // code for the job categories chart
            //labels of the chart
            var xValues = ["Virtual Assistant", "Web Development", "Graphic and Multimedia", "Project Management"];
            //colors
            var barColors = ["#50677B", "#372732", "#000000", " #EDBEA4",];
            //chart configuration
            new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: values
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "Job Categories Number"
                }
            }
        });
    }
 });

$.ajax({
    url: "php/dashboard.inc.php",
    type: "POST",
    data:{
        getJobs: true
    },
    dataType: "JSON",
    success: function (data) {
        //array to store the values needed for the chart
        new Array(val = []);
        val.push(data.active);
        val.push(data.inactive);
        val.push(data.count);
        val.push(data.low);
        // code for the active and inactive job chart
        //labels of the chart
        var xValues = ["ACTIVE", "INACTIVE",];
        //colors
        var barColors = ["#50677B", "#372732",];
        //chart configuration
        new Chart("myChart1", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: val
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                }
            }
        });
    }
});
$(document).ready(function () {


});



