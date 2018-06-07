<?php
if (isset($_POST['Encargado'])&& isset($_POST['Nombre']) && isset($_POST['Especialidad'])&& isset($_POST['Fechaini']) && isset($_POST['Fechafin'])&& isset($_POST['Descripcion'])) 
{
   $Encargado = $_POST['Encargado'];
   $Nombre=$_POST['Nombre'];
   $Especialidad=$_POST['Especialidad'];
   $Fechaini=$_POST['Fechaini'];
   $Fechafin=$_POST['Fechafin'];
   $Descripcion=$_POST['Descripcion'];
   $conexion=new mysqli("localhost","root","","usuarios");
	//$sql="INSERT INTO user (nombre,apellido,correo,password) VALUES($Nombre,$Apellidos,$Correo,$Password)";
	 $statement ="INSERT INTO combocatoria (Encargado,Nombre,Especialidad,Fechaini,Fechafin,Descripcion) 
	 VALUES('$Encargado','$Nombre','$Especialidad','$Fechaini','$Fechafin','$Descripcion')"; //la insercion de los valores
	//mysql_query($sql);
   if ($conexion->query($statement) === TRUE) {
   
     echo "Registro creado. <a href='CreacionCombocatorias.html'>Creacion de combocatorias</a>";
   } else {
      echo "Error al crear el registro: $conexion->error";
   }
   //mysql_close($conexion);
}
?>