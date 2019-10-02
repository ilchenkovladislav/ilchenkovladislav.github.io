<?php 
    require_once "database.php";
    $database->edit_audio($_POST["id"], $_POST["title"], $_POST["author"], $_POST["audiofile"]);
    header("Location: audiobase_admin.php");
?>