<?php  
require "../conexion.php";
session_start();
$user=$_POST["txtusuario"];
$pass=$_POST["txtpassword"];

$query= "SELECT COUNT(*) AS contar FROM usuarios WHERE user ='$user' and PASSWORD = '$pass'";

$consulta=mysqli_query($conn, $query);

$array=mysqli_fetch_array($consulta);

if($array['contar'] > 0){
    //header("location: pagina.html")
    $_SESSION['noCuenta']=$user;
    header("Status: 301 Moved Permanently");
    header("Location: https://crud-fesa.000webhostapp.com/consulta.php");
    //header("Location:../consulta.php");
    exit;
}
else {
    header("Status: 301 Moved Permanently");
    header("HTTP/1.0 404 Not Found");
    exit;
}
?>