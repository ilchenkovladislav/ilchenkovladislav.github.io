<?php 
    require_once "database.php";

    $title = $_POST["title"];
    $author = $_POST["author"];
    $user_id = $database->get_user_id($_POST["login"]);

    $uploaddir = 'audio/';
    $uploadfile = $uploaddir . basename($_FILES['audiofile']['name']);

    if (move_uploaded_file($_FILES["audiofile"]["tmp_name"], $uploadfile)) {
        $database->add_audiofile($title, $author, $user_id, $uploadfile);
        header("Location: {$_SERVER["HTTP_REFERER"]}");
    } else {
        echo "Не загрузился файл";
        die;
    }
?>