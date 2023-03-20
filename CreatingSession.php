<?php
/*
session_name('MyApp');
session_start([
    'cookie_lifetime'=>30
]);
$_SESSION['counter']= $_SESSION['counter'] ?? 0;
$_SESSION['counter']++;
echo $_SESSION['counter'];
*/

session_name('Myapp');
session_start([
    'cookie_lifetime'=>30
]);
$_SESSION['name']= "Rasel";
echo $_SESSION['name'];