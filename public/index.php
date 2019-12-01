<?php

require '../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

include_once("../src/phpscripts/DatabaseManager.php");



$stmt = $pdo->prepare("INSERT INTO users (oauth_provider, oauth_uid, first_name, last_name, email, gender, locale, link) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
try {
    $pdo->beginTransaction();

        $stmt->execute(["test_oauth_provider", "test_oauth_uid", "David", "Vitek", "K0jnCZ@gmail.com", "M", "cs_CZ", "test_link"]);

    $pdo->commit();
}catch (Exception $e){
    $pdo->rollback();
    throw $e;
}

$loader = new FilesystemLoader('../src/templates');
$twig = new Environment($loader);

echo $twig->render('base.html.twig', ['name' => 'John Doe',
    'occupation' => 'gardener']);


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
