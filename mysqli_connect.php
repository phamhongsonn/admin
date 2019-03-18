<?php
DEFINE('DB_USER','root');
DEFINE('DB_PASSWORD','root');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','onlineshop');
DEFINE('DB_PORT', 8889);
$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME,DB_PORT);
$conn->set_charset("utf8")
?>