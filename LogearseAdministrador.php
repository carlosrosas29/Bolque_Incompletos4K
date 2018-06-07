<?php
session_start();
  if (isset($_POST['Usuario']) && isset($_POST['pass'])) 
  {
      $username = $_POST['Usuario'];
      $password = $_POST['pass'];
      $conexion=new mysqli("localhost","root","","usuarios");

      if ($conexion->connect_error) 
      {
     die("Conexion failure: " . $conexion->connect_error);
    }

    $statement = "SELECT * FROM administradores WHERE correo= '$username'";
    $result = $conexion->query($statement);
     if ($result->num_rows > 0) {
       $row = $result->fetch_array(MYSQLI_ASSOC);

        if (($password) === $row['password'])
        {
          $_SESSION['logged'] = true;
          $_SESSION['Usuario'] = $username;
          $_SESSION['start'] = time();
          $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

          echo '<script lenguage="javascript"> alert("Bienvenido");';
          echo "window.location='Administrador.html';";
          echo "</script>";
          echo "<a href='Administrador.html'>Registro</a>";
         
         } 
         else
          {
            echo "Credenciales incorrectas.";
          }
        }else{
          echo '<script lenguage="javascript"> alert("Usuario incorrecto");';
          echo "window.location.href='PaginaPrincipal.html';";
          echo "</script>";
        }

        mysqli_close($conexion);
  }


?>
