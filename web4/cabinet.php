<?php 
    session_start();

    if (!isset($_SESSION["login"])) {
        header("Location: index.php");
    }

    if ($_SESSION["login"] == "admin") {
        header("Location: admin.php");
    }

    $title = "Барбершоп - «Бородинский»";
    $styles = ["./css/normalize.css", "./css/style.min.css", "https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=cyrillic"];
    require_once "header.php";
    require_once "database.php";
?>
  
<div class="cabinet">
    <div class="cabinet__wrapper">
        <?php 
            require_once "breadcrumbs.php"; 
            getBreadcrumbs(); 
        ?>
        <div class="cabinet__header-wrapper">
            <h1>Список ваших песен</h1>
            <a class="button" href="addAudioEditor.php">Добавить песню</a>
        </div>
            <?php $database->get_audiolist_editor($_SESSION["login"]); ?>
    </div>
</div>

<?php require_once "footer.php"; ?>