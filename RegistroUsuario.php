<?php

if (isset($_POST['nombre']) && isset($_POST['apeido']) && isset($_POST['correo']) && isset($_POST['Password'])) {
	$Nombre = $_POST['nombre'];
$Apellidos=$_POST['apeido'];
$Correo=$_POST['correo'];
$Password = $_POST['Password'];

	$conexion=new mysqli("localhost","root","","usuarios");
	//$sql="INSERT INTO user (nombre,apellido,correo,password) VALUES($Nombre,$Apellidos,$Correo,$Password)";
	 $statement ="INSERT INTO user (nombre,apellido,correo,password) VALUES('$Nombre','$Apellidos','$Correo','$Password')"; //la insercion de los valores
	//mysql_query($sql);
   if ($conexion->query($statement) === TRUE) {
   
     echo "Registro creado. <a href='Login.html'>Inicia sesi&oacute;n</a>";
   } else {
      echo "Error al crear el registro: $conexion->error";
   }
   //mysql_close($conexion);
}
?>