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
 <title>Modificar datos de persona</title>
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
                <li><a href="" id="">Regresar</a></li>
                
              </ul>
            </nav>
        </header>
<br>
<br>
<br>
<br>
<br>

 <?php
 $codigo = $_GET["codigo"];
 $sql = "SELECT * FROM usuario where usu_codigo=$codigo";
 include '../../../config/conexionBD.php';
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {
 ?>
 <form id="formulario01" method="POST" action="../../controladores/usuario/modificar.php">

 <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
 <label for="cedula">Cedula :</label>
 <input type="text" id="cedula" name="cedula" value="<?php echo $row["usu_cedula"]; ?>"
required placeholder="Ingrese la cedula ..."/>
 <br>
 <br>
 <label for="nombres">Nombres :</label>
 <input type="text" id="nombres" name="nombres" value="<?php echo $row["usu_nombres"];
?>" required placeholder="Ingrese los dos nombres ..."/>
 <br>
 <br>
 <label for="apellidos">Apelidos :</label>
 <input type="text" id="apellidos" name="apellidos" value="<?php echo $row["usu_apellidos"];
?>" required placeholder="Ingrese los dos apellidos ..."/>
 <br>
 <br>
 <label for="direccion">Dirección :</label>
 <input type="text" id="direccion" name="direccion" value="<?php echo $row["usu_direccion"];
?>" required placeholder="Ingrese la dirección ..."/>
 <br>
 <br>
 <label for="telefono">Teléfono :</label>
 <input type="text" id="telefono" name="telefono" value="<?php echo $row["usu_telefono"];
?>" required placeholder="Ingrese el teléfono ..."/>
 <br>
 <br>
 <label for="fecha">Fecha Nacimiento :</label>
 <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo
$row["usu_fecha_nacimiento"]; ?>" required placeholder="Ingrese la fecha de nacimiento ..."/>
 <br>
 <br>
 <label for="correo">Correo electrónico :</label>
 <input type="email" id="correo" name="correo" value="<?php echo $row["usu_correo"]; ?>"
required placeholder="Ingrese el correo electrónico ..."/>
 <br>
 <br>
 <input type="submit" id="modificar" name="modificar" value="Modificar" />
 <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />
 </form>
 <?php
 }
 } else {
 echo "<p>Ha ocurrido un error inesperado !</p>";
 echo "<p>" . mysqli_error($conn) . "</p>";
 }
 $conn->close();
 ?>

 
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
