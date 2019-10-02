<?php 
    $title = "Барбершоп - «Бородинский»";
    $styles = array("./css/normalize.css", "./css/style.min.css", "https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=cyrillic");
    
    require_once "header.php"; 
?>

<div class="cabinet">
    <div class="cabinet__wrapper">
        <h1>Добавление страницы</h1>

        <form class="pages" action="addPage.php" method="POST">
            <label>
                Название страницы:
                <input type="text" name="name">
            </label>
            <label>
                Текст страницы:
                <textarea name="content" cols="150" rows="20"></textarea>
            </label>
            <button class="button pages__submit" type="submit">Добавить</button>
        </form> 
    </div>
</div>

<?php require_once "footer.php"; ?>