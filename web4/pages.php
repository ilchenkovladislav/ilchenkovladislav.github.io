<?php
    session_start();
    
    if (!isset($_SESSION["login"])) {
        header("Location: index.php");
    }

    if ($_SESSION["login"] != "admin") {
        header("Location: cabinet.php");
    }

    $title = "Барбершоп - «Бородинский»";
    $styles = array("./css/normalize.css", "./css/style.min.css", "https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=cyrillic");
    require_once("header.php");
    require_once("database.php")
?>

<div class="cabinet">
    <div class="cabinet__wrapper">
        <?php 
            require_once "breadcrumbs.php"; 
            getBreadcrumbs("page_editor.php", "Страницы"); 
        ?>
        <h1>Страница <?=$database->get_page_name($_GET["id"]) ?></h1>
        <form class="pages" action="savepage.php" method="POST">
            <?php
                $database->output_page($_GET["id"]);
            ?>
            <input style="display: none" type="text" name="id" value="<?=$_GET["id"]?>">
            <button class="button pages__submit" type="submit">Сохранить</button>
            <a class="button pages__submit" href="removePage.php?id=<?=$_GET["id"]?>">Удалить страницу</a>
        </form>
    </div>
</div>


<?php require_once("footer.php"); ?>