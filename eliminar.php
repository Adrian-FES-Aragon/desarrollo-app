<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="./assets/estilo.php">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="Shortcut icon" href="assets/vicon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
</head>

<body class="body1">
    <?php
    session_start();
    $carry = $_SESSION['noCuenta'];
    if (!isset($carry)) {
        header("location: index.php");
    } else {
    
    include("./assets/header.php");
    //$aVar = mysqli_connect('localhost','root','','php_test');
    echo '
    <header class="shield">
        <svg class="bi bi-person-dash" width="5em" height="5em" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM1.022 13h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002.002zM6 7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0zm2 2.5a.5.5 0 01.5-.5h4a.5.5 0 010 1h-4a.5.5 0 01-.5-.5z" clip-rule="evenodd" />
        </svg>
        <h2 class="h21" style="margin-left: 30px">ELIMINAR</h2>
    </header>
    <div class=" div1 " style=" margin-top:50px ">
    <div  align="center">
';

    //Conexion con la base ---------------
    require "./logica/conexion.php";

    echo "<FORM METHOD='POST' ACTION='./logica/logica_eliminar.php' class='form1 data'> Usuario a eliminar: <br >
        <div align='center'>";
    //Creamos la sentencia SQL y la ejecutamos
    $sSQL = "SELECT user FROM usuarios ORDER BY id";
    $result = $conn->query($sSQL);

    //Mostramos los registros en forma de menú desplegable
    echo '<select name="nombre" class="text1 data2 ">';
    while ($row = mysqli_fetch_array($result)) {
        echo '<option>' . $row["user"];
    }
    mysqli_free_result($result);
    echo '<br>
    <INPUT TYPE="SUBMIT" value="BORRAR" class="btn1" style="font-size:.6em">
    <input type="button" style="font-size:.6em" onclick="location.href=`./consulta.php`" value="REGRESAR" class="btn1">
        </div>
        </form>';
}
    ?>
    </select>
    </div>
    </div>
</body>

</html>