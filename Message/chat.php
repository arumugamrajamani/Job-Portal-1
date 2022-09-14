<?php include_once 'include/header.php'; ?>
<!-- change dark-themes to theme (for debugging purposes)-->
<body >
    <div class="container">
        <div class="message-container">
            <?php include_once 'include/inbox.php'; ?>
        </div>
        <div class="message-container">
            <?php include_once 'include/message.php'; ?>
        </div>
        <div class="message-container">
            <?php include_once 'include/profile.php'; ?>
        </div>
    </div>
    <div id="show-img-modal" class="modal">
        <span class="close-modal">&times;</span>
        <img class="modal-content" id="img-modal">
    </div>
    <script src="js/script.js"></script>
</body>
</html>