<?php

session_start();

require '../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

include_once("assets/phpscripts/DatabaseManager.php");
include_once("assets/phpscripts/Route.php");






// ROUTING


// Add base route (startpage)
Route::add('/',function(){
  $loader = new FilesystemLoader('assets/templates');
  $twig = new Environment($loader);
  echo $twig->render('base.html.twig', ['name' => 'John Doe',
      'occupation' => 'gardener']);
    }, 'get');

    Route::add('/finder',function(){
      $loader = new FilesystemLoader('assets/templates');
      $twig = new Environment($loader);
      echo $twig->render('base.html.twig', ['search' => $_POST['search'],
          'occupation' => 'gardener']);
        }, 'post');


        Route::add('/finder',function(){
          $loader = new FilesystemLoader('assets/templates');
          $twig = new Environment($loader);
          echo $twig->render('base.html.twig');
            }, 'get');

// Simple test route that simulates static html file
Route::add('/register',function(){
  $loader = new FilesystemLoader('assets/templates');
  $twig = new Environment($loader);
  $postData = trim(file_get_contents('php://input'));
//Use internal errors for better error handling.
libxml_use_internal_errors(true);
//Parse the POST data as XML.
$xml = simplexml_load_string($postData);
var_dump($xml);
  $clientId = "500004357895-e8pjfbmghees1dfgf43gfvmm4o35tqph";
  $client = new Google_Client(['client_id' => $clientId]);  // Specify the CLIENT_ID of the app that accesses the backend
  $payload = $client->verifyIdToken($id_token);
  if ($payload) {
    $userid = $payload['sub'];
    // If request specified a G Suite domain:
    //$domain = $payload['hd'];

  } else {
    // Invalid ID token
  }
  echo $twig->render('register.html.twig', ['name' => 'John Doe',
      'occupation' => 'gardener']);
}, 'post');

Route::add('/register',function(){
  $loader = new FilesystemLoader('assets/templates');
  $twig = new Environment($loader);
  echo $twig->render('register.html.twig', ['name' => 'John Doe',
      'occupation' => 'gardener']);
}, 'get');

Route::add('/login',function(){
  $loader = new FilesystemLoader('assets/templates');
  $twig = new Environment($loader);
  echo $twig->render('login.html.twig', ['name' => 'John Doe',
      'occupation' => 'gardener']);
});

Route::add('/city-layout',function(){
  $loader = new FilesystemLoader('assets/templates');
  $twig = new Environment($loader);
  echo $twig->render('city-layout.html.twig', ['name' => 'John Doe',
      'occupation' => 'gardener']);
});

Route::add('/voucher-page',function(){
  $loader = new FilesystemLoader('assets/templates');
  $twig = new Environment($loader);
  echo $twig->render('voucher-page.html.twig', ['name' => 'John Doe',
      'occupation' => 'gardener']);
});

// Post route example
Route::add('/contact-form',function(){
    echo '<form method="post"><input type="text" name="test" /><input type="submit" value="send" /></form>';
},'get');

// Post route example
Route::add('/contact-form',function(){
    echo 'Hey! The form has been sent:<br/>';
    print_r($_POST);
},'post');

/*
* @param $barname (string, unique)
* @param $cameraname (string, unique)
*
*/
Route::add('/bar/(.*)/(.*)',function($barName, $cameraName){
  // TODO: check if $barName is in DB

    echo $barName.' is a great bar! <br/> You are viewing '. $cameraName . ' camera.' ;
});


  //TODO: count amount of bars in database and allow only pages 1 -> x; How many per page?

Route::add('/bars/page/([^0][0-9]*)',function($pagenumber){
    echo 'You are on page '.$pagenumber;
});

Route::run('/');



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
