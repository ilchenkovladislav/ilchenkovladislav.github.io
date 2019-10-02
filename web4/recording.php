<?php 
    $title = "Запись к нам - «Бородинский»";
    $styles = array("./css/normalize.css", "./css/style.min.css", "https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=cyrillic");
    require "header.php";
?>

<main class="page-main">
        <h1 class="visually-hidden">Барбершоп Бородинский, запись на стрижку</h1>
        <section class="form-register">
            
            <div class="form-register__wrapper">
                <div class="form-register__first-row">
                    <h2 class="form-register__tittle">Запись на стрижку</h2>
                    <a class="button form-register__href-main" href="index.html">На главную</a>
                </div>
                <form class="form-register__form" action="validation.php" method="post">
                    <fieldset>
                        <legend class="visually-hidden">Фамилия Имя Отчество</legend>

                        <div class="form-register__group-name">
                            <label class="visually-hidden" for="second-name">Фамилия</label>
                            <input class="form-register__input" id="second-name" type="text" placeholder="Фамилия">

                            <label class="visually-hidden" for="first-name">Имя</label>
                            <input class="form-register__input" id="first-name" type="text" placeholder="Имя">

                            <label class="visually-hidden" for="third-name">Отчество</label>
                            <input class="form-register__input" id="third-name" type="text" placeholder="Отчество">
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="form-register__group-contacts">
                            <label class="visually-hidden" for="phone">Контактный телефон</label>
                            <input class="form-register__input" id="phone" type="tel" placeholder="Контактный телефон">
                            <label class="visually-hidden" for="email">Контактный e-mail</label>
                            <input class="form-register__input" id="email" placeholder="Контактный e-mail">
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
                    <button class="button form-register__submit" type="submit">Отправить заявку</button>
                </form>
            </div>
        </section>
    </main>
<?php require "footer.php" ?>