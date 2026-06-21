<?php

$conn = mysqli_connect('localhost', 'root', '', 'huajolotitlan');

if (!$conn) {
    die("<strong style='color:red;'>Error de conexión:</strong><br><em>" . mysqli_connect_error() . "</em>");
}

$Cookie = [
    'expires'  => time() + (86400 * 30), 
    'path'     => '/',
    'secure'   => false,  
    'httponly' => true,
    'samesite' => 'Strict'
];
?> 