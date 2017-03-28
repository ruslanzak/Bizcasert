<?php
    $ACTIVE_MENU = "tv";
    $ACTIVE_PAGE_TITLE= "ТВ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "../blocks/head.php";
    ?>
</head>
<body>
    <?php
        include "../blocks/menu.php";
    ?>
    <?php
        include "../blocks/logo.php";
    ?>
    <div class="tv">
        <div class="container">
            <p class="tv-text1">Интервью на телеканале ЭФИР</p>
            <div class="tv-video">
                <iframe src="https://www.youtube.com/embed/6Akar-cv8-k?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    
    
    
    <?php
        include "../blocks/footer.php";
    ?>
</body>
</html>