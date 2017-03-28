<?php
    $ACTIVE_MENU = "home";
    $ACTIVE_PAGE_TITLE= "";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "blocks/head.php";
    ?>
    <script type="text/javascript" language="javascript">
        $(function(){
            $('#sub_form').submit(function(e){
                e.preventDefault();
                var m_method=$(this).attr('method');
                var m_action=$(this).attr('action');
                var m_data=$(this).serialize();
                $.ajax({
                    type: m_method,
                    url: m_action,
                    data: m_data,
                    success: function(result){
                        $('#myModal').modal('show');
                    }
                });
            });
        });
    </script>
</head>
<body>
    <?php
        include "blocks/menu.php";
    ?>
    <?php
        include "blocks/logo.php";
    ?>
    <div class="header">
        <div class="container">
            <div class="row headercontent"><p>
                <span class="header-text1">РЕСПУБЛИКАНСКИЙ СОЦИАЛЬНЫЙ<br/>КЕЙС ЧЕМПИОНАТ</span><br />
                <span class="header-text2">SOCIAL CASE<br />
                championships CUP KAZAN 2017</span></p>
            </div>
            <div class="row header-row">
                <div class="col-6">
                    <p class="header-text3">УСПЕЙ НАЧАТЬ   СВОЙ   ПУТЬ ОТ   СТУДЕНТА К  РУКОВОДИТЕЛЮ ОРГАНОВ ВЛАСТИ ИЛИ КОМПАНИЙ</p>
                    <script src="http://megatimer.ru/s/5fa9fb430f359e14b25ec4cee6d3dbc4.js"></script>
                    <p class="header-text4">До конца регистрации осталось</p>
                </div>
                <div class="col-6 header-buttonup">
                    <div class="row">
                        <a href="/kejs-chempionat" target="_blank" class="header-button header-button1">Подробнее</a>
                    </div>
                    <div class="row">
                        <a href="/registraciya" target="_blank" class="header-button header-button2">Зарегистрироваться</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="sayaboutus">
        <div class="container">
            <div class="row">
                <p class="sayaboutus-text1">О Лиге Бизнес-Кейсов РТ<br />Говорят и Пишут</p>
                <a href="http://expertrt.ru/buisness/2556-ot-stazhera-do-predprinimatelya-kak-najti-vysokooplachivaemuyu-rabotu-v-krizis.html" target="_blank"><img class="sayaboutus-img1" src="/img/expert.png" alt=""></a>
                <a href="https://www.youtube.com/watch?v=6Akar-cv8-k&feature=youtu.be" target="_blank"><img class="sayaboutus-img1" src="/img/efir.png" alt=""></a>
                <a href="https://www.youtube.com/watch?v=sVJPlZ2Rb1Y&feature=youtu.be" target="_blank"><img class="sayaboutus-img1" src="/img/univer.png" alt=""></a>
                <a href="http://newspaper.kpfu.ru/blogs/obo-vsem-ponemnogu/news-biznes-ne-po-uchebnikam" target="_blank"><img class="sayaboutus-img2" src="/img/kpfu.png" alt=""></a>
            </div>
        </div>
    </div>
    <div class="command">
        <div class="container">
            <p class="command-text1"><span class="command-text2">Команда</span><br/><span class="command-text3">Более 50</span> лучших организаторов (и число растет)</p>
            <div class="row command-imgup">
                <div class="col-6">
                    <div class="command-img command-img1">
                        <a href="https://vk.com/i6789" target="_blank">
                            <div class="command-info">
                                <p class="command-text4">Ислам</p>
                                <p class="command-text5">Основатель клуба,<br />руководитель студенческого<br />научного общества.</p>
                            </div>
                            <img src="/img/command1.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-0"></div>
                <div class="col-6">
                    <div class="command-img">
                        <a href="https://vk.com/nekrooz" target="_blank">
                            <div class="command-info">
                                <p class="command-text4">Некруз</p>
                                <p class="command-text5">Арт-Директор</p>
                            </div>
                            <img src="/img/command3.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <hr class="command-button-hr">
                    <div class="command-buttonup">
                        <a href="/people" class="command-button">ПОДРОБНЕЕ</a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="command-hr">
    </div>
    <div class="news">
        <div class="container">
            <?php 
                if($_SESSION["level_user"] === 1){ 
                    print ("
                    <div class='row'>
                        <a class='news-add-button' href='subs.php'>Подписчики</a>
                    </div>"); 
                } 
            ?>
            <p class="news-text1"><span class="news-text2">Подпишитесь на наши новости</span><br />
            и будьте первыми в курсе всех событий в мире<br />
            бизнес-кейсов Республики Татарстан 
            </p>
            <div class="row">
                <form class="news-form" method="POST" action="index-model.php" id="sub_form">
                    <div class="form-group">
                        <input type="text" name="name" class="news-input" placeholder="Введите Ваше имя" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="news-input" placeholder="Введите Ваш e-mail" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="tel" class="news-input" placeholder="Введите Ваш номер телефона" required>
                    </div>
                    <div class="row">
                        <input type="submit" name="submit" class="news-button" value="ПОДПИСАТЬСЯ">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <p class="modal-sub">Спасибо за подписку!</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>
    <?php
        include "blocks/footer.php";
    ?>
</body>
</html>