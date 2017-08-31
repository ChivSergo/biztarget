<?php

header('Content-Type: text/html; charset=utf-8');

$root=__DIR__.DIRECTORY_SEPARATOR;

require $root.'prepare.php'; #Здесь будут производиться подготовительные действия, объявления функций и т.д.
require $root.'auth.php'; #Здесь будет происходить авторизация пользователя
require $root.'leads_list.php'; #Получаем список сделок без задач
require $root.'leads_id.php'; #Записываем id полученных задач в массив
// require $root.'tasks.php'; #Кладем задачи в пакет для формирования запроса на добавление задач
// require $root.'tasks_set.php'; #Добавляем пакет задач

// Раздел отладки
// Показывать все ошибки
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>