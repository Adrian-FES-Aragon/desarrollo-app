<?php
session_start();
session_destroy();
header("Status: 301 Moved Permanently");
//header("Location: https://crud-fesa.000webhostapp.com/index.php");
header("Location: ../index.php");
exit(); //buena practica
?>
