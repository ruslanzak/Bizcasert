<?php
    $ACTIVE_MENU = "news";
    $ACTIVE_PAGE_TITLE= "Журнал";
?>
<?php
    session_start();
    include("post_models.php");
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
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="news-post">
                    <p class="news-post-title"><?=$post['title']?></p>
                    <p class="news-post-date"><?=$post['date']?></p>
                    <p class="news-post-hashtags"><?=$post['hashtag']?></p>
                    <img class="news-post-img" src="/editor/<?=$post['img']?>" alt="">
                    <p class="news-post-text"><?=$post['text']?></p>
                </div>
            </div>
            <div class="col-4">
                <div class="news-right">
                    <p class="news-right-text1">Популярные посты</p>
                    <hr class="news-right-hr">
                    <div class="container carousel-up1">
                        <div id="my-pics1" class="carousel slide my-pics1" data-ride="carousel" style="width:300px;margin:auto;">
                            <div class="carousel-inner my-pics1-inner" role="listbox">
                                <div class="carousel-item active my-pics1-item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="my-pics1-item-img">
                                                <img class="my-pics1-img" src="/img/news/news-1.png" alt="Sunset over beach">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="my-pics1-text">
                                                <p class="my-pics1-text-1">Уникальный бесплатное образовательный проект «Бизнес класс»</p>    
                                                <p>08.07.2016</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item my-pics1-item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="my-pics1-item-img">
                                                <img class="my-pics1-img" src="/img/news/news-2.png" alt="Sunset over beach">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="my-pics1-text">
                                                <p class="my-pics1-text-1">Мастер-класс от основателя и генерального директора компании «Франчайзинг5»</p>
                                                <p>08.07.2016</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item my-pics1-item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="my-pics1-img">
                                                <img class="my-pics1-img" src="/img/news/news-3.png" alt="Sunset over beach">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="my-pics1-text">
                                                <p class="my-pics1-text-1">Тайм - менеджмент от международной компании EY</p>
                                                <p>08.07.2016</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item my-pics1-item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="my-pics1-item-img">
                                                <img class="my-pics1-img" src="/img/news/news-4.png" alt="Sunset over beach">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="my-pics1-text">
                                                <p class="my-pics1-text-1">Чему учат кейсы?</p>
                                                <p>08.07.2016</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item my-pics1-item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="my-pics1-item-img">
                                                <img class="my-pics1-img" src="/img/news/news-5.png" alt="Sunset over beach">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="my-pics1-text">
                                                <p class="my-pics1-text-1">Предложи свой кейс и получи решение</p>
                                                <p>08.07.2016</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#my-pics1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#my-pics1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <p class="news-right-text1">Свежие посты</p>
                    <hr class="news-right-hr">
                    
                    <?php foreach ($news as $a): ?>
                        <div class="row news-right-newpostsup">
                            <div class="col-3">
                                <img class="news-right-newposts-img" src="/editor/<?=$a['img']?>" alt="">
                            </div>
                            <div class="col-9">
                                <p class="news-right-newposts-text1"><?=$a['title']?></p>
                                <p class="news-right-newposts-text2"><?=$a['date']?></p>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    <?php
        include "../blocks/footer.php";
    ?>
</body>
</html>