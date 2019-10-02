<?php
    $title = "Барбершоп - «Бородинский»";
    $styles = ["./css/normalize.css", "./css/style.min.css", "https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=cyrillic"];
    require_once "header.php";
    require_once "database.php";
?>

<div class="cabinet">
    <div class="cabinet__wrapper">
        <?php 
            require_once "breadcrumbs.php"; 
            getBreadcrumbs("addAudioEditor.php", "Добавление песни"); 
        ?>
        
        <h1>Личный кабинет</h1>
        <form class="editor" action="add_audiofile.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="login" value="<?=$_SESSION["login"]?>">
            <label>
                Название
                <input type="text" name="title">
            </label>
            <label>
                Автор
                <input type="text" name="author">
            </label>
            <label>
                Песня
                <input type="file" name="audiofile">
            </label>
            <button class="button editor__submit" type="submit">Отправить</button>
        </form>
    </div>
</div>

<?php require_once "footer.php"; ?>