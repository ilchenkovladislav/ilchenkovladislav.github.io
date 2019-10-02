<?php 
    class Database {
        private $connection;

        function __construct() {
            $this->connection = $this->connect();
        }

        public function connect() {
            return mysqli_connect("localhost", "root", "", "web");
        }

        public function find_login($login) {
            $res = mysqli_query($this->connection, "SELECT * FROM users WHERE login='$login'");
            return mysqli_fetch_assoc($res);
        }

        public function check_password($login, $password) {
            $password = $this->get_hash_password($password);
            
            $res = mysqli_query($this->connection, "SELECT * FROM users WHERE login='$login' AND password='$password'");
            return mysqli_fetch_assoc($res);
        }

        public function get_hash_password($password) {
            return hash("md5", $password);
        }

        public function validate_fields($username, $email, $login, $password) {
            if (iconv_strlen($username) > 0 && iconv_strlen($username < 50)) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    if (iconv_strlen($login) > 0 && iconv_strlen($login < 50)) {
                        if (iconv_strlen($password) > 0 && iconv_strlen($password) < 50) {
                            return true;
                        }
                    }
                }
            }
            return false;
        }

        public function register_user($username, $email, $login, $password) {
            $password = $this->get_hash_password($password); 

            return mysqli_query($this->connection, "INSERT INTO users VALUES (0, '$username', '$email', '$login', '$password')");
        }

        public function get_pages() {
            return mysqli_query($this->connection, "SELECT * FROM pages");
        }

        public function get_page($id) {
            return mysqli_query($this->connection, "SELECT * FROM pages WHERE id=" . (int)$id);
        }

        public function output_pages() {
            $res = $this->get_pages();

            if ($res) {
                while ($pages = mysqli_fetch_assoc($res)) {
                    print("<a class='button' href='pages.php?id=" . $pages["id"] . "'>" . $pages["name"] . "</a>");
                }
            } 
        }

        public function output_page($id) {
            $res = $this->get_page($id);
            $page = mysqli_fetch_assoc($res);

            if ($res) {
                print("<textarea name='text_page' cols='150' rows='50'>" . $page["text"] . "</textarea>");
            }
        }

        public function get_page_name($id) {
            $res = $this->get_page($id);
            $page = mysqli_fetch_assoc($res);
            return $page["name"];
        }

        public function save_page($id, $text) {
            $text = htmlentities($text, ENT_QUOTES);
            $id = (int)$id;
            mysqli_query($this->connection, "UPDATE `pages` SET `text`= '{$text}' WHERE `id`= " . $id);
        }

        public function get_page_text($name) {
            $res = mysqli_fetch_array(mysqli_query($this->connection, "SELECT text FROM pages WHERE name = '$name'"));
            return $res["text"];
        }

        public function rewrite_file($name) {
            $text = $this->get_page_text($name);
            $text = html_entity_decode($text, ENT_QUOTES);

            $fp = fopen($name, "w+");

            fwrite($fp, $text);
            fclose($fp);
        }

        public function get_user($id) {
            return mysqli_query($this->connection, "SELECT * FROM users WHERE id=" . $id);
        }

        public function get_userlist() {
            return mysqli_query($this->connection, "SELECT * FROM users");
        }

        public function output_userlist() {
            $userlist = $this->get_userlist();
            echo("<table class='audiobase__table'>
                    <thead>
                        <th>id</th>
                        <th>username</th>
                        <th>email</th>
                        <th>login</th>
                        <th>password</th>
                    </thead>
            ");
            foreach ($userlist as $user) {
                echo "<tr>";
                foreach ($user as $column) {
                    echo "<td>{$column}</td>";
                }
                echo "<td><a class='audiobase__edit' href='user_editor.php?id={$user["id"]}'>Изменить</a></td>";
                echo "<td><a class='audiobase__remove' href='remove_user.php?id={$user["id"]}'>Удалить</a></td>";
                echo "</tr>";
            }
            echo("</table>");
        }

        public function output_user_editform($id) {
            $user = $this->get_user($id);
            $user = mysqli_fetch_assoc($user);

            echo "
                <form class='editor' method='POST' action='edit_user.php'>
                    <input style='display: none' type='text' name='id' value={$id}>
                    <label>
                        Имя
                        <input type='text' name='username' value={$user["username"]}>
                    </label>
                    <label>
                        Email
                        <input type='text' name='email' value={$user["email"]}>
                    </label>
                    <label>
                        Логин
                        <input type='text' name='login' value={$user["login"]}>
                    </label>
                    <label>
                        Пароль
                        <input type='text' name='password' value={$user["password"]}>
                    </label>
                    <button class='button editor__submit' type='submit'>Сохранить</button>
                </form>
            ";
        }

        public function remove_user($id) {
            mysqli_query($this->connection, "DELETE FROM users WHERE id=" . $id);
        }

        public function remove_audio($id) {
            mysqli_query($this->connection, "DELETE FROM notes WHERE id=" . $id);
        }
        
        public function removePage($id) {
            mysqli_query($this->connection, "DELETE FROM pages WHERE id=" . $id);
        }

        public function edit_user($id, $username, $email, $login, $password) {
            mysqli_query($this->connection, "UPDATE `users` SET `username` = '{$username}', `email` = '{$email}', `login` = '{$login}', `password` = '{$password}' WHERE `id` = " . $id);
        }

        public function get_audiolist() {
            $res = mysqli_query($this->connection, "SELECT * FROM users JOIN notes ON notes.user_id = users.id");
            
            echo "<table class='audiobase__table'>
                    <thead>
                        <th>id</th>
                        <th>Навание</th>
                        <th>Автор</th>
                        <th>Загрузил</th>
                        <th>Песня</th>
                    </thead>
                    ";
                foreach ($res as $row) {
                    echo "
                    <tr>
                        <td>{$row["id"]}</td>
                        <td>{$row["title"]}</td>
                        <td>{$row["author"]}</td>
                        <td>{$row["username"]}</td>
                        <td><audio controls><source src='{$row["audiofile"]}' type='audio/mpeg'></audio></td>
                    </tr>
                ";
            }
            print "</table>";
        }

        public function add_audiofile($title, $author, $user_id, $audiofile) {
            mysqli_query($this->connection, "INSERT INTO notes VALUES (0, '$title', '$author', $user_id, '$audiofile')");
        }

        public function get_user_id($login) {
            $res = mysqli_query($this->connection, "SELECT id FROM users WHERE `login`= '$login'");
            $res = mysqli_fetch_assoc($res);
            return $res["id"];
        }

        public function get_audiolist_editor($user) {
            if ($user == "admin") {
                $res = mysqli_query($this->connection, "SELECT * FROM users JOIN notes ON notes.user_id = users.id");
            } else {
                $res = mysqli_query($this->connection, "SELECT * FROM users JOIN notes ON notes.user_id = users.id WHERE users.login = '$user'");
            }
            
            echo "<table class='audiobase__table'>
                    <thead>
                        <th>id</th>
                        <th>Навание</th>
                        <th>Автор</th>
                        <th>Загрузил</th>
                        <th>Песня</th>
                    </thead>
                    ";
                foreach ($res as $row) {
                    echo "
                    <tr>
                        <td>{$row["id"]}</td>
                        <td>{$row["title"]}</td>
                        <td>{$row["author"]}</td>
                        <td>{$row["username"]}</td>
                        <td><audio controls><source src='{$row["audiofile"]}' type='audio/mpeg'></audio></td>
                        <td><a class='audiobase__edit' href='audio_editor.php?id={$row["id"]}'>Изменить</a></td>
                        <td><a class='audiobase__remove' href='remove_audio.php?id={$row["id"]}'>Удалить</a></td>
                    </tr>
                ";
            }
            print "</table>";
        }

        public function get_audio($id) {
            return mysqli_query($this->connection, "SELECT * FROM users JOIN notes ON notes.user_id = users.id WHERE notes.id=" . $id);
        }

        public function output_audio_editform($id) {
            $audio = $this->get_audio($id);
            $audio = mysqli_fetch_assoc($audio);

            echo "
                <form class='editor' method='POST' action='edit_audio.php'>
                    <input style='display: none' type='text' name='id' value={$id}>
                    <label>
                        Название
                        <input type='text' name='title' value={$audio["title"]}>
                    </label>
                    <label>
                        Автор
                        <input type='text' name='author' value={$audio["author"]}>
                    </label>
                    <label>
                        Песня
                        <input type='text' name='audiofile' value={$audio["audiofile"]}>
                    </label>
                    <button class='button editor__submit' type='submit'>Сохранить</button>
                </form>
            ";
        }

        public function edit_audio($id, $title, $author, $audiofile) {
            mysqli_query($this->connection, "UPDATE notes SET `title` = '{$title}', `author` = '{$author}', `audiofile` = '{$audiofile}' WHERE `id` = " . $id);
        }

        public function updatePageList($filename, $content) {
            $res = mysqli_query($this->connection, "SELECT * FROM pages WHERE name = '{$filename}'");

            $res = mysqli_fetch_assoc($res);

            if ($res) {
                mysqli_query($this->connection, "UPDATE pages SET text = '{$content}' WHERE name = '{$filename}'");
            } else {
                mysqli_query($this->connection, "INSERT INTO pages VALUES (0, '$filename', '$content')");
            }
        }

        public function addNewPage($filename, $content) {
            $content = html_entity_decode($content, ENT_QUOTES);

            mysqli_query($this->connection, "INSERT INTO pages VALUES (0, '$filename', '$content')");
        }
    }

    $database = new Database();
?>