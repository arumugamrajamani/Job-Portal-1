<div class="chat">
    <div class="chat-name">
        <?php 
            if ($link == 'new-message') {
                echo "<h3>New Message</h3><span></span>";
            } 
            else {
                echo '<h3>Full Name</h3><span class="status-dot"></span>';
            }
        ?>
    </div>
    <div class="chat-body">
        <div class="chat-content">
            <div class="to-message <?php if ($link == 'new-message') echo 'new-message'; ?>">
                <label for="">To: </label>
                <input type="text" name="" id="" placeholder="Search a name">
            </div>
            <div class="chatbox outgoing <?php if ($link == 'new-message') echo 'new-message'; ?>">
                <div class="details">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, qui. 
                        Quisquam, aut necessitatibus. Asperiores eum debitis minima atque molestiae 
                        repudiandae veniam! Soluta quis enim necessitatibus sequi, accusamus numquam 
                        fuga voluptates!
                    </p>
                </div>
            </div>
            <div class="chatbox incoming <?php if ($link == 'new-message') echo 'new-message'; ?>">
                <img src="../image/back-end1.jpg" alt="">
                <div class="details">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, qui. 
                        Quisquam, aut necessitatibus. Asperiores eum debitis minima atque molestiae 
                        repudiandae veniam! Soluta quis enim necessitatibus sequi, accusamus numquam 
                        fuga voluptates!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="chat-input">
        <div class="accept-delete-con">
            <div class="button-con-accept-delete">
                <button class="accept-delete">Delete</button>
            </div>
            <div class="button-con-accept-delete">
                <button class="accept-delete">Accept</button>
            </div>
        </div>
    </div> -->
    <div class="chat-input">
        <form action="" class="typing-area">
            <button class="icon-button outside-btn"><i class="fas fa-file-image"></i></button>
            <button class="icon-button outside-btn"><i class="fas fa-paperclip"></i></button>
            <div class="input-con">
                <textarea name="" id="type-text" cols="30" rows="10" placeholder="Aa"></textarea>
                <button class="icon-button"><i class="fas fa-smile"></i></button>
            </div>
            <button class="send-button"><i class="fas fa-paper-plane"></i></button>
        </form>
    </div>
</div>