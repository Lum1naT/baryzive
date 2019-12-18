<?php

session_start();

require '../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

include_once("assets/phpscripts/DatabaseManager.php");
include_once("assets/phpscripts/router.php");

$loader = new FilesystemLoader('assets/templates');
$twig = new Environment($loader);


// ROUTING


    // = $_SERVER['REQUEST_URI'];


    route('/', function () {
        return "Hello World";
    });

    route('/register', function () {
        return "Hello form the register route";
    });

    $action = $_SERVER['REQUEST_URI'];
    dispatch($action);






/*
    switch ($request) {
    case '/' :
    echo $twig->render('base.html.twig', ['name' => 'John Doe',
        'occupation' => 'gardener']);
        break;

    case '' :
    echo $twig->render('base.html.twig', ['name' => 'John Doe',
        'occupation' => 'gardener']);
        break;

    case '/register' :
    echo $twig->render('register.html.twig', ['name' => 'John Doe',
        'occupation' => 'gardener']);


        break;

    default:
        http_response_code(404);
        echo $twig->render('error.html.twig', ['name' => 'John Doe',
            'occupation' => 'gardener']);
            break;
}
*/


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
