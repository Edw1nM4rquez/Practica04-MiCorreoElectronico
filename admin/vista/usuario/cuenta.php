<?php
session_start();
if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged']===FALSE){
    header("Location: /Practica04/public/vista/login.html");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/regla2.css">
    <script type="text/javascript" src="js/ajax.js"></script>
    <title>Cuenta</title>
</head>

<body>

    <div class="contenedor">

    <header id="main-header">
            <!--  <a link="index.html"><img src="img/logo.jpg" id="logo" alt="Reuniones"/></a>
           Pruebas de nuevos estilos -->
            <a id="logo-header" href="#">
                    <span class="site-name">User </span>
                    <span class="site-desc">Universidad Politecnica Salesiana</span>
                </a> <!-- / #logo-header -->

            <nav>
              <ul>
                <li><a href="cuenta.php"><img src="img/iconom.png" id="iconomenu"> Home</a></li>
                <li><a href="../../controladores/usuario/cerrarSesion.php" id="">Cerrar Sesion</a></li>
                <li><a href="crear_reuniones.php" id="">Crear Evento</a></li>
                <li><a href="seguridad.php" id="">Mis datos</a></li>
              </ul>
            </nav>
        </header>
        <br>
        <br>
        <br>
       <br>

       
        <form id="formulario01" action="../../controladores/usuario/reAsistir.php" method="POST" >
        <br>
        <label for="regis">Ingrese el codigo del evento que deceas asistir :</label>
                <input type="text" id="regis" name="regis" value="" placeholder="Ingrese el codigo" />
        
                <br>
                <label for="nombres">Nombres :</label>
                <input type="text" id="nombres" name="nombres" value="" placeholder="Ingrese sus nombres y apellidos" />
                <br>
<br>
                <!-- <input type="button" onclick="history.back()"  class="regresar" id="regresar" name="regresar" value="Regresar" 
                style="  background: linear-gradient(#FFDA63, #FFB940);
                         border: 0;
                            color: brown;
                             opacity: 0.8;
                                 cursor: pointer;
                                    border-radius: 25px;
                                     height: 40px;
                                     width:10%;
                                         text-align: center;" /> -->

                <input type="submit" class="ingresar" id="crear" name="crear" value="Aceptar" 
                style="  background: linear-gradient(#FFDA63, #FFB940);
                         border: 0;
                            color: brown;
                             opacity: 0.8;
                                 cursor: pointer;
                                    border-radius: 25px;
                                     height: 40px;
                                     width:10%;
                                         text-align: center;" />
             </form> 
             <br>
                <br>
        <br>
        
        <label for="nombres">Buscar Evento:</label>
        <form  onsubmit="return buscarPormotivo()">
                <input type="text" id="cedula" name="cedula" value="" placeholder="Busqueda por motivo">
                <input type="button" id="buscar" name="buscar" value="Buscar" onkeypress="buscarPormotivo()">
        </form>
        <br>
        <div id="informacion"><b>Eventos</b>

        <br>
        <br>
        <br>
        <table style="width:100% ; background-color:rgba(75, 72, 69, 0.705) ; color:white">
            <tr>
                <th>Codigo</th>
                <th>Asunto</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Lugar</th>
                <th>Cordenadas</th>
                <th>Remitente</th>
                <th>Motivos</th>
                <th>Observaciones</th>
                <th>Fecha Creacion</th>
                <th>Estado Reunion</th>
                
            </tr>
            <?php
                    include '../../../config/conexionBD.php';
                    $sql = "SELECT * FROM reunion ; " ;
                    $result = $conn->query($sql);





                    if ($result->num_rows > 0) {

                            $sql = "SELECT * FROM reunion ORDER BY re_fecha_creacion DESC; " ;
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo " <td>" . $row["re_codigo"] . "</td>";
                                echo " <td>" . $row["re_fecha_re"] . "</td>";
                                echo " <td>" . $row['re_tema'] ."</td>";
                                echo " <td>" . $row['re_hora'] . "</td>";
                                echo " <td>" . $row['re_lugar'] . "</td>";
                                echo " <td>" . $row['re_coordenada'] . "</td>";
                                echo " <td>" . $row['re_remitente'] . "</td>";
                                echo " <td>" . $row['re_motivo'] . "</td>";
                                echo " <td>" . $row['re_observacion'] . "</td>";
                                echo " <td>" . $row['re_fecha_creacion'] . "</td>";
                                echo " <td>" . $row['re_eliminada'] . "</td>";
                                
                                echo "</tr>";
                                
                            }

                    } else {
                        echo "<tr>";
                        echo " <td colspan='7'> No existen eventos registradas en el sistema </td>";
                        echo "</tr>";
                        }
                    $conn->close();
            ?>
        </table>
        <br>
        <br>
        <br>
<!-- vamos a ver si funciona-->
<table style="width:50% ; background-color:rgba(75, 72, 69, 0.705) ; color:white">
            <tr>
                <th>Codigo Reunion</th>
                <th>Asistentes a las reuniones</th>
               
                
            </tr>
            <?php
                    include '../../../config/conexionBD.php';
                    $sql = "SELECT * FROM reunion where re_eliminada= 'N' ; " ;
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                            $sql = "SELECT * FROM registro; " ;
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo " <td>" . $row["re_usu_re_codigo"] . "</td>";
                                echo " <td>" . $row["re_usu_asistente"] . "</td>";
                      
                                echo "</tr>";
                                
                            }

                    } else {
                        echo "<tr>";
                        echo " <td colspan='7'> No existen confirmaciones registrados en el sistema </td>";
                        echo "</tr>";
                        }
                    $conn->close();
            ?>
        </table>
        <br>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    

    <footer id="main-footer">
                Edwin Fernando Marquez Lozado &nbsp; Universidad Politecnica Salesiana &#128274; <a href="mailto:emarquezl@est.ups.edu.ec">emarquezl@est.ups.edu.ec</a> 
                &nbsp; <a href="tel:+0983364721">(593) 0983364721</a>  <br> &nbsp;
                &#169; Todos los derechos reservados
            </footer>
   

</body>

</html>