<?php

session_start();

require '../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Aws\Ses\SesClient;
use Aws\Exception\AwsException;

include_once("assets/phpscripts/DatabaseManager.php");
include_once("assets/phpscripts/Route.php");



function generateRandomString($length, $characterSwitch) {

   switch ($characterSwitch) {
     case 1:
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        break;
     case 2:
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        break;
     case 3:
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        break;
      case 4:
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        break;
      case 5:
        $characters = '0123456789';
        break;
      case 6:
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        break;
      case 7:
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        break;
     default:
       break;
   }

     $charactersLength = strlen($characters);
     $randomString = '';
     for ($i = 0; $i < $length; $i++) {
         $randomString .= $characters[rand(0, $charactersLength - 1)];
     }
     return $randomString;
 }

// ROUTING TESTS


Route::add('/mailtest',function(){
  $email = "vitekd@stredniskola.cz";
  mail($email, "Baryživě.cz potvrzení registrace", "Zde je tvůj autentikační kód: "."XXXXXX");
  echo "Mail sent to ".$email.".";
});


function generateRandomString($length, $characterSwitch) {

  switch ($characterSwitch) {
    case 1:
       $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
       break;
    case 2:
       $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
       break;
    case 3:
       $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
       break;
     case 4:
       $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
       break;
     case 5:
       $characters = '0123456789';
       break;
     case 6:
       $characters = 'abcdefghijklmnopqrstuvwxyz';
       break;
     case 7:
       $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
       break;
    default:
      break;
  }
}

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
  include_once("assets/phpscripts/DatabaseManager.php");
  include_once("assets/phpscripts/Mailman.php");


  $loader = new FilesystemLoader('assets/templates');
  $twig = new Environment($loader);
  if ($_POST["ctrl"] == "regi147" && isset($_POST['termsAgreement'])) {
    $email = htmlspecialchars(trim($_POST["userEmail"]));
    $password = htmlspecialchars(trim($_POST["userPassword"]));
    $passwordConfirm = htmlspecialchars(trim($_POST["userPasswordConfirm"]));
    $newsletterAgreement = htmlspecialchars(trim($_POST["newsletterAgreement"]));
/*
    $hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';

if (password_verify('rasmuslerdorf', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
*/
    if ($password == $passwordConfirm) {
      $options = [
    'cost' => 12,
];
  $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);
    echo $hashedPassword."<br>";




    $host = DB_HOST;
    $db   = DB_DATABASE;
    $username = DB_USERNAME;
    $password = DB_PASSWORD;


    $dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";

    try{
     // create a PostgreSQL database connection
     $pdoInstance = new PDO($dsn);

     // display a message if connected to the PostgreSQL successfully
     if($pdoInstance){
       echo "<script>console.log('xo');</script>";

     }

    }catch (PDOException $e){
     // report error message
     echo $e->getMessage();
    }





              $stmt = $pdoInstance->prepare("INSERT INTO users (oauth_provider, email, password, authentication_code, role, account_status) VALUES (?, ?, ?, ?, ?, ?)");
              echo "-prepared.<br>";

      try {
          $pdoInstance->beginTransaction();
          $authenticationCode = generateRandomString(6,2);
          $stmt->execute(["email", $email, $hashedPassword, $authenticationCode, "1", "0"]);
          echo "-executed.<br>";
          $pdoInstance->commit();
          echo "-commited.<br>";
      }catch (Exception $e){
          $pdoInstance->rollback();
          echo "-rolling back.<br>";
          throw $e;
      }

      echo $authenticationCode;
     mail($email, "Baryživě.cz potvrzení registrace", "Zde je tvůj autentikační kód: ".$authenticationCode);
    //  $url =  "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    //  header('Location: https://www..com/');
  } else {
    $_SESSION["passwordConfirmError"] = true;
    echo "Passwords dont match";
  }

  } else {
    $_SESSION["termsAgreementError"] = true;
    echo "Agree with terms, please.";
  }
  /*
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
      */
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

Route::add('/customer-admin-account',function(){
  $loader = new FilesystemLoader('assets/templates');
  $twig = new Environment($loader);
  echo $twig->render('customer-admin-account.html.twig', ['name' => 'John Doe',
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

Route::add('/fblogin',function(){
  $fb = new Facebook\Facebook([
    'app_id' => '752564898557063', // Replace {app-id} with your app id
    'app_secret' => 'e533ba2fc0fd1c72d72ebbb8c8feb8d5',
    'default_graph_version' => 'v3.2',
    ]);

  $helper = $fb->getRedirectLoginHelper();

  $permissions = ['email']; // Optional permissions
  $loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);

  echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
});

Route::add('/fblogin',function(){
  $fb = new Facebook\Facebook([
    'app_id' => '752564898557063', // Replace {app-id} with your app id
    'app_secret' => 'e533ba2fc0fd1c72d72ebbb8c8feb8d5',
    'default_graph_version' => 'v3.2',
    ]);

  $helper = $fb->getRedirectLoginHelper();

  $permissions = ['email']; // Optional permissions
  $loginUrl = $helper->getLoginUrl('https://dom.baryzive.cz/fb-callback.php', $permissions);

  echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!!!</a>';
});

/*
* @param $barname (string, unique)
* @param $cameraname (string, unique)
*
*/
Route::add('/bar/(.*)/(.*)',function($barName, $cameraName){
  // TODO: check if $barName is in DB

    echo $barName.' is a great bar!!! <br/> You are viewing '. $cameraName . ' camera.' ;
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
