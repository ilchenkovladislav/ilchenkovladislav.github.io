<?php 
    require_once "database.php";

    $username = $_POST["username"];
    $email = $_POST["email"];
    $login = $_POST["login"];
    $password = $_POST["password"];

    
    if ($database->validate_fields($username, $email, $login, $password)) {
        $res = $database->register_user($username, $email, $login, $password);

        if ($res) {
            header("Location: http://ilchenko/index.php?mes=ok");
        } else {
            header("Location: http://ilchenko/registration.php?mes=Neok");
        }
    }else {
        print("Проверку не прошло");
    }

?>