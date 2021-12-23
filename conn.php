<?php 

$host= 'localhost';
$db='project_db';
$user='root';
$pass='';
$charset ='utf8mb4';

$dsn= "mysql:host=$host;dbname=$db;charset=$charset";

try{
    $pdo= new PDO($dsn,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '<p>Database Active</p>';
}catch(PDOException $e){
       throw new PDOException($e ->getMessage());

}

require_once 'users.php';
require_once 'crud.php';
 $player = new player($pdo);
 $crud = new crud($pdo);
 $player->createuser("admin","@dministrat0r");

?>




