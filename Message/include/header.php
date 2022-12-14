<?php
    $page = substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'],'/')+1);
    $pageArray = explode('?', $page); //convert string into array with explode
    $index = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],'/')+1);
    
    $link = '';
    if ($page == '' || $page ==  $pageArray[0] || $pageArray[1] == '') $link = $pageArray[0];
    else {
        $link = $pageArray[1];
    }
    // echo $link;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jquery, fontawesome, charts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&family=Open+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- created style -->
    <link rel="stylesheet" href="css/style.css">

    <?php 
        
    ?>
    <title>Employers | Chat</title>
</head>