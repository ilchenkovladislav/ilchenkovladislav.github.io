<?php 
    require_once "database.php";
    $database->edit_user($_POST["id"], $_POST["username"], $_POST["email"], $_POST["login"], $_POST["password"]);
    header("Location: users.php");
?>