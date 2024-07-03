<?php
define('HOST', 'localhost');
define('USER', 'dani');
define('PASS', '.Dn4FK6jqKfa7dQT');
define('BASE', 'cadastro');

$conn = new mysqli(HOST, USER, PASS, BASE);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

