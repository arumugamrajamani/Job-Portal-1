<?php include_once 'include/header.php'; ?>
<body>
    <div class="container">
        <?php include_once 'include/navbar.php'; ?>
        <div class="main-content">
            <main>
                <div class="main-chat-con">
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
            </main>
        </div>
    </div>
    <div id="show-img-modal" class="modal">
        <span class="close-modal">&times;</span>
        <img class="modal-content" id="img-modal">
    </div>

    <!-- <script type="module" src="js/chat.js"></script> -->
    <script type="module" src="js/script.js"></script>
</body>

</html>