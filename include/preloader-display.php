<?php
    // Display the loader html code and js code
    echo " <div class='loader_bg'>
            <div class='loader'></div>
        </div>

        <script>
            setTimeout(function(){
                $('.loader_bg').fadeOut();
            }, 1500)
        </script>";
?>