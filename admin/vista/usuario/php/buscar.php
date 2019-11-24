<?php
 //incluir conexión a la base de datos
 include '../../../../config/conexionBD.php';

 $cedula = $_GET['cedula'];
 //echo "Hola " . $cedula;

 $sql = "SELECT * FROM reunion WHERE re_motivo='$cedula'";
//cambiar la consulta para puede buscar por ocurrencias de letras
 $result = $conn->query($sql);
 echo " <table style='width:100%'>
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
 </tr>";
 if ($result->num_rows > 0) {
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
 echo "</table>";
 $conn->close();

?>