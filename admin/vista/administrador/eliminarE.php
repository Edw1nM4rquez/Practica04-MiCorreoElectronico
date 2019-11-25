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
 <link rel="stylesheet" href="css/regla22.css">
 <title>Eliminar datos de persona</title>
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
 $sql = "SELECT * FROM reunion where re_codigo=$codigo";

 include '../../../config/conexionBD.php';
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {
 ?>
 <form id="formulario01" method="POST" action="../../controladores/administrador/eliminarE.php">
 <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
 <label for="fecha">Fecha (*)</label>
 <input type="date" id="fecha" name="fecha" value="<?php echo $row["re_fecha_re"]; ?>"
disabled/>
 <br>
 <br>
 <label for="tema">Tema (*)</label>
 <input type="text" id="tema" name="tema" value="<?php echo $row["re_tema"];
?>" disabled/>
 <br>
 <br>
 <label for="hora">Hora (*)</label>
 <input type="time" id="hora" name="hora" value="<?php echo $row["re_hora"];
?>" disabled/>
 <br>
 <br>
 <label for="lugar">Lugar (*)</label>
 <input type="text" id="lugar" name="lugar" value="<?php echo $row["re_lugar"];
?>" disabled/>
 <br>
 <br>
 <label for="cordenada">Cordenada (*)</label>
 <input type="text" id="cordenada" name="cordenada" value="<?php echo $row["re_coordenada"];
?>" disabled/>
 <br>
 <br>
 <label for="remitente">Remitente (*)</label>
 <input type="text" id="remitente" name="remitente" value="<?php echo
$row["re_remitente"]; ?>" disabled/>
 <br>
 <br>
 <label for="motivo">Motivo (*)</label>
 <input type="text" id="motivo" name="motivo" value="<?php echo $row["re_motivo"]; ?>"
disabled/>
 <br>
 <br>
 <label for="observacion">Observacion (*)</label>
 <input type="text" id="observacion" name="observacion" value="<?php echo $row["re_observacion"]; ?>"
disabled/>
 <br>
 <br>
 <br>
 <input type="submit" id="eliminar" name="eliminar" value="Eliminar" />

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