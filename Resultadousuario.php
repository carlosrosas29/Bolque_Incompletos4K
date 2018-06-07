<html>
   <head>
      <title> Registro </title>
   </head>
   <body bgcolor=papayawhip text=black>
   	<form action="Cerrar.php" method="post">
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
	 </form> 
<table width="600" height="10" border="0" bgcolor="deeppink" cellpadding="0" cellspacing="0">
	<th>
	 <div align="left">
	 <font size="5"> 
	<a href="Registro.html">Registrar proyecto</a>
	<th>
<a href="ConsultaProyectos.php">Mis proyectos</a> 
 <th> <a href="Resultadousuario.php">Resultados</a>
	</font>
	 </th>
</table>
<center> <font color="deeppink"> <h2> M&eacute;todo BIB  </h2> <font></center> 
<table border=3>
<colgroup span="4" style="background:Gainsboro; border:4;"></colgroup>   
  <caption><font size="6" color="deeppink">M&eacute;todo Tradicional </font></caption>
<tr>
<td>Posicion</td>
<td>ID</td>
<td>Nombre</td>
<td>Puntaje</td>
</tr>
<?php
	$conexion=new mysqli("localhost","root","","usuarios");
	$statement="SELECT * FROM proyectos";
	$result=$conexion->query($statement);
	$numfilas=$result->num_rows;
       for($x=0;$x<$numfilas;$x++)
       {
        $fila=$result->fetch_array();
        echo"<tr>";
        echo"<td>".$fila['Id']."</td>";
        echo "<td>".$fila['Id']."</td>";
        echo "<td>".$fila['NombreP']."</td>";
        echo "<td>".$fila['Puntaje']."</td>";
        }
?>
</table>
</body>
</html>