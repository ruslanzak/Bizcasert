<div class="container upper-menu">
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php if($ACTIVE_MENU == "home"){print("nav-link-active");} ?>" href="/">Главная</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if($ACTIVE_MENU == "proekty"){print("nav-link-active");} ?>" href="/proekty" role="button" aria-haspopup="true" aria-expanded="false">Проекты</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item <?php if($ACTIVE_MENU == "kejs-chempionat"){print("nav-link-active");} ?>" href="/kejs-chempionat">Кейс чемпионат</a>
                        <a class="dropdown-item <?php if($ACTIVE_MENU == "etapy-proekta"){print("nav-link-active");} ?>" href="/etapy-proekta">8 этапов</a>
                        <a class="dropdown-item <?php if($ACTIVE_MENU == "rezultaty"){print("nav-link-active");} ?>" href="/rezultaty">Результаты</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($ACTIVE_MENU == "news"){print("nav-link-active");} ?>" href="/news">Журнал</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($ACTIVE_MENU == "people"){print("nav-link-active");} ?>" href="/people">Команда</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if($ACTIVE_MENU == "practices"){print("nav-link-active");} ?>" href="/practices" role="button" aria-haspopup="true" aria-expanded="false">Мероприятния</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item <?php if($ACTIVE_MENU == "//////"){print("nav-link-active");} ?>" href="/vebinar">Вебинар</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if($ACTIVE_MENU == "o-nas"){print("nav-link-active");} ?>" href="/o-nas" role="button" aria-haspopup="true" aria-expanded="false">О нас</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item <?php if($ACTIVE_MENU == "careers"){print("nav-link-active");} ?>" href="/careers">Вакансии</a>
                        <a class="dropdown-item <?php if($ACTIVE_MENU == "tv"){print("nav-link-active");} ?>" href="/tv">Тв</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if($ACTIVE_MENU == "materialy"){print("nav-link-active");} ?>" href="/materialy">Материалы</a>
                </li>
            </ul>
        </div>
    </nav>
</div>