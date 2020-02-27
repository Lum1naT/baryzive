<?php

/*

Some dummy syntax incase this link is not avalible
https://phpdelusions.net/pdo_examples/
https://phpdelusions.net/

$sql = "UPDATE users SET name=?, surname=?, sex=? WHERE id=?";
$stmt= $pdo->prepare($sql)->execute([$name, $surname, $sex, $id]);

$data = $pdo->query("SELECT * FROM users")->fetchAll();
// and somewhere later:
foreach ($data as $row) {
   echo $row['name']."<br />\n";
}

$stmt = $pdo->prepare("SELECT * FROM users WHERE id=?");
$stmt->execute([$id]);
$user = $stmt->fetch();

$sql = "INSERT INTO users (name, surname, sex) VALUES (?,?,?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$name, $surname, $sex]);

*/
define("DB_HOST", "baryzive.ciu3ar9isoci.eu-west-1.rds.amazonaws.com");
define("DB_USERNAME", "Luminat");
define("DB_PASSWORD", "baryzive42");
define("DB_DATABASE", "baryzivedb");





 function authenticateUser($pdoInstance, $email, $authenticationCode){
   // TODO: check if $email and $authenticationCode match > done mby?
   $stmt = $pdoInstance->query('SELECT authentication_code FROM users WHERE email = ?');
   $stmt->execute([$email]);
   $user = $stmt->fetch();
   if($user['authentication_code'] == $authenticationCode){
     return true;

   } else {
     return false;
   }
 }

 /*
 *  @name generateRandomString
 *
 * @returns string
 *
 * @parameters
 *  $length [int]
 *  $characterSwitch [int (7)]
 *
 *
 */

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







 ?>
