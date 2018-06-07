<html>
   <head>
      <title> Muestra informacion </title>
   </head>
   <body bgcolor=papayawhip text=black>
   <form action="Guardar.php" method="post">
<table border='3'>
   <thead>
    <tr>
<colgroup span="12" style="background:Gainsboro; border:4;"></colgroup>   
      <td>Proyecto numero</td>
      <td>Nombre de proyecto&nbsp;&nbsp;</td>
      <td>Descripcion  &nbsp;&nbsp; </td>
      <td>Responsable &nbsp;&nbsp;  </td>
      <td>Apellidos &nbsp;&nbsp;</td>
      <td>Meses&nbsp;&nbsp;   </td>
      <td>Costo</td>
    </tr>
   </thead>
    <?php
    $elegido=$_POST['elegido'];
    if(!isset($elegido))
    {
      echo"Selecciona un registro";
      exit;
    }

    $conexion=new mysqli("localhost","root","","usuarios"); //coneccion de ala base de datos
    $statement ="SELECT * FROM proyectos WHERE NombreP LIKE '%$elegido%' ORDER BY NombreP";
    //$statement ="SELECT * FROM evaluadores WHERE Nombre LIKE '%$Buscar%' ORDER BY Nombre";
     $result=$conexion->query($statement);
     $numfilas=$result->num_rows;
     echo "El numero de filas es: ".$numfilas;

       for($x=0;$x<$numfilas;$x++)
       {
        $fila=$result->fetch_array();
        echo "<tr>";
        echo "<td>".$fila['Id']."</td>";
        echo "<td>".$fila['NombreP']."</td>";
        echo "<td>".$fila['Descripcion']."</td>";
        echo "<td>".$fila['NombreR']."</td>";
        echo "<td>".$fila['Apellidos']."</td>";
        echo "<td>".$fila['Meses']."</td>";
        echo "<td>".$fila['Costo']."</td>";
        }
      //  $result->event_free();
   
   ?>
</table>
    <h4>Ingresa el numero de Proyecto <input type='text' name='Id'></h4>
<table border="4" aling="center">
<colgroup span="2" style="background:chocolate; border:4;"></colgroup>
<tr>
<th>Criterio</th> 
<th colspan="2">Calificacion</th>
</tr>
<?php
    $conexion=new mysqli("localhost","root","","usuarios"); //coneccion de ala base de datos
    $statement ="SELECT * FROM metricas";
     $result=$conexion->query($statement);
     $numfilas=$result->num_rows;
     //echo "El numero de filas es: ".$numfilas;

       for($x=0;$x<$numfilas;$x++)
       {
        $fila=$result->fetch_array();
        echo "<tr>";
        echo "<td>".$fila['MetricaUno']."</td>";
        echo"<td>"."<input type='number' name='Calificacion1' step='1' min='0' max='10'>"."</td>";
        echo"</tr>";
        echo"<tr>";
        echo "<td>".$fila['MetricaDos']."</td>";
        echo"<td>"."<input type='number' name='Calificacion2' step='1' min='0' max='10'>"."</td>";
        echo"</tr>";
        echo"<tr>";
        echo "<td>".$fila['MetricaTres']."</td>";
        echo"<td>"."<input type='number' name='Calificacion3' step='1' min='0' max='10'>"."</td>";
        echo"</tr>";
        }
      //  $result->event_free();
   ?>
</table>
<button style="background-color:green; color:white" type="submit">Guardar Calificacion</button> 
</form>
<button style="background-color:green; color:white" type="submit" onclick="Regresar()">Regresar</button> 
<script>
function Regresar(){
  window.location="Evaluadores.php";
}
</script>
</body>
</html>