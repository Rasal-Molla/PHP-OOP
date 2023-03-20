<?php

$filename = "c:\\xampp\\htdocs\\PHP-OOP\\file.txt";
$fp = fopen($filename, 'r');
$line = fgets($fp, 3);
fclose($fp);