<?php 

session_start();
$username = cooperaj; 
$password = 09cooperA; 
$host = "db4free.net:3306"; 
$dbname = astonevents1997; 

$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 

try 
{ 
    $db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options); 
} 
catch(PDOException $ex) 
{ 
    die("Failed to connect to the database MUHAHAHAHHAH: " . $ex->getMessage()); 
} 

?>
