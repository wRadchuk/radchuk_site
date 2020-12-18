<?php
/***
    Здесь собраны основные конфигурации сайта и это удобно,
    так как необходимо для каждой страницы.
*/


// Корневая дериктория сайта
$wrSiteMainDir = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'].'/';

// Переменные для доступа к БД
$wrDbHost = '';     // Адрес сервера
$wrDbName = '';     // Имя базы данных
$wrDbUser = '';     // Имя пользователя
$wrDbPass = '';     // Пароль


// Переменные для настройки блка <head></head>
$wrHeadLang          = "ru";
$wrHeadContentType   = "text/html; charset=utf-8";
$wrHeadXUACompatible = "IE=edge";
$wrHeadViewport      = "width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no";
$wrHeadIconFilePNG     = $wrSiteMainDir."ico/favicon.png";
$wrHeadIconTypePNG   = "image/png";
$wrHeadIconFileICO   = $wrSiteMainDir."ico/favicon.ico";
$wrHeadIconTypeICO   = "image/x-icon";
$wrHeadTitle          = "Владимир Радчук";
$wrHeadStyleReset    = $wrSiteMainDir."style/normalize.css";
$wrHeadStyleMain     = $wrSiteMainDir."style/main.css";
$wrHeadDescription   = "Сайт содержит полезную информацию по HTML и CSS. ".
                       "Только самое важное что нужно знать верстальщику.";
$wrHeadKeywords      = "HTML, CSS, Верстка, Основы HTML, Основы CSS, Теги, Верстальщик, Сайт, Уроки CSS, ".
                       "Уроки HTML, Создание сайтов, Стили, Каскадные, Таблицы, Основы, Уроки, Учимся, ".
                       "Владимир, Радчук, Владимир Радчук, wRadchuk, radchuk, Селектор, JS, PHP, ООП";



// Основная разметка страници до блока <body>
$wrHeadSite = "<!DOCTYPE html><html lang='".$wrHeadLang."'><head>".
              "<meta http-equiv='Content-Type' content='".$wrHeadContentType."'/>".
              "<meta http-equiv='X-UA-Compatible' content='".$wrHeadXUACompatible."'>".
              "<meta name='viewport' content='".$wrHeadViewport."'>".
              "<link rel='shortcut icon' href='".$wrHeadIconFilePNG."' type='".$wrHeadIconTypePNG."'>".
              "<link rel='shortcut icon' href='".$wrHeadIconFileICO."' type='".$wrHeadIconTypeICO."'>".
              "<title>".$wrHeadTitle."</title><link href='".$wrHeadStyleReset."' rel='stylesheet'>".
              "<link href='".$wrHeadStyleMain."' rel='stylesheet'>".
              "<meta name='description' content='".$wrHeadDescription."'/>".
              "<meta name='keywords' content='".$wrHeadKeywords."'/></head>";












?>
