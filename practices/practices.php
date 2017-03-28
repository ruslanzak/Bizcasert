<?php
    $ACTIVE_MENU = "practices";
    $ACTIVE_PAGE_TITLE= "Мероприятия";
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
    <p class="practices-text1">Кейс чемпионаты и турниры</p>
    <?php 
        if($_SESSION["level_user"] === 1){ 
            print ("
            <div class='container'>
                <div class='row'>
                    <a class='news-add-button' href='edit.php?action=add'>Добавить кейс</a>
                </div>
            </div>"); 
        } 
    ?>
    <?php
        $last_key = array_pop($practites);
        foreach ($practites as $a): ?>
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <p class="practices-text2"><?=$a['title']?></p>
                    <center class="practices-button-up">
                        <a class="practices-button" href="<?=$a['url']?>">ПЕРЕЙТИ К ЧЕМПИОНАТУ</a>
                    </center>
                </div>
                <div class="col-5">
                   <?php if($_SESSION["level_user"] === 1){ ?>
                        <a href="edit.php?action=edit&id=<?=$a['id']?>"><span class="glyphicon glyphicon-pencil newsglyp1"></span></a>
                        <a onclick ="return confirm('Удалить?')" href="index.php?action=delete&id=<?=$a['id']?>"><span class="glyphicon glyphicon-remove newsglyp2"></span></a>
                    <?php } ?>
                    <img src="/practices/<?=$a['img']?>" alt="">
                </div>
            </div>
        </div>
        <hr class="practices-hr">
    <?php endforeach ?>
    
    <div class="container">
        <div class="row">
            <div class="col-7">
                <p class="practices-text2"><?=$last_key['title']?></p>
                <center class="practices-button-up">
                    <a class="practices-button" href="<?=$last_key['url']?>">ПЕРЕЙТИ К ЧЕМПИОНАТУ</a>
                </center>
            </div>
            <div class="col-5">
                <?php if($_SESSION["level_user"] === 1){ ?>
                    <a href="edit.php?action=edit&id=<?=$last_key['id']?>"><span class="glyphicon glyphicon-pencil newsglyp1"></span></a>
                    <a onclick ="return confirm('Удалить?')" href="index.php?action=delete&id=<?=$last_key['id']?>"><span class="glyphicon glyphicon-remove newsglyp2"></span></a>
                <?php } ?>
                <img src="/practices/<?=$last_key['img']?>" alt="">
            </div>
        </div>
    </div>
    
    
    
    
    <?php
        include "../blocks/footer.php";
    ?>
</body>
</html>