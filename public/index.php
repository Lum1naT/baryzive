<?php

session_start();

require '../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

include_once("assets/phpscripts/DatabaseManager.php");

$loader = new FilesystemLoader('assets/templates');
$twig = new Environment($loader);


// ROUTING


    $request = $_SERVER['REQUEST_URI'];
    if(strpos($request, "?") !== false ){
      $splitUrl = explode('?',$request);
      $request = $splitUrl[0];
      $getParam = $splitUrl[1];
      if(strpos($getParam, "&") !== false ){

      $splitGet = explode('&',$getParam);
        $splitVariable = explode('=',$splitGet);



    }


    }


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
        echo $splitGet[0];
        break;

    default:
        http_response_code(404);
        echo $twig->render('error.html.twig', ['name' => 'John Doe',
            'occupation' => 'gardener']);
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
