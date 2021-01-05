<?php

/*
Сделать вывод массива, полученного из JSON-формата
*/

// Берём массив значений из json-файла
$arrayElements = file_get_contents('program1.php.json');

/* Передадим заголовок на вывод, который показывает, что вывод идёт в html-формате */
header('Content-type: text/html; charset=utf-8');

// Выведем массив, предварительно декодировав его из json-формата
$object = json_decode($arrayElements);
foreach ($object as $key => $value) {
    echo $key." = ".$value."<br>";
}
