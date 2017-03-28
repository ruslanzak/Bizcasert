<?php
    $ACTIVE_MENU = "proekty";
    $ACTIVE_PAGE_TITLE= "Проекты";
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
                <span class="header-text1">РЕСПУБЛИКАНСКИЙ КЕЙС ЧЕМПИОНАТ</span><br />
                <span class="header-text2 header-proekty-text2">BUSINESS-CASE<br />
                championships CUP KAZAN</span></p>
            </div>
            <div class="row header-row">
                <div class="col-6">
                    <p class="header-text3">УСПЕЙ НАЧАТЬ   СВОЙ   ПУТЬ ОТ   СТУДЕНТА К  СЕО<br />КРУПНЕЙШЕЙ КОМПАНИИ ИЛИ ПРЕДПРИНИМАТЕЛЮ</p>
                    <script src="http://megatimer.ru/s/c854a514bcaded8879dda2ecfc3bd375.js"></script>
                    <p class="header-text4">До конца регистрации осталось</p>
                </div>
                <div class="col-6 header-buttonup">
                    <a href="/rezultaty" target="_blank" class="header-button header-button-proekty">Результаты</a>
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
                    <p>Ты в разы повышаешь свои шансы на работу в лучших компаниях РТ</p>
                </div>
            </div>
            <p class="steps-text2">ЭТАПЫ ЧЕМПИОНАТА</p>
            <div class="row">
                <div class="col-4 steps-img1">
                    <img src="/img/steps-img1.png" alt="">
                    <p class="steps-text31">1 этап - формирование команды и регистрация на сайте до 12 апреля.</p>
                </div>
                <div class="col-4 steps-img2">
                    <img src="/img/steps-img2.png" alt="">
                    <p class="steps-text32">2 этап - онлайн решение кейса, оформление на слайдах и отправка на почту до 19 апреля.</p>
                </div>
                <div class="col-4 steps-img3">
                    <img src="/img/steps-img3.png" alt="">
                    <p class="steps-text33">3 этап - презентация решения кейса перед представителями компаний 21 апреля в It-park.</p>
                </div>
            </div>
        </div>    
    </div>
    <div class="participate">
        <div class="container">
            <div class="row participate-header">
                <img class="participate-item1" src="/img/participate-img1.png" alt="">
                <p class="participate-item1 participate-text1">КАК ПРИНЯТЬ УЧАСТИЕ?</p>
            </div>
            <div class="row participate-items">
                <div class="col-11 offset-1">
                    <p class="participate-text2"><span class="participate-numbers">1</span>Собери и зарегистрируй команду из 4 человек</p>
                    <ul class="participate-dot">
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col-11 offset-1">
                    <p class="participate-text2"><span class="participate-numbers">2</span>Реши кейс и стань лучшим</p>
                    <ul class="participate-dot">
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col-11 offset-1">
                    <p class="participate-text2"><span class="participate-numbers">3</span>Получи приглашение на  финал</p>
                </div>
                <a href="/registraciya" target="_blank" class="participate-button">Зарегистрироваться</a>
            </div>
        </div>
    </div>
    <div class="proekty-partners">
        <div class="container">
            <p class="proekty-partners-text">Генеральные партнёры</p>

            <a href="https://xn--5-7sbamtgf4aex7b0b.xn--p1ai/hr.php"><img class="proekty-partners-img" src="/img/proekty-partners-img5.png" alt=""></a>

            <a href="http://forumtatarstan.ru/"><img class="proekty-partners-img" src="/img/proekty-partners-img2.png" alt=""></a>

            <p class="proekty-partners-text">Официальные партнёры</p>

            <a href="http://xn----dtbhaacat8bfloi8h.xn--p1ai/"><img class="proekty-partners-img" src="/img/proekty-partners-img6.png" alt=""></a>

            <a href="http://itpark-kazan.ru/"><img class="proekty-partners-img" src="/img/proekty-partners-img4.png" alt=""></a>
        </div>
    </div>
    
    <?php
        include "../blocks/footer.php";
    ?>
</body>
</html>