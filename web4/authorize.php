<?php 
    require_once "database.php";
    session_start();
    
    if (isset($_POST["login"]) && isset($_POST["password"])) {
        $login = $_POST["login"];
        $password = $_POST["password"];
        
        if ($database->find_login($login)) {
            if ($database->check_password($login, $password)) {
                header("Location: {$_SERVER["HTTP_REFERER"]}");

                $_SESSION["login"] = $login;
            }
        } else {
            header("Location: {$_SERVER["HTTP_REFERER"]}");
        }
    }
?>