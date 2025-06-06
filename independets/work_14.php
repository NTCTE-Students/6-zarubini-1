<?php 
$date = date('Y-m-d');
$structure = "./copy$date";
mkdir($structure,  0777);
$dir = scandir('./');
// var_dump($dir);
foreach ($dir as $file) {
    copy($file,"$structure/$file");

}