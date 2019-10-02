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
    require_once("database.php");

    $filelist = glob("*.php");

    foreach ($filelist as $filename) {
        $content = htmlentities(file_get_contents($filename), ENT_QUOTES);
        $database->updatePageList($filename, $content);
    }
?>

<div class="cabinet">
    <div class="cabinet__wrapper">
        <?php 
            require_once "breadcrumbs.php"; 
            getBreadcrumbs("page_editor.php", "Страницы"); 
        ?>
        <div class="cabinet__header-wrapper">
            <h1>Страницы</h1>
            <a class="button cabinet__reload" href="updatePageList.php">Обновить</a>
            <a class="button" href="addPageForm.php">Добавить страницу</a>
        </div>

        <div class="cabinet__hrefs">
            <?php $database->output_pages(); ?>
        </div>
    </div>
</div>

<?php require_once("footer.php"); ?>