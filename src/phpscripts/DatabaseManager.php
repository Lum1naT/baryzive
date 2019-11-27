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
   $stmt = $conn->prepare('SELECT * FROM users WHERE email = ?');
   $stmt->execute([$email]);
   $user = $stmt->fetch();
   if($user){
<<<<<<< HEAD
     return "user found.";
=======
     return "User Found.";
>>>>>>> 1b64cbe72c19b78cb14b386d17a9698ef6ba9ee7
   } else {
     return "No user with $email email found.";
   }
   
 }



 ?>
