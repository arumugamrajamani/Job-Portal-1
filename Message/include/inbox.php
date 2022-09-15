<div class="inbox">
    <div class="inbox-header">
        <div class="inbox-title">
            <?php 
                if ($link == 'archive') echo '<h3>ARCHIVE</h3>';
                else if ($link == 'spam') echo '<h3>SPAM</h3>';
                else echo '<h3>MESSAGE</h3>';
            ?>
            <div class="option">
                <a href="?new-message"><i class="fas fa-edit"></i></a>
                <i class="fas fa-sliders-h"></i>
            </div>
            <div class="popup-archive-spam"> <!--class = show -->
                <div class="archive-popup ">
                    <a href="?archive">
                        <i class="fas fa-archive"></i>
                        <p>Archive</p>
                    </a>
                </div>
                <div class="spam-popup">
                    <a href="?spam">
                        <i class="fas fa-exclamation-triangle"></i>
                        <p>Spam</p>
                    </a>
                </div>
            </div>
        </div>
        <?php 
            if ($link == 'archive' || $link == 'spam') {
                echo <<<EOF
                    <div class="archived-spam">
                        <a href="$pageArray[0]">
                            <i class="fas fa-long-arrow-alt-left"></i>
                            <h4>Messages</h4>
                        </a>
                    </div>     
                EOF;
            } else {
                echo '
                <div class="search">
                    <input type="text" name="" id="" placeholder="Search messages">
                    <i class="fas fa-search"></i>
                </div>
                ';
            }
        ?>
    </div>
    <div class="inbox-body">
        <div class="individual-inbox">
            <div class="indiv-con">
                <img src="../image/flogo.png" height="40" width="40" alt="">
                <div class="holder">
                    <div class="indiv-name">Full Name</div>
                    <div class="partial-message">hello world of the world of the world from hellow</div>
                </div>
                <div class="message-time">7:47 pm</div>
            </div>
            <div class="inbox-hover-option">&#x2022;&#x2022;&#x2022;</div>
            <div class="popup-hover-option">  <!-- class = show -->
                <div class="mark-unread-popup">
                    <p>Mark as unread</p>
                </div>
                <div class="delete-chat-popup">
                    <p>Mark as spam</p>
                </div>
                <div class="archive-chat-popup">
                    <p>Archive chat</p>
                </div>
                <div class="delete-chat-popup">
                    <p>Delete chat</p>
                </div>
            </div>
        </div>
        <div class="individual-inbox">
            <div class="indiv-con">
                <img src="../image/flogo.png" height="40" width="40" alt="">
                <div class="holder">
                    <div class="indiv-name">Full Name</div>
                    <div class="partial-message">hello world of the world of the world from hellow</div>
                </div>
                <div class="message-time">7:47 pm</div>
            </div>
            <div class="inbox-hover-option">&#x2022;&#x2022;&#x2022;</div>
        </div>
    </div>
</div>