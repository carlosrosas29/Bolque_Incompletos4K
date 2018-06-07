<html>
   <head> 
      <title>Pagina de Evaluadores</title>
   </head>
  <body bgcolor=papayawhip text=black>
  <table width="1360" height="30" border="0" bgcolor="deeppink" cellpadding="0" cellspacing="0">
    <th>
     <div align="left">
    <font size="10" color="white">Evaluaci&oacute;n de proyectos &nbsp;&nbsp;&nbsp;&nbsp; 
    <font size="5">Evaluadores  

       <script lenguage="javascript">
       <!--
       function Cerrar_Session() {
       window.location='Login.html';
       }
       //-->
       </script>  
    <button style="background-color:green; color:white" type="submit" onclick="Cerrar_Session()">Cerrar sesion</button> 
    </font>
     </div>
  </table>
  <form action="Muestra.php" method="post">
  <font size="5" color="deeppink">Evaluaci&oacute;n de  proyectos <br>
<select  name="elegido">
   <option selected="selected">Seleciona una opcion </option>
  <?php
    $conexion=new mysqli("localhost","root","","usuarios"); //coneccion de ala base de datos
    $statement ="SELECT * FROM proyectos";
     $result=$conexion->query($statement);
     $numfilas=$result->num_rows;
     //echo "El numero de filas es: ".$numfilas."<br>"; 
       for($x=0;$x<$numfilas;$x++)
       {
        $fila=$result->fetch_array();
        echo "<option value='".$fila['NombreP']."'"."' onclick='Muetra()'>".$fila['NombreP']."</option>";
        }
  ?>
  </select>
  <button style='background-color:deeppink; color:white'type='submit'>Mostrar informacion</button>
 </form>
 <br> <br>
 <table border='3'>
   <thead>
    <tr>
<colgroup span="11" style="background:Gainsboro; border:4;"></colgroup>   
      <td>ID</td>
      <td>Nombre de proyecto&nbsp;&nbsp;</td>
      <td>Descripcion  &nbsp;&nbsp; </td>
      <td>Responsable &nbsp;&nbsp;  </td>
      <td>Apellidos &nbsp;&nbsp;</td>
      <td>Meses&nbsp;&nbsp;   </td>
      <td>Costo</td>
      <td>Criterio 1 </td>
      <td>Criterio 2 </td>
      <td>Criterio 2 </td>
    </tr>
   </thead>
    <?php
    $conexion=new mysqli("localhost","root","","usuarios"); //coneccion de ala base de datos
    $statement ="SELECT * FROM proyectos";
     $result=$conexion->query($statement);
     $numfilas=$result->num_rows;
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
        echo "<td>".$fila['CalificacionUno']."</td>";
        echo "<td>".$fila['CalificacionDos']."</td>";
        echo "<td>".$fila['CalificacionTres']."</td>";
        }
      //  $result->event_free();
   ?>
</table>

</body>
</html>