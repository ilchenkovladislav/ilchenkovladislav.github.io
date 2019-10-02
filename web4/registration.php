<?php 
    $title = "Барбершоп - «Бородинский»";
    $styles = ["./css/normalize.css", "./css/style.min.css", "https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=cyrillic"];
    require_once("header.php");
?>

<section class="registration">
    <div class="registration__wrapper">
        <h1>Регистрация</h1>
    
        <form class="registration__form" action="register.php" method="post">
            <fieldset>
                <legend class="visually-hidden">Имя Email</legend>
                <div class="registration__group-first">
                    <label>
                        Ваше имя
                        <input type="text" name="username" required>
                    </label>
                    <label>
                        Ваш email
                        <input type="email" name="email" required>
                    </label>
                </div>
            </fieldset>
            <div class="registration__group-first">
                <label>
                    Ваш логин
                    <input type="text" name="login" required>
                </label>
                <label>
                    Ваш пароль
                    <input type="password" name="password"required>
                </label>
            </div>
            <button class="button" type="submit">Зарегистрироваться</button>
        </form>
    </div>
</section>


<?php require_once("footer.php"); ?>