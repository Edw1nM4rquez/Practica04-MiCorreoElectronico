<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/regla2.css">
    <title>Cuenta</title>
</head>

<body>

    <div class="contenedor">

    <header id="main-header">
            <!--  <a link="index.html"><img src="img/logo.jpg" id="logo" alt="Reuniones"/></a>
           Pruebas de nuevos estilos -->
            <a id="logo-header" href="#">
                    <span class="site-name">Edwin Marquez</span>
                    <span class="site-desc">Universidad Politecnica Salesiana</span>
                </a> <!-- / #logo-header -->

            <nav>
              <ul>
                <li><a href="cuenta.php"><img src="img/iconom.png" id="iconomenu"> Home</a></li>
                <li><a href="../../controladores/usuario/cerrarSesion.php" id="">Cerrar Sesion</a></li>
                <li><a href="crear_reuniones.html" id="">Crear Evento</a></li>
              </ul>
            </nav>
        </header>
        <br>
        <br>
        <br>
        <br>
        <form id="formulario01" action="../../controladores/usuario/reAsistir.php" method="POST" >
        <br>
        <label for="regis">Ingrese sus nombre :</label>
                <input type="text" id="regis" name="regis" value="" placeholder="Ingrese su cedula" />
        </form>
                <br>
                <input type="button" onclick="history.back()"  class="regresar" id="regresar" name="regresar" value="Regresar" 
                style="  background: linear-gradient(#FFDA63, #FFB940);
                         border: 0;
                            color: brown;
                             opacity: 0.8;
                                 cursor: pointer;
                                    border-radius: 25px;
                                     height: 40px;
                                     width:10%;
                                         text-align: center;" />

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
                <br>
                <br>
        <br>
        <table style="width:50% ; background-color:rgba(75, 72, 69, 0.705) ; color:white">
            <tr>
                <th>Codigo</th>
                <th>Asistentes</th>
                
                
            </tr>
            <?php
                    

                    include '../../../config/conexionBD.php';
                    $codigo = isset($_POST["regis"]) ? trim($_POST["regis"]): null;

                    $sql = "SELECT * FROM registro; " ;
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                            $sql = "SELECT * FROM registro  where re_usu_re_codigo = '$codigo'  ; " ;
                            $result = $conn->query($sql);
                            
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo " <td>" . $row["re_usu_codigo"] . "</td>";
                                echo " <td>" . $row["re_usu_asistente"] . "</td>";
                            
                                echo "</tr>";
                                
                            }

                    } else {
                        echo "<tr>";
                        echo " <td colspan='7'> No existen eventos registrados en el sistema </td>";
                        echo "</tr>";
                        }
                    $conn->close();
            ?>
        </table>

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