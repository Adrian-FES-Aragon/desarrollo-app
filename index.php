<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="assets/estilo.php">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="Shortcut icon" href="assets/vicon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body class="body1">
    <?php
    include("assets/header.php");
    ?>
    <header class="shield">

        <svg class="bi bi-shield-lock-fill  " width=" 5em " height=" 5em " viewBox=" 0 0 16 16 " fill=" white " xmlns=" http://www.w3.org/2000/svg">
            <path fill-rule=" evenodd " d=" M5.187 1.025C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 012.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 01-2.418 2.3 6.942 6.942 0 01-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908
        6.908 0 01-1.007-.586 11.192 11.192 0 01-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 012.415 1.84a61.11 61.11 0 012.772-.815zm3.328 6.884a1.5 1.5 0 10-1.06-.011.5.5 0 00-.044.136l-.333 2a.5.5 0 00.493.582h.835a.5.5 0 00.493-.585l-.347-2a.5.5
        0 00-.037-.122z " clip-rule=" evenodd " />
        </svg>
        <h2 class="h21" style="margin-left: 15px">LOGIN</h2>
    </header>
    <div class=" div1 " style=" margin-top:50px ">
        <div class=" div2 ">
            <div align="center">
                <form id="form1" method="POST" action="./logica/verificacion.php" class="form1">
                    <div class="div2">
                        <label class="data">Usuario</label>
                        <input type="text " name="txtusuario" class="text1 data" placeholder=" Nombre de usuario " required/>
                    </div>
                    <div class="div2">
                        <label class="data">Contraseña</label>
                        <input type="password" name="txtpassword" class="text1 data" placeholder=" Contraseña de usuario " required/>
                    </div>
                    <br>
                    <input type="submit" value="INICIAR SESION" class="btn1" />
                    <input type="button" onclick="location.href='registro.php'" value="REGISTRARSE" class="btn1">            

                </form>
            </div>
        </div>
    </div>

</body>

</html>