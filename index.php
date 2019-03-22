<?php
require __DIR__ . '/header.php';
require __DIR__ . '/left-sidebar.php';
?>

<div class = "main">
    <div class = "main-content">
        <div class = "row">
            <iframe width="1280px" height="720px" 
            src="https://vclock.kr/embed/time/#theme=0&ampm=1&showdate=1" 
            frameborder="0" allowfullscreen>
            </iframe>
            <div class = "next-row-button">
                <button type = "button">=></button>
            </div>
        </div>
    </div>
</div>

<?php
require __DIR__ . '/footer.php';
?>