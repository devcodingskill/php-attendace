<!-- setup connection -->
<?php
//$host ='127.0.0.1' we can do this way;
$host ='localhost';
//$host='127.0.0.1';
$db = 'attendance_db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
//data souce name
// " driver : host"
$dsn = "mysql:host=$host;dbname=$db;charest=$charset";


//add them to try- catch
try{
   $pdo = new PDO($dsn,$user,$pass);
  // echo var_dump($pdo->);

   echo 'Hello database';

   $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $ex) {
  //echo 'error';
    throw new PDOException($ex->getMessage());
}
//after we got the connection 
require_once 'crud.php';
//make new object and passing connention object to that class ctor
$crud =new crud($pdo);
?>