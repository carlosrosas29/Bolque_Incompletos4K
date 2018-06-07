<html>
<head>
<title> Index</title>
</head>
<body style="background:url(PP.jpg) no-repeat; width:100%; height:150px; background-size:100%;" text=white>
<form action="LogearseAdministrador.php" method="post">
   <table width="1360" height="30" border="0"  style="background:url(PP.jpg) no-repeat; width:100%; height:150px; background-size:100%;"  cellpadding="0" cellspacing="0"> 
   <th>
	<div align="left">
	 <center><h1> Bienvenido</h1> </center>
	<h3><center>Si eres administrador ingresa tu correo y tu contrase&ntilde;a en la siguiente sesion </center></h3> 
	</div> 
	<div align="center">   
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   	 <label for="Correo_Electronico">Correo electronico:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   </label>
	   <label for="Contraseña">Contrase&ntilde;a:</label> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
		<button type="submit" style="background:crimson;color:white">Iniciar sesion</button> 
		<br>
   </form> 
	</div>
	<div align="center">         
		<input type="Email" id="Email" size="35" maxlength="50" placeholder="ejemplo@gmail.com" name="Usuario" > 
         	&nbsp;
         	<input type="password" id="password" size="25" maxlength="25" placeholder="Password" name="pass"/> &nbsp;
 		<br>
		 <center>
		 <a href="Ayuda.html">Olvidaste tu contrase&ntilde;a? </a> &nbsp; &nbsp;
		 </center>
        </div>
   </th>
   </table>
<form action="Login.html" method="post">
 	<h4> Convocatorias Disponibles </h4>
 	</table>
<table border='3' >
   <thead>
    <tr>
      <td>Numero</td>
      <td>Nombre</td>
      <td>Descripción</td>
    </tr>
   </thead>
   <br>
 	<?php
 	$conexion=new mysqli("localhost","root","","usuarios"); //coneccion de ala base de datos
		$statement ="SELECT * FROM combocatoria";
		 $result=$conexion->query($statement);
		 $numfilas=$result->num_rows;

		   for($x=0;$x<$numfilas;$x++)
		   {
		 	  $fila=$result->fetch_array();
		 	  echo "<tr>";
		 	  echo "<td>".$fila['Id']."</td>";
		 	  echo "<td>"."<a href='Login.html'>".$fila['Nombre']."</a"."</td>";
		 	  echo "<td>".$fila['Descripcion']."</td>";
		    }
 	/*$conexion=new mysqli("localhost","root","","usuarios");
	$sql=mysqli_query($conexion,"SELECT *FROM combocatoria");
	 $row=mysqli_fetch_array($sql);
      if($row)
      {
      	do{
      		
      	}while($row=mysqli_fetch_array($sql));
      }*/
 	?>
</form>
</body>
</html>