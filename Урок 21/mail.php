<?php
//Принимаем постовые данные
$from=$_POST['from'];
$username=$_POST['username'];
$email=$_POST['email'];
$user_message=$_POST['user_message'];
//Тут указываем на какой ящик посылать письмо
$to = "eternalsur@gmail.com";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с сайта";
// Сообщение письма
$message = "
С какой формы пришла заявка: ".htmlspecialchars($from). "<br>
Имя пользователя: ".htmlspecialchars($username)."<br />
Телефон: <a href='tel:$email'>".htmlspecialchars($email)."</a> <br>
Сообщение: ".htmlspecialchars($user_message);
// Отправляем письмо при помощи функции mail();
$headers = "From: stastroi.ru <mail@stastroi.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
exit();
?>