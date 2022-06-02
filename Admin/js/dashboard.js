function openNav() {
    document.getElementById("mySidebar").style.left = "0";
    document.getElementById("main").style.marginLeft = "10px";
}

function closeNav() {
    document.getElementById("mySidebar").style.left = "-100%";
    document.getElementById("main").style.marginLeft= "-170px";
}

// Code for the dashboard charts
var xValues = ["Virtual Assistant", "Web Development", "Graphic and Multimedia", "Project Management",];
var yValues = [500, 400, 300, 200, 100];
var barColors = ["#50677B","#372732", "#000000"," #EDBEA4",];

new Chart("myChart", {
    type: "bar",
    data: {
    labels: xValues,
    datasets: [{
        backgroundColor: barColors,
        data: yValues
    }]
    },
    options: {
    legend: {display: false},
    title: {
        display: true,
        text: "Job Categories Number"
    }
    }
});


var xValues = ["ACTIVE", "INACTIVE", ];
var yValues = [500, 400, 300, 200, 100];
var barColors = ["#50677B","#372732",];

new Chart("myChart1", {
    type: "bar",
    data: {
    labels: xValues,
    datasets: [{
        backgroundColor: barColors,
        data: yValues
    }]
    },
    options: {
    legend: {display: false},
    title: {
        display: true,
    }
    }
});


