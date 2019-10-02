<?php 
    $title = "Портфолио «Бородинский»";
    $styles = array("./css/normalize.css", "./css/style.min.css", "https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=cyrillic");
    require "header.php";
?>

    <main class="page-main portfolio-main">
        <section class="portfolio">
            <div class="portfolio__wrapper">
                <div class="portfolio__first-row">
                    <h1 class="portfolio__tittle">Наши работы</h1>
                    <a class="button portfolio__to-main" href="index.php">На главную</a>
                </div>
                <div class="portfolio__work portfolio__best-work">
                    <picture class="portfolio__client-image">
                        <source media="(min-width: 1200px)" srcset="/img/photo-1-desktop.jpg 1x, /img/photo-1-desktop@2x.jpg 2x">
                        <source media="(min-width: 768px)" srcset="/img/photo-1-tablet.jpg 1x, /img/photo-1-tablet@2x.jpg 2x">
                        <img src="/img/photo-1-mobile.jpg" srcset="/img/photo-1-mobile@2x.jpg 2x" alt="Работа месяца">
                    </picture>
                    <div class="portfolio__info">
                        <p class="portfolio__client-name">Лжепётр Мчиславский</p>
                        <p class="portfolio__client-review">Где я только не стригся, но так как делаете это вы - не умеет никто другой! Еще раз спасибо и до скорого!</p>
                        <ul class="portfolio__services-list">
                            <li class="portfolio__services-item portfolio__services-item--haircut">Стрижка</li>
                            <li class="portfolio__services-item portfolio__services-item--shaving">Бритье</li>
                            <li class="portfolio__services-item portfolio__services-item--mustache">Усы</li>
                        </ul>
                    </div>
                </div>
                <div class="portfolio__works-wrapper">
                    <div class="portfolio__work">
                        <picture class="portfolio__client-image">
                            <source media="(min-width: 1200px)" srcset="/img/photo-2-desktop.jpg 1x, /img/photo-2-desktop@2x.jpg 2x">
                            <source media="(min-width: 768px)" srcset="/img/photo-2-tablet.jpg 1x, /img/photo-2-tablet@2x.jpg 2x">
                            <img src="/img/photo-2-mobile.jpg" srcset="/img/photo-2-mobile@2x.jpg 2x" alt="Стрижка для Саши Мальцева">
                        </picture>
                        <div class="portfolio__info">
                            <p class="portfolio__client-name">Саша Мальцев</p>
                            <p class="portfolio__client-review">Попросил омолодить и омолодили! Кто теперь скажет, что мне 45?</p>
                            <ul class="portfolio__services-list">
                                <li class="portfolio__services-item portfolio__services-item--haircut">Стрижка</li>
                            </ul>
                        </div>
                    </div>
                    <div class="portfolio__work">
                        <picture class="portfolio__client-image">
                            <source media="(min-width: 1200px)" srcset="/img/photo-3-desktop.jpg 1x, /img/photo-3-desktop@2x.jpg 2x">
                            <source media="(min-width: 768px)" srcset="/img/photo-3-tablet.jpg 1x, /img/photo-3-tablet@2x.jpg 2x">
                            <img src="/img/photo-3-mobile.jpg" srcset="/img/photo-3-mobile@2x.jpg 2x" alt="Стрижка для Саши Мальцева">
                        </picture>
                        <div class="portfolio__info">
                            <p class="portfolio__client-name">Владимир Иваныч</p>
                            <p class="portfolio__client-review">К зимнему сезону готов!</p>
                            <ul class="portfolio__services-list">
                                <li class="portfolio__services-item portfolio__services-item--shaving">Борода</li>
                                <li class="portfolio__services-item portfolio__services-item--mustache">Усы</li>
                            </ul>
                        </div>
                    </div>
                    <div class="portfolio__work">
                        <picture class="portfolio__client-image">
                            <source media="(min-width: 1200px)" srcset="/img/photo-4-desktop.jpg 1x, /img/photo-4-desktop@2x.jpg 2x">
                            <source media="(min-width: 768px)" srcset="/img/photo-4-tablet.jpg 1x, /img/photo-4-tablet@2x.jpg 2x">
                            <img src="/img/photo-4-mobile.jpg" srcset="/img/photo-4-mobile@2x.jpg 2x" alt="Стрижка для Саши Мальцева">
                        </picture>
                        <div class="portfolio__info">
                            <p class="portfolio__client-name">Винстон Синий</p>
                            <p class="portfolio__client-review">Как только заростаю и волосы начинают мешать видеть - бегом в Бородинский!</p>
                            <ul class="portfolio__services-list">
                                <li class="portfolio__services-item portfolio__services-item--haircut">Стрижка</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="price-list">
            <h2 class="price-list__tittle">Прейскурант</h2>
            <div class="price-list__wrapper">
                <table class="price-list__table">
                    <tr>
                        <td class="price-list__number-row">1</td>
                        <td class="price-list__type-cut">Классическая стрижка<br><span>(с мытьем головы)</span></td>
                        <td>с мытьем головы</td>
                        <td>1 500 руб.</td>
                    </tr>
                    <tr>
                        <td class="price-list__number-row">2</td>
                        <td class="price-list__type-cut">Современный вариант<br><span>(с мытьем головы)</span></td>
                        <td>с мытьем головы</td>
                        <td>1 500 руб.</td>
                    </tr>
                    <tr>
                        <td class="price-list__number-row">3</td>
                        <td class="price-list__type-cut">Индивидуальный подход<br><span>(с мытьем головы)</span></td>
                        <td>с мытьем головы</td>
                        <td>2 000 руб.</td>
                    </tr>
                    <tr>
                        <td class="price-list__number-row">4</td>
                        <td class="price-list__type-cut">Бритьё бороды<br><span>(без мытья)</span></td>
                        <td>без мытья</td>
                        <td>500 руб.</td>
                    </tr>
                    <tr>
                        <td class="price-list__number-row">5</td>
                        <td class="price-list__type-cut">Бритьё головы<br><span>(с мытьем головы)</span></td>
                        <td>с мытьем головы</td>
                        <td>1 000 руб.</td>
                    </tr>
                </table>
                <div class="price-list__time">
                    <img class="price-list__watch" src="../img/watch.svg" alt="часики тик-так">
                    <p class="price-list__text">
                        C 10:00 до 14:00 <br>скидка 20%
                    </p>
                </div>
            </div>
        </section>
    </main>
<?php require "footer.php" ?>