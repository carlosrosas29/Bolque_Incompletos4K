<html>
   <head>
      <title> Resultados </title>
   </head>
   <body bgcolor=papayawhip text=black>
	<table width="1360" height="30" border="0" bgcolor="deeppink" cellpadding="0" cellspacing="0">
   	<th>
	   <div align="left">
		<font size="10" color="white">Evaluaci&oacute;n de proyectos &nbsp;&nbsp;&nbsp;&nbsp; 
		<font size="5">Administrador

       <script lenguage="javascript">
       <!--
       function Cerrar_Session() {
       window.location='PaginaPrincipal.php';

       }
       //-->
       </script>
		 <button type="submit" onclick="Cerrar_Session()"style="background-color:green;color:white">Cerrar sesion</button> 
		</font>
	   </div> 
	 </th>
	 </table>
	<br>
<script lenguage="javascript">
       <!--
       function abre_Resultados() {
       window.location='Resultados.php';

       }
       //-->
       </script>
     <script lenguage="javascript">
       <!--
       function abre_Metricas() {
       window.location='CreacionMetricas.html';

       }
       //-->
       </script>
       <script lenguage="javascript">
       <!--
       function abre_Captura() {
       window.location='CapturaEvaluadores.html';//, "Ventana", "width=500,height=400,scrollbars=yes,toolbar=no");

       }
       //-->
       </script>
       <script lenguage="javascript">
       <!--
       function abre_CreacionCombo() {
       window.location='CreacionCombocatorias.html';//, "Ventana", "width=500,height=400,scrollbars=yes,toolbar=no");

       }
       //-->
       </script>
	     <select name="programa">    
       <option selected="selected">Seleciona una opcion </option>
       <option value="CapturaEvaluador" onClick="abre_Captura ()">Captura de evaluadores</option>
       <option value="CreacionMetricas" onClick="abre_Metricas()">Creaci&oacute;n de metricas</option>
       <option value="ResultadosFinales" onClick="abre_Resultados()">Resultados finales</option>
       <option value="CrearCombocatoria" onClick="abre_CreacionCombo()">Creacion de combocatorias</option>
       </select>
<center> <font color="deeppink"> <h2>M&eacute;todo BIB  </h2> <font></center> 
</table>
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