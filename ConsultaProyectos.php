<html>
   <head>
      <title> Mis proyectos </title>
   </head>
   <body bgcolor=papayawhip text=deeppink>
	<table width="1360" height="30" border="0" bgcolor="deeppink" cellpadding="0" cellspacing="0">
   	<th>
	   <div align="left">
		<font size="10" color="white">Evaluaci&oacute;n de proyectos &nbsp;&nbsp;&nbsp;&nbsp; 
		<font size="5">Usuarios 
       <script lenguage="javascript">
       <!--
       function Cerrar_Session() {
       window.location='Login.html';
       }
       //-->
       </script>
		<button type="submit" style="background-color:green ;color:white" onclick="Cerrar_Session()">Cerrar sesion</button> 
		</font>
	   </div> 
	 </th>
	 </table>
<br>
<table width="600" height="10" border="0" bgcolor="deeppink" cellpadding="0" cellspacing="0">
	<th>
	 <div align="left">
	 <font size="5"> 
	<a href="Registro.html">Registrar proyecto</a>
	<th>
<a href="ConsultaProyectos.php">Mis proyectos</a> 
 <th> <a href="Resultadousuario.php">Resultados </a>
	</font>
	 </th>
</table>
<table border='3'>
   <thead>
    <tr>
<colgroup span="2" style="background:Gainsboro; border:4;"></colgroup>   
<colgroup span="2" style="background:Gainsboro; border:4;"></colgroup>   
<colgroup span="2" style="background:Gainsboro; border:4;"></colgroup>
<colgroup span="2" style="background:Gainsboro; border:4;"></colgroup>   

      <td>ID</td>
      <td>Nombre de proyecto&nbsp;&nbsp;</td>
      <td>Descripcion  &nbsp;&nbsp; </td>
      <td>Responsable &nbsp;&nbsp;  </td>
      <td>Apellidos &nbsp;&nbsp;</td>
      <td>Meses&nbsp;&nbsp;   </td>
      <td>Costo</td>
    </tr>
   </thead>
    <?php
	  $conexion=new mysqli("localhost","root","","usuarios"); //coneccion de ala base de datos
		$statement ="SELECT * FROM proyectos";
		 $result=$conexion->query($statement);
		 $numfilas=$result->num_rows;
		 //echo "El numero de filas es: ".$numfilas;

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
</body>
</html>