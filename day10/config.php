<?php
    session_start();

$localhost = 'localhost';
$dbname = 'dbtest';
$user = 'root';
$password ='';


try{
    $connect = new PDO("mysql:host=$localhost; dbname=$dbname", $user, $password);
    echo "Connection Sucssesfull";
} catch(Exception $e){
    echo "Something went wrong";
}



?>