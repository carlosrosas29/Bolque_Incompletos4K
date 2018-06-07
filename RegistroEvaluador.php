<?php

if (isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['correo'])) {
	$Nombre = $_POST['nombre'];
$Apellidos=$_POST['apellidos'];
$Correo=$_POST['correo'];

	$conexion=new mysqli("localhost","root","","usuarios");
	//$sql="INSERT INTO user (nombre,apellido,correo,password) VALUES($Nombre,$Apellidos,$Correo,$Password)";
	 $statement ="INSERT INTO evaluadores (Nombre,Apellidos,Correo) VALUES('$Nombre','$Apellidos','$Correo')"; //la insercion de los valores
	//mysql_query($sql);
   if ($conexion->query($statement) === TRUE) 
   {sssss
      echo '<script lenguage="javascript"> alert("Registro creado");';
      echo "window.location='CapturaEvaluadores.html';";
      echo "</script>";
     //echo "Registro creado. <a href='CapturaEvaluadores.html'>Captura de Evaluadores</a>";
   } else {
      echo "Error al crear el registro: $conexion->error";
   }
   //mysql_close($conexion);
}
?>