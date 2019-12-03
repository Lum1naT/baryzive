<?php

define("DB_HOST", "baryzive.ciu3ar9isoci.eu-west-1.rds.amazonaws.com");
define("DB_USERNAME", "Luminat");
define("DB_PASSWORD", "baryzive42");
define("DB_DATABASE", "baryzivedb");

$host = DB_HOST;
$db   = DB_DATABASE;
$username = DB_USERNAME;
$password = DB_PASSWORD;


$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";

try{
 // create a PostgreSQL database connection
 $pdo = new PDO($dsn);

 // display a message if connected to the PostgreSQL successfully
 if($pdo){
 echo "Connected to the <strong>$db</strong> database successfully!";


 }
}catch (PDOException $e){
 // report error message
 echo $e->getMessage();
}


function listAllUsers($pdoInstance){
  $stmt = $pdoInstance->query('SELECT * FROM users');
  foreach ($stmt as $row)
  {
    echo $row['id'] . "\n";
    echo $row['oauth_provider'] . "\n";
    echo $row['oauth_uid'] . "\n";
    echo $row['email'] . "\n";
    echo $row['first_name'] . "\n";
    echo $row['last_name'] . "\n";
    echo $row['gender'] . "\n";
    echo $row['locale'] . "\n";
    echo $row['link'] . "\n";
    echo $row['created'] . "\n";
    echo $row['modified'] . "\n";
  }
 }


 function createNewUser($pdoInstance, $oauth_provider, $oauth_uid, $first_name, $last_name, $email, $gender, $locale, $link){
  /*

          $stmt = $pdo->prepare("INSERT INTO users (oauth_provider, oauth_uid, first_name, last_name, email, gender, locale, link, role, account_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  try {
      $pdo->beginTransaction();

      $stmt->execute(["intern", "42069", "David", "Vítek", "K0jnCZ@gmail.com", "M", "cz_cs",  "customlink", "1", "0"]);

      $pdo->commit();
  }catch (Exception $e){
      $pdo->rollback();
      throw $e;
  }
  */


 }



 ?>
