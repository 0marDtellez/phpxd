<?php
 function connect(){
    $host = "localhost";
    $user = "root";
    $pass = "password";
    $database = "alumnos"
 try{
    $pdo = new PDO('mysql:host='.$host
        .'dbname='
        .$database,
        $user,
        $pass);
    $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 return $pdo;
 }catch(PDOException $e){
    die($e->getmessage())
 }
}
?>