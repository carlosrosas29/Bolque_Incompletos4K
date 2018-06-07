<?php
if (isset($_POST['Id'])&& isset($_POST['Calificacion1'])&& isset($_POST['Calificacion2'])&& isset($_POST['Calificacion3'])) {
$Id=$_POST['Id'];
$Calificacion1=$_POST['Calificacion1'];
$Calificacion2=$_POST['Calificacion2'];
$Calificacion3=$_POST['Calificacion3'];
$Suma=$Calificacion1+$Calificacion2+$Calificacion3;
$Promedio=$Suma/3;
$Final=$Promedio*10;
//$scrip_name=getcacwd()."EjemploR"; // aqui va el link de R
//$exec_command="Rscript $script_name $Calificacion1, ";
	$conexion=new mysqli("localhost","root","","usuarios");
	 $statement ="UPDATE proyectos SET CalificacionUno = '$Calificacion1',CalificacionDos = '$Calificacion2',
	 CalificacionTres = '$Calificacion3',CalificacionTotal='$Suma',Puntaje='$Final' WHERE Id = $Id "; //la insercion de las calificaciones
   if ($conexion->query($statement) === TRUE) {
          echo '<script lenguage="javascript"> alert("Se guardo correctamente la calificacion del proyecto evalua los demas");';
          echo "window.location='Evaluadores.php';";
          echo "</script>";
   } else {
      echo "Error al crear el registro: $conexion->error";
   }
   //mysql_close($conexion);
}
?>