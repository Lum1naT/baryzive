<?php
echo "DB manager included successfuly.";
include_once("../../loginCredentials.php");

$host = DB_HOST;
$port = DB_PORT;
$db   = DB_DATABASE;
$user = DB_USERNAME;
$pass = DB_PASSWORD;
$charset = 'utf8mb4';

$dsn = "pgsql:host=$host;port=$port;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
     echo "Connected successfuly.";
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
 ?>
