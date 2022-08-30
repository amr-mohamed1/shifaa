<?php
$dsn = "mysql:host=localhost;dbname=shifaa";
$user="root";
$pass="";

try{
    $con = new PDO($dsn,$user,$pass);
}catch(PDOException $e){
    echo "error". $e->getMessage();
}
