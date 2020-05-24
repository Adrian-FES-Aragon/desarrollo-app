<link rel="Shortcut icon" href="../assets/vicon.png">
<link rel="stylesheet" type="text/css" href="../assets/estilo.php">
<title>ELIMINADO</title>

<?php
session_start();
$carry = $_SESSION['noCuenta'];

//Conexion con la base
require "conexion.php";
//Creamos la sentencia SQL y la ejecutamos
$sSQL = "DELETE FROM USUARIOS WHERE user='{$_POST["nombre"]}'";
$result = $conn->query($sSQL);

echo"<body class='sansserif'> 
<div align='center'>
<br><br><br><h1>Usuario eliminado exitosamente</h1><br>
<input type='button' style='font-size:.6em' onclick='location.href=`../consulta.php`' value='VER CAMBIOS' class='btn1'>
</body>

</html>";
?>

<style>

    body {
        
        background: url('../assets/back2.jpg') repeat center fixed;
        color: #ED5A3D;
        background-size: cover;
        font-size: 2em;
    }


    h1 {
        text-align: center;
    }

    .sansserif {
        font-family: Arial, Helvetica, sans-serif;
    }
</style>