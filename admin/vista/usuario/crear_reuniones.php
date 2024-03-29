<?php
session_start();
if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged']===FALSE){
    header("Location: /Practica04/public/vista/login.html");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script type="text/javascript" src="js/validacion.js"></script>
        <link rel="stylesheet" href="css/stylesF1.css">
        <link rel="icon" type="image/png"  href="img/icono.png">
        <title>Formulario</title>
</head>


<body>
        

        <form id="formulario01" action="../../controladores/usuario/crear_evento.php" method="POST" >
                <h1>CREAR REUNIONES</h1>
                <br>
                <br>
                <label for="asunto">Asunto :</label>
                <input type="text" id="asunto" name="asunto" value="" placeholder="Ingrese el asunto de la reunion" />
                <br>
                <br>
                <label for="fecha">Fecha :</label>
                <input type="date" id="fecha" name="fecha" value="" placeholder="Ingrese la fecha del evento" />
                <br>
                <br>
                <label for="hora">Hora :</label>
                <input type="time" id="hora" name="hora" value="" placeholder="Ingrese la hora del evento"  />
                
                <br>
                <br>
                <label for="lugar">Lugar :</label>
                <input type="text" id="lugar" name="lugar" value="" placeholder="Ingrese el lugar de recepcion" />
                <br>
                <br>
                <label for="cordenadas">Cordenadas :</label>
                <input type="text" id="cordenadas" name="cordenadas" value="" placeholder="Ingrese las coordenadas "/>
                
                <br>
                <br>
                <label for="remitente">Remitente :</label>
                <input type="text" id="remitente" name="remitente" value="" placeholder="Ingrese su nombre" />

                <br>
                <br>
                <label for="motivos">Motivos :</label>
                <input type="text" id="motivos" name="motivos" value="" placeholder="Ingrese el motivo de la creacion del evento" />
               
                <br>
                <br>
                <label for="observaciones">Observaciones :</label>
                <input type="text" id="observaciones" name="observaciones" value="" placeholder="Ingrese las observaciones" />
                <br>
                <span id="mensajeContra"></span>
                <br>
                <br>
               
                
                <div class="form_boton"> 
                        <input type="button" onclick="history.back()"  class="regresar" id="regresar" name="regresar" value="Regresar" />
                        <input type="submit" class="ingresar" id="crear" name="crear" value="Aceptar" />
                </div>

        </form>
        
</body>

</html>