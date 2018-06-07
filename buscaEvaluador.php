<html>
   <head>
      <title> Evaluadores registrados</title>
   </head>
   <body bgcolor=papayawhip text=black>
	<table width="1360" height="30" border="0" bgcolor="deeppink" cellpadding="0" cellspacing="0">
   	<th>
	   <div align="left">
		<font size="10" color="white">Evaluaci&oacute;n de proyectos &nbsp;&nbsp;&nbsp;&nbsp; 
		<font size="5">Administrador 
		<button style="background-color:green; color:white"type="submit">Cerrar sesion</button> 
		</font>
	   </div> 
	 </th>
	 </table>
<table>
   <thead>
    <tr>
      <td>ID</td>
      <td>Nombre&nbsp;&nbsp;</td>
      <td>Correo electr&oacute;nico  &nbsp;&nbsp; </td>
    </tr>
   </thead>
<?php
$Buscar=$_POST['Buscar'];
if (!isset($Buscar))
 {
 	echo"debe de especificar un valor a buscar";
 	exit;
 }
	  $conexion=new mysqli("localhost","root","","usuarios"); //coneccion de ala base de datos
		$statement ="SELECT * FROM evaluadores WHERE Nombre LIKE '%$Buscar%' ORDER BY Nombre";
		 $result=$conexion->query($statement);
		 $numfilas=$result->num_rows;
		 echo "El numero de filas es: ".$numfilas;

		   for($x=0;$x<$numfilas;$x++)
		   {
		 	  $fila=$result->fetch_array();
		 	  echo "<tr>";
		 	  echo "<td>".$fila['Id']."</td>";
		 	  echo "<td>".$fila['Nombre']."</td>";
		 	  echo "<td>".$fila['Correo']."</td>";
		    }
		  //  $result->event_free();
   ?>
          <script lenguage="javascript">
       <!--
       function Regresar() {
       window.location='CapturaEvaluadores.html';//, "Ventana", "width=500,height=400,scrollbars=yes,toolbar=no");

       }
       //-->
       </script>
        <center> <button type="sumit" onClick="Regresar()">Regresar</button>  </center>
   </table>
</body>
</html>