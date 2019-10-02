<?php 
    session_start();
    require_once("database.php"); 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <?php foreach($styles as $style): ?>
        <link rel="stylesheet" href="<?=$style?>">
    <? endforeach ?>
</head>

<body>
    <header class="page-header">
        <a class="page-header__logo">
            <picture>
                <source media="(min-width: 1200px)" srcset="./img/logotype-desktop.svg">
                <source media="(min-width: 768px)" srcset="./img/logotype-tablet.svg">
                <img width="370" height="150" class="page-header__logo-image" src="./img/logotype-mobile.svg" alt="Барбершоп «Бородинский»">
            </picture>
        </a>
        <nav class="main-nav main-nav--closed main-nav--nojs">
            <button class="main-nav__toggle" type="button"><span>Открыть меню</span></button>
            <div class="main-nav__wrapper">
                <ul class="main-nav__list site-list">
                    <li class="site-list__item">
                        <a class="site-list__link" href="index.php">Главная</a>
                    </li>
                    <li class="site-list__item">
                        <a class="site-list__link" href="recording.php">Запись</a>
                    </li>
                    <li class="site-list__item">
                        <a class="site-list__link" href="portfolio.php">Наши работы</a>
                    </li>
                    <li class="site-list__item">
                        <a class="site-list__link" href="filesystem.php">Файлы</a>
                    </li>
                    <li class="site-list__item">
                        <a class="site-list__link" href="audiobase.php">Аудиобаза</a>
                    </li>
                </ul>
                <ul class="user-list">
                    <li class="user-list__item">
                        <a class="user-list__login" href="#"><?=$_SESSION["login"] ?? "Войти"?></a>
                        <? if (!isset($_SESSION["login"])): ?>
                        <div class="user-list__login-form">
                            <form action="authorize.php" method="POST">
                                <label class="user-list__label" for="login">Логин</label>
                                <input class="user-list__field-login" name="login" id="login" type="text">

                                <label class="user-list__label" for="password">Пароль</label>
                                <input class="user-list__field-password" name="password" id="password" type="password">

                                <div class="user-list__wrapper">
                                    <label>
                                        <input type="checkbox">
                                        Запомните меня
                                    </label>

                                    <a href="#">Я забыл пароль!</a>
                                </div>
                                
                                <button class="button user-list__submit" type="submit">Войти в личный кабинет</button>
                                <a class="user-list__registration" href="registration.php">Зарегистрироваться</a>
                            </form>
                        </div>
                        <? else: ?>
                        <div class="user-list__login-form">
                            <div class="user-list__buttons-wrapper">
                                <a class="button user-list__submit" href="<? if ($_SESSION['login']){print('admin.php');} else {print('cabinet.php');}   ?>">Войти в личный кабинет</a>
                                <a class="button user-list__submit" href="exit.php">Выход</a>
                            </div>
                        </div>
                        <? endif ?>
                    </li>
                </ul>
            </div>
        </nav>
    </header>