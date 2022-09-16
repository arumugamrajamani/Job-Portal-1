<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techployment</title>
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,455;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <!--JS CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JQuery CDN below -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Toast CDN for functionality of toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Toast CDN for design of toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/index.css">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example2">
    <div class="color-overlay">
        <?php include_once 'include/navbar.php'; ?>
    </div>
    
    <div class="color-overlay">
        <?php include_once 'include/Inside Job.php'; ?>
    </div>
    
    <script>
        var icon2 = document.getElementById("icon2")

        icon2.onclick = function() {
            document.body.classList.toggle("dark-theme");
        }

        function toggleImage() {
            imgsrc = document.getElementById("logos").src;
            if (imgsrc.indexOf("image/light-logo.png") != -1) {
                document.getElementById("logos").src = "image/Techployment (7) 1.png";
            } else {
                document.getElementById("logos").src = "image/light-logo.png";
            }
            imgsrc = document.getElementById("men").src;
            if (imgsrc.indexOf("/Landing-Page/image/icons8-menu-60.png") != -1) {
                document.getElementById("men").src = "/Landing-Page/image/selection.png";
            } else {
                document.getElementById("men").src = "/Landing-Page/image/icons8-menu-60.png";
            }
        }
    </script>

    <script src="js/faq.js"></script>
    <script src="js/contactus.js"></script>
    <script src="js/faqsearch.js"></script>
    <script src="js/system-info.js"></script>
</body>

</html>