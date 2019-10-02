<?php 
    require_once "database.php";

    unlink($database->get_page_name($_GET["id"]));
    $database->removePage($_GET["id"]);
    header("Location: /page_editor.php");
?>