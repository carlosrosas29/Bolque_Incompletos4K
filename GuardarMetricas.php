<?php

if (isset($_POST['Criterio1'])&& isset($_POST['Calificacion1']) && isset($_POST['Criterio2'])&& isset($_POST['Calificacion2']) && isset($_POST['Criterio3'])&& isset($_POST['Calificacion3'])) {
$Criterio1 = $_POST['Criterio1'];
$Calificacion1=$_POST['Calificacion1'];
$Criterio2=$_POST['Criterio2'];
$Calificacion2=$_POST['Calificacion2'];
$Criterio3=$_POST['Criterio3'];
$Calificacion3=$_POST['Calificacion3'];

	$conexion=new mysqli("localhost","root","","usuarios");
	//$sql="INSERT INTO user (nombre,apellido,correo,password) VALUES($Nombre,$Apellidos,$Correo,$Password)";
	 $statement ="INSERT INTO metricas (MetricaUno,CalificacionUno,MetricaDos,CalificacionDos,MetricaTres,CalificacionTres) 
	 VALUES('$Criterio1','$Calificacion1','$Criterio2','$Calificacion2','$Criterio3','$Calificacion3')"; //la insercion de los valores
	//mysql_query($sql);
   if ($conexion->query($statement) === TRUE) {
   
     echo "Registro creado. <a href='CapturaEvaluadores.html'>Captura de Evaluadores</a>";
   } else {
      echo "Error al crear el registro: $conexion->error";
   }
   //mysql_close($conexion);
}
?>