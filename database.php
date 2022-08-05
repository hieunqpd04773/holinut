<?php
$dsn="mysql:host=localhost; dbname=Holinut";
$user="root";
$pass="";

try{
    $db=new PDO($dsn,$user,$pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $ex){
    
}