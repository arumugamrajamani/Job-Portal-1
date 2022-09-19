toggle_slider.onclick = function() {
    document.body.classList.toggle("dark-theme")
}

function toggleImage() {
    imgsrc= document.getElementById("logo").src;
    if (imgsrc.indexOf("image/light-logo.png") !=-1){
        document.getElementById("logo").src = "image/Techployment (7) 1.png";
    }
    else{
        document.getElementById("logo").src = "image/light-logo.png";
    }
}