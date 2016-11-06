<?php

$recepient = "testmail@testmail.ru";
$sitename = "Feedback";

$email = trim($_POST["email"]);
$name = trim($_POST["name"]);
$text = trim($_POST["message"]);
$message = "Почта: $email \nИмя: $name \nСообщение: $text";

$pagetitle = "Сообщение с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>