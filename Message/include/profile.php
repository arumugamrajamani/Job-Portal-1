<?php 
    $media_files = '';
    if ($link == 'media-files' || $link == 'chat.php' ||
        $link == 'archive' || $link == 'spam') {
            $media_files = 'active';
        }
?>
<div class="profile-con <?php echo $media_files; ?>">
    <div class="profile">
        <div class="profile-main">
            <img src="../image/home_section.png" alt="">
            <div class="personal-info">
                <p id="name">Full Name</p>
                <p id="position">Human Rresource Manager</p>
                <p id="company">Melham Construction Company</p>
                <div class="contact-info">
                    <h4>Contact Info:</h4>
                    <div class="email">
                        <p>Email:</p>
                        <span>example@gmail.com</span>      
                    </div>
                    <div class="mobile-no">
                        <p>Mobile No.:</p>
                        <span>09*********</span>
                    </div>
                </div>
            </div>
            <button class="media-collapse">Media and Files <i class="fas fa-angle-right angle-right"></i></button>
            <div class="media-files">
                <div class="media-section">
                    <a href="chat.php?media">
                        <i class="fas fa-file-image"></i>
                        <span>Media</span>
                    </a>
                </div>
                <div class="media-section">
                    <a href="chat.php?files">
                        <i class="fas fa-file-alt"></i>
                        <span>Files</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="profile-con <?php if ($link == 'media' || $link == 'files') echo 'active'; ?>">
    <div class="profile">
        <div class="profile-header">
            <a href="chat.php?media-files">
                <i class="fas fa-long-arrow-alt-left"></i>
            </a>
            <h4>Media and Files</h4>
        </div>
        <div class="profile-body">
            <div class="body-header">
                <div class="media-button img-button <?php if ($link == 'media') echo 'active'; ?>">
                    Media
                    <span class="underline"></span>
                </div>
                <div class="media-button files-button <?php if ($link == 'files') echo 'active'; ?>">
                    Files
                    <span class="underline"></span>
                </div>
            </div>
            <div class="media-files files-con <?php if ($link == 'files') echo 'active'; ?>">
                <div class="files">
                    <i class="fas fa-file-alt"></i>
                    <span>file.docx</span>
                </div>
                <div class="files">
                    <i class="fas fa-file-alt"></i>
                    <span>example.pdf</span>
                </div>
            </div>
            <div class="media-files img-con <?php if ($link == 'media') echo 'active'; ?>">
                <div class="img-files">
                    <img src="../image/bg4.jpg" alt="" >
                    <img src="../image/flogo.png" alt="" >
                    <img src="../image/worker.png" alt="" >
                    <img src="../image/webdes1.jpg" alt="" >
                    <img src="../image/flogo.png" alt="" >
                    <img src="../image/webdes4.jpg" alt="" >
                </div>
            </div>
        </div>
    </div>
</div>