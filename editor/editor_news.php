<?php
    if($_SESSION["level_user"] != 1){
        header("location: ../");
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
            Теги:<br/><input type="text" name="hashtag" value="<?=$item['hashtag']?>"><br/>
            Текст:<br/><textarea id="editor2" name="txt" cols="100" rows="20"><?=$item['text']?></textarea>
            <script type="text/javascript">
                var ckeditor2 = CKEDITOR.replace( 'editor2' );
                AjexFileManager.init({
                    returnTo: 'ckeditor',
                    editor: ckeditor2
                });
            </script><br/>
            Фото: <input type="file" name="fileToUpload" id="fileToUpload"><br /><br/>
            <input type="submit" value="Добавить статью" name="submit">
        </form>
    </div>
    
    
    
    
    
    <?php
        include "../blocks/footer.php";
    ?>
</body>
</html>