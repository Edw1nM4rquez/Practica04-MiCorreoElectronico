<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Gestión de usuarios</title>
 <link rel="stylesheet" href="css/regla22.css">
</head>
<body>

<header id="main-header">
            <!--  <a link="index.html"><img src="img/logo.jpg" id="logo" alt="Reuniones"/></a>
           Pruebas de nuevos estilos -->
            <a id="logo-header" href="#">
                    <span class="site-name">Administrador</span>
                    <span class="site-desc">Universidad Politecnica Salesiana</span>
                </a> <!-- / #logo-header -->

            <nav>
              <ul>
                <li><a href="adminW.php"><img src="img/iconom.png" id="iconomenu"> Home</a></li>
                <li><a href="../../controladores/usuario/cerrarSesion.php" id="">Cerrar Sesion</a></li>
                <li><a href="" id="">Ver Eventos</a></li>
                <li><a href=" " id="">Mis datos</a></li>
              </ul>
            </nav>
        </header>
        <br>
        <br>
        <br>
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
                <th>Estado Evento</th>
                
                <th> Eliminar</th>
                
            </tr>
            <?php
                    include '../../../config/conexionBD.php';
                    $sql = "SELECT * FROM reunion ; " ;
                    $result = $conn->query($sql);





                    if ($result->num_rows > 0) {

                            $sql = "SELECT * FROM reunion Where re_eliminada='N' ORDER BY re_fecha_creacion DESC; " ;
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
                                
                                echo " <td> <a href='eliminarE.php?codigo=" . $row['re_codigo'] . "'>Eliminar</a> </td>";
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