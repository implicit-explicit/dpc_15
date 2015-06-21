<?php

echo "Hello PHPConf 15!";

phpinfo();

$dsn = "mysql:host=mysql;dbname=phpconf;charset=utf8";
$opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);

$pdo = new PDO($dsn, "phpconf", "phpconf", $opt);

