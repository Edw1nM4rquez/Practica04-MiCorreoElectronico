<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Crear Nuevo Asistente al evento</title>
 <style type="text/css" rel="stylesheet">
 .error{
 color: red;
 }
 </style>
</head>
<body>
 <?php
 
 //incluir conexión a la base de datos
 include '../../../config/conexionBD.php';

 $reunion = isset($_POST["regis"]) ? trim($_POST["regis"]): null;
 $nombre = isset($_POST["nombres"]) ? trim($_POST["nombres"]): null;

 $sql = "INSERT INTO registro VALUES (0, '$reunion', '$nombre')";

 if ($conn->query($sql) === TRUE) {
    header("Location: ../../vista/usuario/cuenta.php");
 } else {
 
 echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
 
 }

 //cerrar la base de datos
 $conn->close();
 

 ?>
</body>
</html>