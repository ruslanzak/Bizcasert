<?php
    $ACTIVE_MENU = "careers";
    $ACTIVE_PAGE_TITLE= "Вакансии";
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
    <div class="careers">
        <div class="container padding30">
            <p class="careers-text1">Вакансии</p>
            <p class="careers-text2">Карьера начинается здесь</p>
            <p class="careers-text3">Любой желающий может подать заявку, чтобы сотрудничать с нами.<br />Есть три вариант: Партнёр, стажёр, помощники! </p>
            <div class="row">
                <div class="col-6"></div>
                <div class="col-6">
                    <hr class="o-nas-button-hr">
                    <div class="o-nas-buttonup">
                        <a href="/o-nas" class="o-nas-button">ПОДРОБНЕЕ</a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="o-nas-hr">
        <div class="container">
            <div class="col-12">
                <img class="careers-img" src="/img/careers-img.png" alt="">
                <div class="row padding">
                    <div class="col-4">
                        <p class="careers-vac-text1">Партнеры</p>
                        <p class="careers-vac-text2">Все кто желает сотрудничать с нами прошу написать руководителю клуба. Или просто оставить заявку!</p>
                    </div>
                    <div class="col-4">
                        <p class="careers-vac-text1">Студенты / Стажеры</p>
                        <p class="careers-vac-text2">Всем желающим мы предоставляем возмоность вступить в команду победителей! Заполни заявку и начни свой путь от студента до СЕО крупнейшей компании.</p>
                    </div>
                    <div class="col-4">
                        <p class="careers-vac-text1">Помощники</p>
                        <p class="careers-vac-text2">Если Вы желаете оставить свой след в нашем проекте. Мы всегда будем рады Вам!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <?php
        include "../blocks/footer.php";
    ?>
</body>
</html>