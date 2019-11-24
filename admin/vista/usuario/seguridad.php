<!DOCTYPE html>
<html lang="es">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script type="text/javascript" src="js/validacion.js"></script>
        <link rel="stylesheet" href="css/stylesF.css">
        <title>Formulario</title>
</head>


<body>
        

        <form id="formulario01" action="../controladores/login.php" method="POST"
                onsubmit="return validarCamposObligatorios()" >
            
                <br>
                <br>
                <label for="correo">Correo electrónico :</label>
                <input type="email" id="correo" name="correo" value="" placeholder="&#9993;Ingrese su correo electrónico
..." onkeypress="ValidarCorreo(event,'mensajeCorreo',this)" />
                <br>
                <span id="mensajeCorreo"></span>
                <br>
                <br>
                <label for="contrasenia">Contraseña :</label>
                <input type="password" id="contrasenia" name="contrasena" value="" placeholder="&#128272;Ingrese su contrasenia
..." onkeypress="ValidarContra(event,'mensajeContra',this)" />
                <br>
                <span id="mensajeContra"></span>
                <br>
                <br>
               
                
                <div class="form_boton"> 
                                <input type="button" onclick="history.back()"  class="regresar" id="regresar" name="regresar" value="Regresar" />

                        <input type="submit" class="ingresar" id="crear" name="crear" value="Aceptar" />

                        <a href="crear_usuariop.php"><input type="button"  class="regresar" id="registrar" name="registrar" value="Registrarce" /></a>
                </div>

        </form>
        
</body>

</html>