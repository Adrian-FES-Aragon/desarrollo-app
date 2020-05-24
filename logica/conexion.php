<?php
$host_db="localhost";
$user_db="root";
$password_db="";
$name_db="php_test";

$conn=new mysqli($host_db,$user_db,$password_db,$name_db);

if(!$conn){
    die("No hay conexion RIP: ".mysqli_connect_error());
}