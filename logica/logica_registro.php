<link rel="stylesheet" type="text/css" href="../assets/estilo.php">
<link rel="Shortcut icon" href="../assets/vicon.png">
<?php
require "conexion.php";
//conexion a la DB

mysqli_set_charset($conn, 'utf8');
//declaracion de variables para formulario
$form_pass= $_POST ['password'];
//validacion si el usuario ya esta registrado
$buscarUsuario="SELECT * FROM usuarios WHERE user = '$_POST[nombre_usuario]'";
//mandar al query
$result=$conn->query($buscarUsuario);
//saber si tenemos un resultado y se almacena en una variable
$count=mysqli_num_rows($result);
//se hace la validacion del resultado para saber si esta registrado 
if ($count == 1 ) { //si se encentra algun reegistro
    echo"<body class='sansserif'> 
    <title>ERROR</title>
    <div align='center'>
    <h1><br><br><br>El Usuario:  ".$_POST['nombre_usuario']. " 
    <br>
    Ya esta registrado</h1> 
    <br>
    <input type='button' style='font-size:.6em' onclick='location.href=`../registro.php`' value='NUEVO REGISTRO' class='btn1'> 
    
    </div>
    </body>";
    
}else{//se registra al usuario
    //query para mandar el registro
    mysqli_query($conn, "INSERT INTO USUARIOS (
    user,
    nombre, 
    correo,
    password)
    VALUES(
    '$_POST[nombre_usuario]',
    '$_POST[nombre_completo]',
    '$_POST[email]',
    '$_POST[password]'
    
    )");
    echo"<body class='sansserif'>
    <title>REGISTRADO</title>
    <div align='center'>
    <h1> <br><br><br>Usuario registrado exitosamente</h1> <br>
    <h2>Bienvenido: ".$_POST['nombre_usuario']. "</h2> <br>
    <input type='button' style='font-size:.6em' onclick='location.href=`../index.php`' value='INICIAR SESION' class='btn1'>     
    </div>
    </body>
    ";
}
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