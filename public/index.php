<?php
include_once("../src/phpscripts/DatabaseManager.php");
echo "Hello World";

require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/src/templates');
$twig = new Environment($loader);


$stmt = $pdo->query('SELECT first_name, last_name FROM users');
foreach ($stmt as $row)
{
  echo $row['first_name'] . "\n";
  echo $row['last_name'] . "\n";
}

#echo $_SERVER['SERVER_NAME'];
#echo $_SERVER['HTTP_HOST'];
#echo $_SERVER['REQUEST_URI'];

 ?>
