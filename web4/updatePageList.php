<?php
    require_once "database.php";

    
    $filelist = glob("*.php");

    foreach ($filelist as $filename) {
        $content = htmlentities(file_get_contents($filename), ENT_QUOTES);
        $database->updatePageList($filename, $content);
    }

    header("Location: {$_SERVER["HTTP_REFERER"]}");