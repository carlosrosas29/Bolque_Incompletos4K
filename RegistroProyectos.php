<?php

if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['nombreReponsable']) && isset($_POST['apeido_Responsable'])&& isset($_POST['Meses'])&& isset($_POST['Costo'])) {
	$NombreP = $_POST['nombre'];
$Descripcion=$_POST['descripcion'];
$NombreR=$_POST['nombreReponsable'];
$Apellidos= $_POST['apeido_Responsable'];
$Meses= $_POST['Meses'];
$Costo=$_POST['Costo'];

	$conexion=new mysqli("localhost","root","","usuarios");
	//$sql="INSERT INTO user (nombre,apellido,correo,password) VALUES($Nombre,$Apellidos,$Correo,$Password)";
	$statement ="INSERT INTO proyectos (NombreP,Descripcion,NombreR,Apellidos,Meses,Costo) VALUES('$NombreP','$Descripcion','$NombreR','$Apellidos','$Meses','$Costo')"; //la insercion de los valores
   if ($conexion->query($statement) === TRUE) 
   {
     //echo "Registro creado. <a href='Registro.html'>Registro de Proyectos;n</a>";
                         echo '<script lenguage="javascript"> alert("Registro creado");';
                         echo "window.location='Registro.html';";
                         echo "</script>";
   } else {
      echo "Error al crear el registro: $conexion->error";
   }
   mysql_close($conexion);
}
?>