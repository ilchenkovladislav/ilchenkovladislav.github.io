<?php 
    session_start();

    if (!isset($_SESSION["login"])) {
        header("Location: index.php");
    }

    if ($_SESSION["login"] != "admin") {
        header("Location: cabinet.php");
    }

    require_once "database.php";

    $database->addNewPage($_POST["name"], $_POST["content"]);
    file_put_contents($_POST["name"], $_POST["content"]);

    header("Location: /page_editor.php");

