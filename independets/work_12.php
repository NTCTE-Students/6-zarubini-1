<?php 
$datetime = date('Y-m-d H:i:s');;
print($datetime);

// Путь к файлу
$filename = 'file.log';

$result = file_put_contents($filename, $datetime, FILE_APPEND);

// Проверяем результат
if ($result !== false) {
    print("Данные успешно добавлены в файл $filename.");
} else {
    print("Ошибка при добавлении данных в файл $filename.");
}