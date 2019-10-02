<?php 
    require_once "database.php";

    $database->remove_audio($_GET["id"]);
    header("Location: {$_SERVER["HTTP_REFERER"]}");
?>