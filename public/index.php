<?php

session_start();

require '../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

include_once("assets/phpscripts/DatabaseManager.php");

$loader = new FilesystemLoader('assets/templates');
$twig = new Environment($loader);

echo $twig->render('base.html.twig', ['name' => 'John Doe',
    'occupation' => 'gardener']);

    $request = $_SERVER['REQUEST_URI'];
    switch ($request) {
    case '/' :
    echo "/index.php";
      //  require __DIR__ . '/views/index.php';
        break;
    case '' :
    echo " index.php";
      //  require __DIR__ . '/views/index.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
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
