<?php

// Путь к файлу
$filename = 'tb.csv';
$array = ['aaa', 'bbb', 'ccc', 'ddd'];
// Данные для записи
foreach ($array as $key) {
    $result = file_put_contents($filename, "$key\n", FILE_APPEND);
}
if ($result !== false) {
    print('Данные успешно записаны в файл $filename.');
} else {
    print('Ошибка при записи в файл $filename.');
}