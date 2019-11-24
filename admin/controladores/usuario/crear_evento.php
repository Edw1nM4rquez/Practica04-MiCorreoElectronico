<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Crear Nuevo Evento</title>
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

 $asunto = isset($_POST["asunto"]) ? trim($_POST["asunto"]): null;
 $fecha = isset($_POST["fecha"]) ? trim($_POST["fecha"]): null;

 $hora = isset($_POST["hora"]) ? trim($_POST["hora"]) : null;

 $lugar = isset($_POST["lugar"]) ? trim($_POST["lugar"]) : null;
 $coordenadas = isset($_POST["cordenadas"]) ? trim($_POST["cordenadas"]): null;
 $remitente = isset($_POST["remitente"]) ? trim($_POST["remitente"]): null;
 $motivos = isset($_POST["motivos"]) ? trim($_POST["motivos"]): null;
 $observaciones = isset($_POST["observaciones"]) ? trim($_POST["observaciones"]) : null;

 $sql = "INSERT INTO reunion VALUES (0, '$fecha', '$asunto', '$hora', '$lugar', '$coordenadas',
'$remitente',  '$motivos', '$observaciones', null)";

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