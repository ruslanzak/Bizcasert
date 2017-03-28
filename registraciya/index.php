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
    <div class="registraciya">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="container">
                        <p class="registraciya-title">SOCIAL CASE Championships CUP KAZAN</p>
                        <p class="registraciya-title2">Регистрация на чемпионат</p>
                        <hr>
                        <form action="registraciya-model.php" method="post">
                            <div class="row registraciya-form-row">
                                <div class="col-3">
                                    <p class="registraciya-form-textleft">1. Название команды Важно ответить на этот вопрос <span class="registraciya-form-star">*</span></p>
                                </div>
                                <div class="col-9">
                                    <input class="registraciya-form-input1" name="name" type="text" required>
                                </div>
                            </div>
                            <div class="row registraciya-form-row">
                                <div class="col-3">
                                    <p class="registraciya-form-textleft">2. Откуда Вы узнали о нас? <span class="registraciya-form-star">*</span></p>
                                </div>
                                <div class="col-9">
                                    <label class="registraciya-form-text1"><input class="registraciya-form-checkbox" type="checkbox" name="whence1" value="Рассылка">Рассылка</label><br />
                                    <label class="registraciya-form-text1"><input class="registraciya-form-checkbox" type="checkbox" name="whence2" value="Социальные сети">Социальные сети</label><br />
                                    <label class="registraciya-form-text1"><input class="registraciya-form-checkbox" type="checkbox" name="whence3" value="Плакаты в ВУЗах">Плакаты в ВУЗах</label><br />
                                    <label class="registraciya-form-text1"><input class="registraciya-form-checkbox" type="checkbox" name="whence4" value="Карьерные сайты">Карьерные сайты</label><br />
                                    <label class="registraciya-form-text1"><input class="registraciya-form-checkbox" type="checkbox" name="whence5" value="Друзья рассказали">Друзья рассказали</label><br />
                                    <label class="registraciya-form-text1"><input class="registraciya-form-checkbox" type="checkbox" name="whence6" value="Другое">Другое</label>
                                </div>
                            </div>
                            <div class="row registraciya-form-row">
                                <div class="col-3">
                                    <p class="registraciya-form-textleft">3. У вас полная команда? Важно ответить на этот вопрос <span class="registraciya-form-star">*</span></p>
                                </div>
                                <div class="col-9">
                                    <select name="command" class="registraciya-form-select" required>
                                        <option value="">--Пожалуйста, выберите--</option>
                                        <option value="4">все 4 участника</option>
                                        <option value="3">3 участника</option>
                                        <option value="2">2 участника</option>
                                        <option value="1">я один</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <input class="registraciya-form-submit" type="submit" value="Вперед">
                        </form>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
    
    
    <?php
        include "../blocks/footer.php";
    ?>
</body>
</html>