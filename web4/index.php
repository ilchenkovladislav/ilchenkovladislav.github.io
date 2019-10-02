<?php 
    $title = "Барбершоп - «Бородинский»";
    $styles = ["./css/normalize.css", "./css/style.min.css", "https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=cyrillic"];
    require_once "header.php";
?>

    <main class="page-main">
        <h1 class="visually-hidden">Барбершоп «Бородинский» – истинно мужская классика</h1>
        <section class="stats">
            <header class="stats__header">
                <h2 class="visually-hidden">Статистика Барбершопа</h2>
                <div class="stats__header-wrapper">
                    <b class="stats__tittle">Стрижка у нас<br>это выгодно!</b>
                    <p class="stats__text">Мужская стрижка требует точного подхода. Обратимся к статистике:</p>
                </div>
                <small class="stats__legend stats__legend--top">
                    <sup>*</sup> - приведенные данные ложь
                </small>
            </header>
            <table class="stats__list">
                <tbody>
                    <tr>
                        <td class="stats__value">1 500 <sup>*</sup></td>
                        <td class="stats__field">рублей<br> вложений</td>
                    </tr>
                    <tr>
                        <td class="stats__value">7 200</td>
                        <td class="stats__field">секунд<br> времени мастера</td>
                    </tr>
                    <tr>
                        <td class="stats__value">90 000</td>
                        <td class="stats__field">постриженных<br> волос</td>
                    </tr>
                    <tr>
                        <td class="stats__value">500 000 <sup>*</sup></td>
                        <td class="stats__field">лайков и<br> комплиментов</td>
                    </tr>
                </tbody>
            </table>
            <small class="stats__legend stats__legend--bottom">
                <sup>*</sup> - приведенные данные ложь
            </small>
        </section>

        <section class="advantages">
            <div class="slider advantages__wrapper">
                <!-- <h2 class="visually-hidden">Наши преимущества</h2> -->
                <ul class="slider__list advantages__list">
                    <li class="slider__item advantages__fast advantages__item">
                        <img class="advantages__image" src="./img/fast-icon.svg" alt="Работаем быстро" width="95" height="94">
                        <div class="advantages__wrapper-text">
                            <h3 class="advantages__tittle">Быстро</h3>
                            <p class="advantages__description">Мы делаем свою работу быстро! Два часа пролетят незаметно
                                и Вы - счастливый обладатель стильной стрижки-минутки</p>
                        </div>
                    </li>
                    <li class="slider__item advantages__cool advantages__item">
                        <img class="advantages__image" src="./img/cool-icon.svg" alt="Срегем круто" width="95" height="88">
                        <div class="advantages__wrapper-text">
                            <h3 class="advantages__tittle">Круто</h3>
                            <p class="advantages__description">Забудьте, как вы стриглись раньше. Мы сделаем из вас
                                звезду футбола или кино. Во всяком случае внешне.</p>
                        </div>
                    </li>
                    <li class="slider__item advantages__price advantages__item">
                        <img class="advantages__image" src="./img/price-icon.svg" alt="Работаем дорого" width="95" height="91">
                        <div class="advantages__wrapper-text">
                            <h3 class="advantages__tittle">Дорого</h3>
                            <p class="advantages__description">Наши мастера - профессионалы своего дела и не могут
                                стоить дешёво. К тому же, разве цена не даёт определенный статус?</p>
                        </div>
                    </li>
                </ul>

                <!-- <p class="advantages__toggles slider__toggles">
                    <button class="slider__toggle slider__toggle--active" type="button">1</button>
                    <button class="slider__toggle" type="button">2</button>
                    <button class="slider__toggle" type="button">3</button>
                </p> -->
            </div>
        </section>

        <section class="news">
            <div class="news__wrapper">
                <h2 class="news__tittle">Новости и акции</h2>
                <ul class="news__list">
                    <li class="news__item">
                        <time class="news__date" datetime="2019-09-29">
                            <b class="news__day">29</b> сент
                        </time>
                        <p class="news__text">Нам наконец завезли Ягермейстер! Теперь вы можете пропустить стаканчик во
                            время стрижки.</p>
                    </li>
                    <li class="news__item">
                        <time class="news__date" datetime="2019-09-19">
                            <b class="news__day">19</b> сент
                        </time>
                        <p class="news__text">В нашей команде пополнение, Борис "Бритва" Стригунец, обладатель множества
                            титулов и наград пополнил наши стройные ряды. Спешите записаться!</p>
                    </li>
                    <li class="news__item">
                        <time class="news__date" datetime="2019-09-09">
                            <b class="news__day">9</b> сент
                        </time>
                        <p class="news__text">Все дорожает, а наши стрижки нет! Как так? Приходите, постригитесь и
                            узнаете, в чем здесь подвох!</p>
                    </li>
                </ul>
                <a class="news__to-all button" href="#">Показать все</a>
            </div>
        </section>

        <section class="reviews">
            <div class="reviews__wrapper slider">
                <h2 class="reviews__tittle"> Отзывы о нас</h2>
                <a class="reviews__set-feedback button" href="#">Оставить свой</a>
                <div class="reviews__container">
                    <div class="reviews__list">
                        <blockquote class="reviews__item">
                            <p class="reviews__author-picture">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="img/user-image-big.jpg 1x, img/user-image-big@2x.jpg 2x">
                                    <source media="(min-width: 768px)" srcset="img/user-image-tablet.jpg 1x, img/user-image-tablet@2x.jpg 2x">
                                    <img class="reviews__author-image" src="img/user-image-mobile.jpg" srcset="img/user-image-mobile@2x.jpg 2x" alt="Фото Трэвис Баркера">
                                </picture>
                            </p>
                            <div class="reviews__wrapper-text">
                                <cite class="reviews__author-name">Трэвис Баркер</cite>
                                <p class="reviews__text">Спасибо за лысину! Был проездом в Москве, заскочил побриться,
                                    чтобы было видно новую татуировку!</p>
                            </div>
                        </blockquote>
                        <blockquote class="reviews__item">
                            <p class="reviews__author-picture">
                                <img class="reviews__author-image" src="./img/user-image-1.jpg" alt="Фото Трэвис Баркера">
                            </p>
                            <div class="reviews__wrapper-text">
                                <cite class="reviews__author-name">Трэвис Баркер</cite>
                                <p class="reviews__text">Спасибо за лысину! Был проездом в Москве, заскочил побриться,
                                    чтобы было видно новую татуировку!</p>
                            </div>
                        </blockquote>
                        <blockquote class="reviews__item">
                            <p class="reviews__author-picture">
                                <img class="reviews__author-image" src="./img/user-image-1.jpg" alt="Фото Трэвис Баркера">
                            </p>
                            <div class="reviews__wrapper-text">
                                <cite class="reviews__author-name">Трэвис Баркер</cite>
                                <p class="reviews__text">Спасибо за лысину! Был проездом в Москве, заскочил побриться,
                                    чтобы было видно новую татуировку!</p>
                            </div>
                        </blockquote>
                    </div>
                    <button class="reviews__prev" type="button">Предыдущий отзыв</button>
                    <button class="reviews__next" type="button">Следующий отзыв</button>
                </div>
                <p class="reviews__toggles slider__toggles">
                    <button class="slider__toggle reviews__toggle slider__toggle--active" type="button">1</button>
                    <button class="slider__toggle reviews__toggle" type="button">2</button>
                    <button class="slider__toggle reviews__toggle" type="button">3</button>
                </p>
            </div>
        </section>
    </main>

<?php require "footer.php" ?>