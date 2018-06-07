<html>
   <head> 
      <title>Pagina de Calificaciones</title>
   </head>
  <body bgcolor=papayawhip text=black>
<table border=3>
<?php
	$conexion=new mysqli("localhost","root","","usuarios");
	$statement="SELECT * FROM proyectos";
	$result=$conexion->query($statement);
	$numfilas=$result->num_rows;

       for($x=0;$x<$numfilas;$x++)
       {
        $fila=$result->fetch_array();
        echo"<tr>";
        echo"<td>".$fila['NombreP']."</td>";
        echo "<tr>";
        echo "<td>".$fila['CalificacionUno']."</td>";
        echo"</tr>";
        echo"<tr>";
        echo "<td>".$fila['CalificacionDos']."</td>";
        echo"</tr>";
        echo"<tr>";
        echo "<td>".$fila['CalificacionTres']."</td>";
        echo"</tr>";
        }
?>
</table>
</body>
</html>