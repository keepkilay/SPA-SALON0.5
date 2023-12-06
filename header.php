<?php
include_once __DIR__ . '/functions.php';
if (isset($_GET['exit'])) {
    session_destroy();
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/modal.css">
        <link rel="stylesheet" href="css/birthdaySendWindow.css">
        <link rel="stylesheet" href="css/loginWindow.css">
        <link rel="stylesheet" href="css/header.css">
        <title> СПА-салон "Спокойствие"</title>
    </head>

    <body>
        <header class='header'>
            <?if(!is_null(getCurrentUser())):?>
            <h1>Wellcome <?=getCurrentUser()?></h1>
            <a href="?exit" style="position:relative; z-index:9999">выход</a>
            <?endif?>
            <!-- Кнопка входа/выхода -->
            <!-- <input type='button' class='header__btn' value=<?= $auth ? 'Выйти' : 'Войти' ?>> -->
            <!-- имя пользователя и время входа -->
            <p class='header__user'></p>
            <!-- заголовок -->
            <!--<p class='header__title'> <img src="./img/58816d2e174f0331e490116ac16469f5.png" alt="СПА-салон">Спокойствие</p> --> 
            <!-- меню навигации -->
            <nav class="header__menu">
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#">Фотогалерея</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </nav>
        </header>

        <main>