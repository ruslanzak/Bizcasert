<?php
    $ACTIVE_MENU = "news";
    $ACTIVE_PAGE_TITLE= "Журнал";
?>
<?php
    session_start();
    include("models.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "../blocks/head.php";
    ?>
    <script type="text/javascript">
    $(document).ready(function(){
       $("#imgLoad").hide();  //Скрываем прелоадер
        $("#load div").show();
    });
    var num = 10; //чтобы знать с какой записи вытаскивать данные
    $(function() {
       $("#load div").click(function(){ //Выполняем если по кнопке кликнули
       $("#load div").hide();
       $("#imgLoad").show(); //Показываем прелоадер
       $.ajax({
              url: "action.php",
              type: "GET",
              data: {"num": num},
              cache: false,
              success: 
           
                function(response){
                  if(response == 0){  // смотрим ответ от сервера и выполняем соответствующее действие
                     alert("Больше нет записей");
                     $("#imgLoad").hide();
                      $("#load div").show();
                  }else{
                     $("#content").append(response);
                     num = num + 5;
                     $("#imgLoad").hide();
                      $("#load div").show();
                  }
               }
            });
        });
    });
</script>
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
        <div class="row">
            <div class="col-8">
               
            
                <?php 
                if($_SESSION["level_user"] === 1){ 
                    print ("
                    <div class='row'>
                        <a class='news-add-button' href='../editor/index.php?action=add'>Добавить новость</a>
                    </div>"); 
                } 
                ?>
                
                
                <div class="container">
                    <div class="row">
                        <div class="elements-gride" id="content">
                            <?php foreach ($news as $a): ?>
                                <div class="news-item-up element-item persent-size">
                                    <div class="news-item">

                                    <?php 
                                    if($_SESSION["level_user"] === 1){ ?>
                                        <a href="../editor/index.php?action=edit&id=<?=$a["id"]?>"><span class="glyphicon glyphicon-pencil newsglyp1"></span></a>
                                        <a onclick ="return confirm('Удалить?')" href="index.php?action=delete&id=<?=$a["id"]?>"><span class="glyphicon glyphicon-remove newsglyp2"></span></a>
                                    <?php } ?>

                                        <a href="post.php?id=<?=$a["id"]?>" class="news-item-text1"><?=$a["title"]?></a>
                                        <p class="news-item-text2"><?=$a["date"]?></p>
                                        <img class="news-item-img" src="/editor/<?=$a["img"]?>" alt="">
                                        <p class="news-item-text3"><?=$a["hashtag"]?></p>
                                        <p class="news-item-text4"><?php
                                            if(strlen($a["text"]) > 100){
                                                print(mb_substr($a["text"],0,100, 'UTF-8'));
                                                print("...");
                                            }
                                            if(strlen($a["text"]) <= 100 & strlen($a["text"]) != 0){
                                                print($a["text"]);
                                            }
                                            ?>
                                        </p>
                                        <div class="row">
                                            <a class="news-item-button" href="post.php?id=<?=$a["id"]?>">Читать дальше</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>

                        </div>
                    </div>
                    <div class="row">
                        <div id="load">
                            <div>Загрузить еще</div>
                            <img src="loading.gif" id="imgLoad">
                        </div>
                    </div>
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