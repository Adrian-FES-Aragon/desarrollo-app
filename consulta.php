<?php
session_start();
$carry = $_SESSION['noCuenta'];

if (!isset($carry)) {
    header("Status: 301 Moved Permanently");
    header("Location: https://crud-fesa.000webhostapp.com/index.php");
    //header("Location: index.php");
    exit;
} else {
    echo '<link rel="Shortcut icon" href="assets/vicon.png">
    <link rel="stylesheet" type="text/css" href="assets/estilo.php">
    <title>Consulta</title>';

    include("assets/header.php");
    echo "<br>";
    echo "<p style='margin-left:5%'>Bienvenido: $carry</p>";


    //se usa el require para requerir obligatoriamente el archivo conexion 
    //no es requisito obligatorio, independiente de los erroes
    require("conexion.php");
    //$conexion = new mysqli('127.0.0.1', 'root', '', 'php_test');
    //generar el query
    $consulta_sql = "SELECT * FROM USUARIOS";
    //mandar el query por medio de la conexion y almacenaremos en una variable
    $resultado = $conn->query($consulta_sql);
    //retorna el numero de filas del resultado. Si encuentra más de uno lo usamos para imprimir el resultado en nuestra tabla
    $count = mysqli_num_rows($resultado);

    if ($count > 0) {
        echo "<h1 class='h21'>REGISTROS</h1>";

        echo "<body  class='sansserif'>
    <div align='center' style='overflow-x:auto'>
    <table >
    <tr>
    <th>ID</th>
    <th>Usuario</th>
    <th>Nombre completo</th>
    <th>Correo</th>
    <th>Contraseña</th>
    <th>Fecha de registro</th>
    <th>Nivel de permisos</th>
   
    ";

        //aqui se pintarian los registros de la BD 
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $row['id'] .         "</td>";
            echo "<td>" . $row['user'] .     "</td>";
            echo "<td>" . $row['nombre'] .     "</td>";
            echo "<td>" . $row['correo'] .     "</td>";
            echo "<td>" . $row['password'] .   "</td>";
            echo "<td>" . $row['date'] .       "</td>";
            echo "<td>" . $row['perm'] .       "</td>";
            echo "</tr>";
        }
        echo "</table><br>";

        echo "<input type='button' style='font-size:.6em' onclick='location.href=`registro.php`' value='AGREGAR USUARIO' class='btn1'> ";
        echo "<input type='button' style='font-size:.6em' onclick='location.href=`eliminar.php`' value='ELIMINAR USUARIO' class='btn1'> <br>";
    } else {
        echo "<h1 style='color:red'>  Sin ningun registro</h1>";
    }

    echo "<br>";

    echo "  <div align='center '><input type='button' style='font-size:.6em' onclick='location.href=`./logica/salir.php`' value='SALIR' class='btn1'>  </div></body>";


    echo "
    <style>
    a {
        color: white;
    }

    body {
        background: url('assets/back2.jpg') repeat center fixed;
        color: white;
        background-size: cover;
        font-size: 1.5em;
        
    }

    table {
        text-align: center;
        border-collapse: collapse;
        width: 80%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    th {
        text-align: center;
        background-color: black;
        padding: 15px 10px;
    }

    td {
        padding: 5px 25px;
        vertical-align: center;
        border-bottom: 1px solid #ddd;
        border-radius: 15px 50px;
        box-shadow: 2px 2px 2px white;
    }

    h1 {
        text-align: center;
    }

    tr:hover {
        background-color: black;
    }

    tr:nth-child(even) {
        background-color: #636468;
    }

    .sansserif {
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

";
}
