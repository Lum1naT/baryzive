<?php
include_once("../src/phpscripts/DatabaseManager.php");
echo "Hello World";

require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/src/templates');
$twig = new Environment($loader);

$stmt = $pdo->prepare('SELECT * FROM users WHERE first_name = ? AND lastname = ?');
$stmt->execute(["wow.", "Pepa"]);
$user = $stmt->fetch();

#echo $_SERVER['SERVER_NAME'];
#echo $_SERVER['HTTP_HOST'];
#echo $_SERVER['REQUEST_URI'];

 ?>
