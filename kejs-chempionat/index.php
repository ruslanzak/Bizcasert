<?php
    $ACTIVE_MENU = "kejs-chempionat";
    $ACTIVE_PAGE_TITLE= "Кейс чемпионат";
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
                        <a href="/registraciya" target="_blank" class="header-button header-button2">Зарегистрироваться</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="steps">
        <div class="container steps-1">
            <div class="row">
                <img class="proekty-img1" src="/img/proekty-img1.png" alt="">
            </div>
            <div class="row steps-text1up">
                <div class="steps-text1">
                    <p>90% студентов неуспешны в построении карьеры</p>
                </div>
                <div class="steps-text1">
                    <p>Мы даём тебе уникальные знания во время кейс  мероприятий</p>
                </div>
                <div class="steps-text1">
                    <p>Ты получаешь практику во время кейс-чемпионата</p>
                </div>
                <div class="steps-text1">
                    <p>Ты в разы повышаешь свои шансы на работу в органах государственной власти или лучших компаниях РТ</p>
                </div>
            </div>
            <p class="steps-text2">ЭТАПЫ ЧЕМПИОНАТА</p>
            <div class="row">
                <div class="col-4 steps-img1">
                    <img src="/img/steps-img1.png" alt="">
                    <p class="steps-text31">1 этап - формирование команды и регистрация на сайте до 30 марта</p>
                </div>
                <div class="col-4 steps-img2">
                    <img src="/img/steps-img2.png" alt="">
                    <p class="steps-text32">2 этап - онлайн решение кейса, оформление на слайдах и отправка на почту до 12 апреля.</p>
                </div>
                <div class="col-4 steps-img3">
                    <img src="/img/steps-img3.png" alt="">
                    <p class="steps-text33">3 этап - презентация решения кейса перед представителями компаний и руководством Республики Татарстан 21 апреля в It-park.</p>
                </div>
            </div>
        </div>    
    </div>
    <?php
        include "../blocks/participate.php";
    ?>
    <div class="proekty-partners">
        <div class="container">
            <p class="proekty-partners-text">Генеральные партнёры в 2016 году</p>

            <a href="http://forumtatarstan.ru/#start"><img class="proekty-partners-img" src="/img/proekty-partners-img1.png" alt=""></a>

            <a href="http://forumtatarstan.ru/"><img class="proekty-partners-img" src="/img/proekty-partners-img2.png" alt=""></a>

            <p class="proekty-partners-text">Организатор</p>

            <a href="http://changellenge.com/"><img class="proekty-partners-img" src="/img/proekty-partners-img3.png" alt=""></a>

            <div class="row">
                <a href="/registraciya" target="_blank" class="participate-button">Зарегистрироваться</a>
            </div>
        </div>
    </div>
    <?php
        include "../blocks/footer.php";
    ?>
</body>
</html>