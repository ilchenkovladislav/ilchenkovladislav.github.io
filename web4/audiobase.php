<?php 
    session_start();

    $title = "Барбершоп - «Бородинский»";
    $styles = array("./css/normalize.css", "./css/style.min.css", "https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=cyrillic");
    require_once("header.php");
    require_once("database.php")
?>

<section class="audiobase">
    <div class="audiobase__wrapper">
        <h1>База аудиотреков</h1>
        <?php $database->get_audiolist(); ?>
    </div>
</section>

<?php require_once("footer.php"); ?>