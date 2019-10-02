<?php 
    session_start();

    if (!isset($_SESSION["login"])) {
        header("Location: index.php");
    }

    if ($_SESSION["login"] != "admin") {
        header("Location: cabinet.php");
    }

    $title = "Барбершоп - «Бородинский»";
    $styles = array("./css/normalize.css", "./css/style.min.css", "https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=cyrillic");
    require_once("header.php");
    require_once("database.php")
?>

<section class="cabinet">
    <div class="cabinet__wrapper">
        <?php 
            require_once "breadcrumbs.php"; 
            getBreadcrumbs(); 
        ?>
        <h1>Админ панель</h1>
        
        <div class="cabinet__hrefs">
            <a class="button" href="users.php">Пользователи</a>
            <a class="button" href="page_editor.php">Редактирование страниц</a>
            <a class="button" href="audiobase_admin.php">База аудиотреков</a>
        </div>
    </div>
</section>


<?php require_once("footer.php"); ?>