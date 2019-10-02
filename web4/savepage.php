<?php 
    require_once "database.php";

    $database->save_page($_POST["id"], $_POST["text_page"]);
    $database->rewrite_file($database->get_page_name($_POST["id"]));
    header("Location: {$_SERVER["HTTP_REFERER"]}");
?>