<footer class="page-footer">
    <div class="page-footer__wrapper">
        <div class="page-footer__contacts contacts">
            <b class="contacts__name">Барбершоп Бородинский</b>
            <p class="contacts__address">г. Санкт-Петербург, ул. Большая Конюшенная 19/8</p>
            <a class="contacts__tel" href="tel:+78125556666">+7 (812) 555-66-66</a>
        </div>
        <div class="page-footer__social social">
            <p class="social__slogan">Давайте дружить!</p>
            <ul class="social__list">
                <li class="social__item"><a class="social__link social__link--vk" href="#">Вконтакте</a></li>
                <li class="social__item"><a class="social__link social__link--fb" href="#">Фейсбук</a></li>
                <li class="social__item"><a class="social__link social__link--inst" href="#">Инстаграмм</a></li>
            </ul>
        </div>
        <div class="page-footer__copyright copyright">
            <b class="copyright__text">Разработано:</b>
            <a class="copyright__link button" href="#">Ильченко Владислав</a>
        </div>
    </div>
</footer>

<div class="login-popup">
    <h2 class="login-popup__title">Личный кабинет</h2>
    <p class="login-popup__subtitle">Введите свой логин и пароль, чтобы войти</p>
    <form action="authorize.php" method="POST">
        <label class="login-popup__label">
            Логин
            <input class="login-popup__login" name="login" type="text" placeholder="Логин">
        </label>
        <label class="login-popup__label">
            Пароль
            <input class="login-popup__password" name="password" type="password" placeholder="Пароль">
        </label>
        <div class="login-popup__wrapper">
            <label class="login-popup__remember">
                <input class="login-popup__checkbox" type="checkbox">
                Запомните меня
            </label>
            <a class="login-popup__foggot" href="#">Я забыл пароль!</a>
        </div>
        <button class="login-popup__submit button" type="submit">Войти в личный кабинет</button>
    </form>
    <button class="login-popup__close">Закрыть форму</button>
</div>

<script src="js/main.js"></script>
<script src="js/carousel.js"></script>
</body>

</html>