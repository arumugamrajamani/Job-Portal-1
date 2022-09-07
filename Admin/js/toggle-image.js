$(document).ready(function() {
    let trans = () => {
        document.documentElement.classList.add('transition');
        window.setTimeout(() => {
            document.documentElement.classList.remove('transition')
        }, 1000)
    }

    $('input[name=theme]').change(function() {
        if (this.checked) {
            trans();
            $(document.documentElement).attr('data-theme', 'dark')
        } else {
            trans();
            $(document.documentElement).attr('data-theme', 'light')
        }
    });
});

function toggleImage() {
    imgsrc = document.getElementById("homie").src;
    if (imgsrc.indexOf("image/Vector1.png") != -1) {
        document.getElementById("homie").src = "image/vector.png";
    } else {
        document.getElementById("homie").src = "image/Vector1.png";
    }

    imgsrc = document.getElementById("logo").src;
    if (imgsrc.indexOf("image/light-logo.png") != -1) {
        document.getElementById("logo").src = "image/Techployment (7) 1.png";
    } else {
        document.getElementById("logo").src = "image/light-logo.png";
    }

    imgsrc = document.getElementById("dash").src;
    if (imgsrc.indexOf("image/Vector1.png") != -1) {
        document.getElementById("dash").src = "image/vector.png";
    } else {
        document.getElementById("dash").src = "image/Vector1.png";
    }

    imgsrc = document.getElementById("emp").src;
    if (imgsrc.indexOf("image/employers.png") != -1) {
        document.getElementById("emp").src = "image/employee2.png";
    } else {
        document.getElementById("emp").src = "image/employers.png";
    }

    imgsrc = document.getElementById("job").src;
    if (imgsrc.indexOf("image/jobseeker.png") != -1) {
        document.getElementById("job").src = "image/job-search1.png";
    } else {
        document.getElementById("job").src = "image/jobseeker.png";
    }
    
    imgsrc = document.getElementById("post").src;
    if (imgsrc.indexOf("image/jobpost.png") != -1) {
        document.getElementById("post").src = "image/job-post2.png";
    } else {
        document.getElementById("post").src = "image/jobpost.png";
    }
    
    imgsrc = document.getElementById("cate").src;
    if (imgsrc.indexOf("image/jobcategory.png") != -1) {
        document.getElementById("cate").src = "image/completed-task1.png";
    } else {
        document.getElementById("cate").src = "image/jobcategory.png";
    }
    
    imgsrc = document.getElementById("sett").src;
    if (imgsrc.indexOf("image/profilesetting.png") != -1) {
        document.getElementById("sett").src = "image/user-profile1.png";
    } else {
        document.getElementById("sett").src = "image/profilesetting.png";
    }
    imgsrc = document.getElementById("recycle").src;
    if (imgsrc.indexOf("image/recycle-bin.png") != -1) {
        document.getElementById("recycle").src = "image/recycle-bin2.png";
    } else {
        document.getElementById("recycle").src = "image/recycle-bin.png";
    }
}