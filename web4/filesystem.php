<?php
    $title = "Файловая система сайта";
    $styles = array("./css/normalize.css", "./css/style.min.css", "https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=cyrillic");
    require "header.php";
?>

<?php
    function fileList($path, &$fileName, &$fileSize, &$filesDir) {
        $returnSize = 0;

        if (!$h = opendir($path)) return false;

        while (($element = readdir($h)) !== false) {
            //Исключаем директории "." и ".."
            if ($element != "." && $element != "..") {

                //Полний путь к обрабатываемому элементу(файл/папка)
                $all_path = $path . "/" . $element;

                if (filetype($all_path) == "file" && $path != "W:\domains\Ilchenko" ){
                    $returnSize += filesize($all_path);
                    array_push($fileName, $element);
                    array_push($fileSize, filesize($all_path) . " б");

                } else if (filetype($all_path) == "dir"){
                    array_push($fileName, $element);
                    array_push($fileSize, "<br>");
                    $returnSize += fileList($all_path, $fileName, $fileSize, $filesDir);
                } else {
                    $returnSize += filesize($all_path);
                    array_push($filesDir, $element);
                    array_push($filesDir, filesize($all_path) . " б");
                }
            }
        }

        closedir($h);
        return $returnSize;
    }
?>


<style>
    .page-main {
        background-color: #eee;
        padding: 30px 100px;
    }

    .parent-block {
        cursor: pointer;
        padding: 10px;
        font-size: 24px;
        font-weight: bold;
    }

    .parent-block:hover {
        background-color: darkgrey;
    }

    .child-ul {
        display: none;
        list-style: none;
        margin-left: 20px;
    }

    .parent-block-opened+.child-ul {
        display: block;
    }
</style>
<main class="page-main">
    <h1>Список файлов</h1>
    <?php
        $fileName = array();
        $fileSize = array();
        $filesDir = array();

        fileList(getcwd(), $fileName,$fileSize, $filesDir);


        echo "<ul class='full-list'>";
        for ($i = 0; $i < count($fileName); $i++) {
            if ($fileSize[$i] == "<br>") {
                echo("</ul>
                      <div class='parent-block'>$fileName[$i]</div>
                      <ul class='child-ul'>");
            } else {
                echo("<li class='child-block'>$fileName[$i] - $fileSize[$i]</li>");
            }
        }
        echo "</ul>";


        echo "<ul class='$filesDir[0]'>";
        for ($i = 0, $j = 1; $i < count($filesDir); $i+=2, $j+=2) {
            echo"<li class='child'>$filesDir[$i] - $filesDir[$j]</li>";
        }
        echo "</ul>";
    ?>
</main>

<script>
    let arrParents = document.querySelectorAll(".parent-block");


    for(let item of arrParents) {
        item.addEventListener("click", function(e) {
            item.classList.toggle("parent-block-opened");
        })
    }
</script>

<?php require "footer.php"; ?>

