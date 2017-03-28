<?php
    if($_SESSION["level_user"] != 1){
        header("location: /practices");
    }
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
    <div class="news-header">
        <div class="container">
            <p class="news-header-text1">Наш блог</p>
            <p class="news-header-text2">Новости и статьи</p>
            <hr class="news-header-hr">
        </div>
        <hr class="logo-hr">
    </div>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            Навание:<br/><input type="text" name="title" value="<?=$item['title']?>"><br/>
            Ссылка:<br/><input type="text" name="url" value="<?=$item['url']?>"><br/>
            Фото: <input type="file" name="fileToUpload" id="fileToUpload"><br /><br/>
            <input type="submit" value="Добавить статью" name="submit">
        </form>
    </div>
    
    
    
    
    
    <?php
        include "../blocks/footer.php";
    ?>
</body>
</html>