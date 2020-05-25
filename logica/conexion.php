<?php
$host_db="localhost";
//$user_db="root";
//$password_db="";
//$name_db="php_test";

$user_db="id13837169_crudb";
$password_db="]fY9M=ZY^WCo-N)%";
$name_db="id13837169_coders";

$conn=new mysqli($host_db,$user_db,$password_db,$name_db);

if(!$conn){
    die("No hay conexion RIP: ".mysqli_connect_error());
}