<?php

echo "Hello PHPConf 15!";

$dsn = "mysql:host=mysql;dbname=phpconf;charset=utf8";
$opt = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);

try { 
	$db = new PDO($dsn, "phpconf", "phpconf", $opt);
} catch(PDOException $ex) {
	die('Unable to connect to database!');
}

echo '<br />';
echo 'Connected to database';

phpinfo();
