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
                <li><a href="eventos.php" id="">Ver Eventos</a></li>
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

 <table style="width:100%">
 <tr>
 <th>Cedula</th>
 <th>Nombres</th>
 <th>Apellidos</th>
 <th>Dirección</th>
 <th>Telefono</th>
 <th>Correo</th>
 <th>Fecha Nacimiento</th>
 <th>Eliminar</th>
 <th>Modificar</th>
 <th>Cambiar</th>
 </tr>
 <?php
 include '../../../config/conexionBD.php';
 $sql = "SELECT * FROM usuario where usu_eliminado= 'N' and usu_tipo_user ='user'" ;
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {
 echo "<tr>";
 echo " <td>" . $row["usu_cedula"] . "</td>";
 echo " <td>" . $row['usu_nombres'] ."</td>";
 echo " <td>" . $row['usu_apellidos'] . "</td>";
 echo " <td>" . $row['usu_direccion'] . "</td>";
 echo " <td>" . $row['usu_telefono'] . "</td>";
 echo " <td>" . $row['usu_correo'] . "</td>";
 echo " <td>" . $row['usu_fecha_nacimiento'] . "</td>";
 echo " <td> <a href='eliminar.php?codigo=" . $row['usu_codigo'] . "'>Eliminar</a> </td>";
 echo " <td> <a href='modificar.php?codigo=" . $row['usu_codigo'] . "'>Modificar</a> </td>";
 echo " <td> <a href='cambiar_contrasena.php?codigo=" . $row['usu_codigo'] . "'>Cambiar
contraseña</a> </td>";

 echo "</tr>";

 }
 } else {
 echo "<tr>";
 echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
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