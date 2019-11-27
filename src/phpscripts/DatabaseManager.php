<?php

/**
 *
 */
class DatabaseManager
{

  define("DB_HOST", "baryzive.ciu3ar9isoci.eu-west-1.rds.amazonaws.com");
  define("DB_USERNAME", "Luminat");
  define("DB_PASSWORD", "baryzive42");
  define("DB_DATABASE", "baryzivedb");

  public $conn;
  private $host = DB_HOST;
  private $db   = DB_DATABASE;
  private $username = DB_USERNAME;
  private $password = DB_PASSWORD;


  $dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";





  try{
   // create a PostgreSQL database connection
   $conn = new PDO($dsn);

   // display a message if connected to the PostgreSQL successfully
   if($conn){
   echo "Connected to the <strong>$db</strong> database successfully!";


   }
  }catch (PDOException $e){
   // report error message
   echo $e->getMessage();
  }


  function findUserByEmail($email){
     $stmt = $this->$conn->prepare('SELECT first_name, last_name FROM users WHERE email = ?');
     $stmt->execute([$email]);
     $user = $stmt->fetch();
     if($user){
       return "user found.";
     } else {
       return "No user with $email email found.";
     }

   }

}



 ?>
