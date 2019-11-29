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
  $stmt = $pdoInstance->query('SELECT first_name, last_name FROM users');
  foreach ($stmt as $row)
  {
    echo $row['first_name'] . "\n";
    echo $row['last_name'] . "\n";
  }
 }



 ?>
