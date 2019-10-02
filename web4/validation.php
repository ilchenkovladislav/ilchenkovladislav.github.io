<?php 
    $nameRegExp = "/[а-яА-Я]{2,}/";
    $phoneRegExp = "/[+][0-9]{11}/";
    $emailRegExp = "/[a-zA-Z][a-zA-Z0-9]{2,}[@][a-zA-Z]{2,}[.][a-zA-Z]{2,}/";

    if (isset($_POST['btn_ok'])) { // если была нажата кнопка "Отправить"
        $err = array();
        if (!preg_match($nameRegExp, $_POST['firstname'])) {
            // сохраняем ошибку в переменную
            $err['firstname'] = 'Введено некорректное имя';
        }
        
        if (!preg_match($nameRegExp, $_POST['secondname'])) {
            // сохраняем ошибку в переменную
            $err['secondname'] = 'Введена некорректная фамилия';
        }

        if (!preg_match($nameRegExp, $_POST['thirdname'])) {
            // сохраняем ошибку в переменную
            $err['thirdname'] = 'Введено некорректное отчество';
        }

        if (!preg_match($phoneRegExp, $_POST['phone'])) {
            // сохраняем ошибку в переменную
            $err['phone'] = 'Введен некорректный номер телефона';
        }

        if (!preg_match($emailRegExp, $_POST['email'])) {
            // сохраняем ошибку в переменную
            $err['email'] = 'Введен некорректный email';
        }

        if (preg_match($nameRegExp, $_POST['firstname']) && preg_match($nameRegExp, $_POST['secondname']) && preg_match($nameRegExp, $_POST['thirdname']) && preg_match($phoneRegExp, $_POST['phone']) && preg_match($emailRegExp, $_POST['email'])) {
            header('Location: '.$_SERVER['PHP_SELF'].'?message=ok');
        }
    }

    $title = "Запись на стрижку";
    $styles = array("./css/normalize.css", "./css/style.min.css", "https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=cyrillic");
    require 'header.php';

    
?>

<main class="page-main">
        <h1 class="visually-hidden">Барбершоп Бородинский, запись на стрижку</h1>
        <section class="form-register">
        <?php
            if (isset($_GET['message']) && $_GET['message'] == 'ok') // если был редирект с сообщением OK
            echo '<p style="background-color: lightgreen; color: green; padding: 10px">Сообщение отправлено</p>';
            // выводим ошибку если она есть
            if (isset($err['firstname'])) echo '<p style="color: red;">'.$err['firstname'].'</p>';
            if (isset($err['secondname'])) echo '<p style="color: red;">'.$err['secondname'].'</p>';
            if (isset($err['thirdname'])) echo '<p style="color: red;">'.$err['thirdname'].'</p>';
            if (isset($err['email'])) echo '<p style="color: red;">'.$err['email'].'</p>';
            if (isset($err['phone'])) echo '<p style="color: red;">'.$err['phone'].'</p>';
        ?>
            
            <div class="form-register__wrapper">
                <div class="form-register__first-row">
                    <h2 class="form-register__tittle">Запись на стрижку</h2>
                    <a class="button form-register__href-main" href="index.html">На главную</a>
                </div>
                <form class="form-register__form" action="<?=$_SERVER['PHP_SELF']?>" method="post">
                    <fieldset>
                        <legend class="visually-hidden">Фамилия Имя Отчество</legend>

                        <div class="form-register__group-name">
                            <label class="visually-hidden" for="second-name">Фамилия</label>
                            <input class="form-register__input" name="secondname" id="second-name" type="text" placeholder="Фамилия">

                            <label class="visually-hidden" for="first-name">Имя</label>
                            <input class="form-register__input" name="firstname" id="first-name" type="text" placeholder="Имя">

                            <label class="visually-hidden" for="third-name">Отчество</label>
                            <input class="form-register__input" name="thirdname" id="third-name" type="text" placeholder="Отчество">
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="form-register__group-contacts">
                            <label class="visually-hidden" for="phone">Контактный телефон</label>
                            <input class="form-register__input" name="phone" id="phone" type="tel" placeholder="Контактный телефон">
                            <label class="visually-hidden" for="email">Контактный e-mail</label>
                            <input class="form-register__input" name="email" id="email" placeholder="Контактный e-mail">
                        </div>
                    </fieldset>
                    <label class="visually-hidden" for="additional">Дополнительная информация для мастера</label>
                    <textarea class="form-register__input" id="additional" rows="5" placeholder="Доп. информация для мастера"></textarea>

                    <fieldset>
                        <legend class="form-register__group-tittle">Выберете модель бороды:</legend>
                        <div class="form-register__group-beard">
                            
                            <label class="form-register__radio">
                                <input type="radio" name="beards" value="адмирал">
                                адмирал
                            </label>

                            <label class="form-register__radio">
                                <input type="radio" name="beards" value="лесоруб">
                                лесоруб
                            </label>

                            <label class="form-register__radio">
                                <input type="radio" name="beards" value="полярник">
                                полярник
                            </label>

                            <label class="form-register__radio">
                                <input type="radio" name="beards" value="боярин">
                                боярин
                            </label>
                                
                            <label class="form-register__radio">
                                <input type="radio" name="beards" value="мудрец">
                                мудрец
                            </label>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend class="form-register__group-tittle">Дополнительные услуги:</legend>
                        <div class="form-register__group-services">
                                <label class="form-register__checkbox">
                                    <input type="checkbox" name="service1">
                                    Подкрасить бороду
                                </label>
                                <label class="form-register__checkbox">
                                    <input type="checkbox" name="service2">
                                    Причесать бороду
                                </label>
                                <label class="form-register__checkbox">
                                    <input type="checkbox" name="service3">
                                    Убрать седину
                                </label>
                                <label class="form-register__checkbox">
                                    <input type="checkbox" name="service4">
                                    Накрутить усы
                                </label>
                                <label class="form-register__checkbox">
                                    <input type="checkbox" name="service5">
                                    Подровнять виски
                                </label>
                                <label class="form-register__checkbox">
                                    <input type="checkbox" name="service6">
                                    Отполировать лысину
                                </label>
                        </div>
                    </fieldset>
                    <button class="button form-register__submit" name="btn_ok" type="submit">Отправить заявку</button>
                </form>
            </div>
        </section>
    </main>

<?php require "footer.php" ?>