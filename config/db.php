<?php

return [
    'host' => 'localhost',
    'dbname' => 'beginphp',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',  // у меня же utf8mb4
    'options' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,  // хотим ассоциативный массив
        // PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ], // не вылазят подсказки
];
