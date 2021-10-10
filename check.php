<?php

$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$number = filter_var(trim($_POST['number']), FILTER_SANITIZE_STRING);
$country = filter_var(trim($_POST['country']), FILTER_SANITIZE_STRING);
$comment = filter_var(trim($_POST['comment']), FILTER_SANITIZE_STRING);

// Подключаем базу данных

$mysql = new mysqli('myproject.loc', 'root', '', 'regist-db');

$mysql->query("INSERT INTO `users` (`name`, `surname`, `email`, `number`, `country`, `comment`) 
VALUES ('$name', '$surname', '$email', '$number', '$country', '$comment')");

$mysql->close();

// Перенаправляемся к пустой форме

header('Location: /');
exit();