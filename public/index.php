<?php

require '../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

include_once("../src/phpscripts/DatabaseManager.php");


$loader = new FilesystemLoader('../src/templates');
$twig = new Environment($loader);

echo $twig->render('base.html.twig', ['name' => 'John Doe',
    'occupation' => 'gardener']);





    try {
      $stmt = $pdo->prepare("INSERT INTO users (oauth_provider, oauth_uid, first_name, last_name, email, gender, locale, link, role) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->execute(["intern", "42069", "David", "Vítek", "K0jnCZ@gmail.com", "M", "cz_cs",  "customlink", "1"]);
        echo "Inserted successfully.";
    }catch (PDOException $e){
        throw $e;
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
