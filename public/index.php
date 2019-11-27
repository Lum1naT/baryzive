<?php

require '../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;



$loader = new FilesystemLoader('../src/templates');
$twig = new Environment($loader);
include_once("../src/phpscripts/DatabaseManager.php");

echo $twig->render('first.html.twig', ['name' => 'John Doe',
    'occupation' => 'gardener']);


    echo findUserByEmail("K0jnCZ@gmail.com");
/*
$stmt = $conn->query('SELECT first_name, last_name FROM users');
foreach ($stmt as $row)
{
  echo $row['first_name'] . "\n";
  echo $row['last_name'] . "\n";
}

*/

#echo $_SERVER['SERVER_NAME'];
#echo $_SERVER['HTTP_HOST'];
#echo $_SERVER['REQUEST_URI'];

 ?>
